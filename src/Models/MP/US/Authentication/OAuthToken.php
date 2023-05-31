<?php

/**
 * OAuthToken
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Authentication & Authorization Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Authentication;

use Walmart\Models\BaseModel;

/**
 * OAuthToken Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class OAuthToken extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OAuthToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'accessToken' => 'string',
        'tokenType' => 'string',
        'expiresIn' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'accessToken' => null,
        'tokenType' => null,
        'expiresIn' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'accessToken' => false,
        'tokenType' => false,
        'expiresIn' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'accessToken' => 'access_token',
        'tokenType' => 'token_type',
        'expiresIn' => 'expires_in'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'accessToken' => 'setAccessToken',
        'tokenType' => 'setTokenType',
        'expiresIn' => 'setExpiresIn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'accessToken' => 'getAccessToken',
        'tokenType' => 'getTokenType',
        'expiresIn' => 'getExpiresIn'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('accessToken', $data ?? [], null);
        $this->setIfExists('tokenType', $data ?? [], null);
        $this->setIfExists('expiresIn', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['accessToken'] === null) {
            $invalidProperties[] = "'accessToken' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets accessToken
     *
     * @return string
    
     */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
     * Sets accessToken
     *
     * @param string $accessToken Unique token string generated by the API call
     *
     * @return self
    
     */
    public function setAccessToken($accessToken)
    {
        if (is_null($accessToken)) {
            throw new \InvalidArgumentException('non-nullable accessToken cannot be null');
        }

        $this->container['accessToken'] = $accessToken;
        return $this;
    }

    /**
     * Gets tokenType
     *
     * @return string|null
    
     */
    public function getTokenType()
    {
        return $this->container['tokenType'];
    }

    /**
     * Sets tokenType
     *
     * @param string|null $tokenType Type of token according to user. (e.g., 'BEARER')
     *
     * @return self
    
     */
    public function setTokenType($tokenType)
    {
        if (is_null($tokenType)) {
            throw new \InvalidArgumentException('non-nullable tokenType cannot be null');
        }

        $this->container['tokenType'] = $tokenType;
        return $this;
    }

    /**
     * Gets expiresIn
     *
     * @return int|null
    
     */
    public function getExpiresIn()
    {
        return $this->container['expiresIn'];
    }

    /**
     * Sets expiresIn
     *
     * @param int|null $expiresIn Seconds until expiration of token
     *
     * @return self
    
     */
    public function setExpiresIn($expiresIn)
    {
        if (is_null($expiresIn)) {
            throw new \InvalidArgumentException('non-nullable expiresIn cannot be null');
        }

        $this->container['expiresIn'] = $expiresIn;
        return $this;
    }
}
