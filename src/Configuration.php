<?php
/**
 * Configuration
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @email    jesse@highsidelabs.co
 */

/**
 * Authentication & Authorization Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart;

use DateTime;
use InvalidArgumentException;
use phpseclib3\Crypt\RSA;
use RuntimeException;
use Walmart\Enums\Country;
use Walmart\Enums\SecurityScheme;

/**
 * Configuration Class Doc Comment
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class Configuration
{
    /**
     * Associative array to store API key(s) by scheme name
     *
     * @var string[]
     */
    protected array $apiKeys = [];

    /**
     * A map of client IDs to access tokens.
     *
     * @var array[string => Walmart\AccessToken]
     */
    private static array $accessTokens = [];

    /**
     * Client ID for HTTP basic authentication
     *
     * @var string
     */
    protected string $clientId;

    /**
     * Client secret for HTTP basic authentication
     *
     * @var string
     */
    protected string $clientSecret;

    /**
     * The host
     *
     * @var string
     */
    protected string $host = 'https://marketplace.walmartapis.com';

    /**
     * The country to make requests to.
     *
     * @var string
     */
    protected string $country = Country::US;

    /**
     * The private key to use in when signing requests
     *
     * @var string
     */
    protected string $privateKey;

    /**
     * The consumer ID to use in request headers
     *
     * @var string
     */
    protected string $consumerId;

    /**
     * The channel type to use in request headers
     *
     * @var string
     */
    protected string $channelType;

    /**
     * The partner ID to use in Supplier API request headers
     *
     * @var string
     */
    protected string $partnerId;

    /**
     * User agent of the HTTP request
     *
     * @var string
     */
    protected string $userAgent = 'highsidelabs/walmart-api-php/0.5.0';

    /**
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected bool $debug = false;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected string $debugFile = 'php://output';

    /**
     * Temporary folder
     *
     * @var string
     */
    protected static ?string $tempFolderPath = null;

    /**
     * Constructor
     */
    public function __construct(array $options = [])
    {
        $this->validateOptions($options);
    }

    /**
     * Check if the instance is ready for request-signature-based authentication.
     *
     * @return bool
     */
    public function isSignatureAuthReady(): bool
    {
        return isset($this->privateKey) && isset($this->consumerId);
    }

    /**
     * Sets API key by auth scheme name
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme name)
     * @param string $key              API key or token
     *
     * @return $this
     */
    public function setApiKey(string $apiKeyIdentifier, string $key): self
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;
        return $this;
    }

    /**
     * Gets API key by auth scheme name
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme name)
     * @param array $requestInfo Request information to use when retrieving the API key.
     *                           Includes the request path, HTTP method, and millisecond timestamp.
     *
     * @return null|string API key or token
     */
    public function getApiKey(string $apiKeyIdentifier, array $requestInfo): ?string
    {
        // The signature header has to be generated in real-time, since it requires request info
        if ($apiKeyIdentifier === SecurityScheme::SIGNATURE) {
            $signature = $this->sign(...$requestInfo);
            $this->setApiKey($apiKeyIdentifier, $signature);
        }

        return isset($this->apiKeys[$apiKeyIdentifier]) ? $this->apiKeys[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param Walmart\AccessToken|null $accessToken Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken(?AccessToken $accessToken): self
    {
        if (!($accessToken instanceof AccessToken)) {
            throw new InvalidArgumentException('Invalid access token: must be an instance of ' . AccessToken::class);
        }

        self::$accessTokens[$this->clientId] = $accessToken;
        return $this;
    }

    /**
     * Gets the access token for OAuth
     *
     * @return Walmart\AccessToken|null Access token for OAuth
     */
    public function getAccessToken(): ?AccessToken
    {
        if (!array_key_exists($this->clientId, self::$accessTokens) || self::$accessTokens[$this->clientId]->expired()) {
            $authApi = Walmart::marketplace($this)->auth();
            $authResponse = $authApi->tokenAPI('client_credentials');
            $accessToken = $authResponse->getAccessToken();

            self::$accessTokens[$this->clientId] = new AccessToken(
                $accessToken,
                new DateTime("+{$authResponse->getExpiresIn()} seconds")
            );
        }

        return self::$accessTokens[$this->clientId];
    }

    /**
     * Sets the Client ID for HTTP basic authentication
     *
     * @param string $clientId Client ID for HTTP basic authentication
     *
     * @return $this
     */
    public function setClientId(string $clientId): self
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * Gets the client ID for HTTP basic authentication
     *
     * @return string Client ID for HTTP basic authentication
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * Sets the client ID for HTTP basic authentication
     *
     * @param string $clientSecret Client secret for HTTP basic authentication
     *
     * @return $this
     */
    public function setClientSecret(string $clientSecret): self
    {
        $this->clientSecret = $clientSecret;
        return $this;
    }

    /**
     * Gets the client ID for HTTP basic authentication
     *
     * @return string Client secret for HTTP basic authentication
     */
    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    /**
     * Sets country to make requests to
     *
     * @param string $country The country to make requests to. Must be one of the constants in the Country class.
     *
     * @return $this
     */
    public function setCountry(string $country): self
    {
        if (!is_string($country)) {
            throw new InvalidArgumentException('Invalid country passed: must be a string');
        } else if (!Country::isValid($country)) {
            throw new InvalidArgumentException('Invalid country passed: ' . $country . '. Valid countries are: ' . implode(', ', Country::all()));
        }

        $this->country = $country;
        return $this;
    }

    /**
     * Gets country
     *
     * @return string The country requests will be made to
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Sets the private key to use when generating a request private key
     *
     * @param string $privateKey The private key
     *
     * @return $this
     */
    public function setPrivateKey(string $privateKey): self
    {
        $this->privateKey = $privateKey;
        return $this;
    }

    /**
     * Gets the private key to use when generating a request private key
     *
     * @return string The private key
     */
    public function getPrivateKey(): string
    {
        return $this->privateKey;
    }

    /**
     * Sets the consumer ID to use in request headers
     *
     * @param string $consumerId The consumer ID
     *
     * @return $this
     */
    public function setConsumerId(string $consumerId): self
    {
        $this->consumerId = $consumerId;
        return $this;
    }

    /**
     * Gets the consumer ID to use in request headers
     *
     * @return string The consumer ID
     */
    public function getConsumerId(): string
    {
        return $this->consumerId;
    }

    /**
     * Sets the channel type to use in request headers
     *
     * @param string $channelType The consumer ID
     *
     * @return $this
     */
    public function setChannelType(string $channelType): self
    {
        $this->channelType = $channelType;
        return $this;
    }

    /**
     * Gets the channel type to use in request headers
     *
     * @return string The channel type
     */
    public function getChannelType(): string
    {
        return $this->channelType;
    }

    /**
     * Sets the partner ID to use in Supplier API request headers
     *
     * @param string $partnerId The partner ID
     *
     * @return $this
     */
    public function setPartnerId(string $partnerId): self
    {
        $this->partnerId = $partnerId;
        return $this;
    }

    /**
     * Gets the partner ID to use in Supplier API request headers
     *
     * @return string The partner ID
     */
    public function getPartnerId(): string
    {
        return $this->partnerId;
    }

    /**
     * Sets the host
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost(string $host): self
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserAgent(string $userAgent)
    {
        if (!is_string($userAgent)) {
            throw new InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets debug flag
     *
     * @param bool $debug Debug flag. Default true
     *
     * @return $this
     */
    public function setDebug(bool $debug = true): self
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug(): bool
    {
        return $this->debug;
    }

    /**
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile(string $debugFile): self
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile(): string
    {
        return $this->debugFile;
    }

    /**
     * Sets the temp folder path
     *
     * @param ?string $tempFolderPath Temp folder path
     * @return void
     */
    public static function setTempFolderPath(?string $tempFolderPath = null): void
    {
        if ($tempFolderPath === null) {
            static::$tempFolderPath = sys_get_temp_dir();
        } else {
            static::$tempFolderPath = $tempFolderPath;
        }
    }

    /**
     * Gets the temp folder path
     *
     * @return string Temp folder path
     */
    public static function getTempFolderPath()
    {
        if (isset(static::$tempFolderPath) || static::$tempFolderPath === null) {
            static::setTempFolderPath();
        }
        return static::$tempFolderPath;
    }

    /**
     * Validate the options passed to the constructor
     *
     * @param array $options Associative array of options
     * @throws InvalidArgumentException
     * @return void
     */
    protected function validateOptions(array $options): void
    {
        $validKeys = [
            'clientId', 'clientSecret', 'country', 'accessToken', 'privateKey', 'consumerId', 'channelType', 'partnerId'
        ];
        $invalid = array_diff(array_keys($options), $validKeys);

        if (count($invalid) > 0) {
            throw new InvalidArgumentException('Invalid configuration option(s) passed: ' . implode(', ', $invalid));
        }

        foreach ($validKeys as $key) {
            if (!isset($options[$key]) || $options[$key] === null) {
                continue;
            }
            $this->{'set' . ucfirst($key)}($options[$key]);
        }
    }

    /**
     * Sign the request with the user's private key
     *
     * @param string $path The path to the endpoint being called
     * @param string $method The HTTP method being used to call the endpoint
     * @param int $timestamp The timestamp of the request, to millisecond precision
     *
     * @throws RuntimeException 
     * @return string The request signature
     */
    protected function sign(string $path, string $method, int $timestamp): string
    {
        if (!$this->isSignatureAuthReady()) {
            throw new RuntimeException('Consumer ID and private key must be set to generate a signature');
        }

        $_method = strtoupper($method);
        $stringToSign = "{$this->getConsumerId()}\n{$this->getHost()}{$path}\n{$_method}\n{$timestamp}";

        $decoded = base64_decode($this->getPrivateKey(), true);
        $rsa = RSA::loadFormat('PKCS8', $decoded);
        if (!$rsa) {
            throw new RuntimeException('Unable to load private key');
        }        
        $signature = $rsa->withHash('sha256')->sign($stringToSign);

        return base64_encode($signature);
    }
}
