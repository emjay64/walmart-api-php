<?php

/**
 * StatusInfo
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
 * Price Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Prices;

use Walmart\Models\BaseModel;

/**
 * StatusInfo Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class StatusInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'StatusInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'subsidyEnrolled' => 'bool',
        'subsidyPreference' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'subsidyEnrolled' => null,
        'subsidyPreference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'subsidyEnrolled' => false,
        'subsidyPreference' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'subsidyEnrolled' => 'subsidyEnrolled',
        'subsidyPreference' => 'subsidyPreference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'subsidyEnrolled' => 'setSubsidyEnrolled',
        'subsidyPreference' => 'setSubsidyPreference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'subsidyEnrolled' => 'getSubsidyEnrolled',
        'subsidyPreference' => 'getSubsidyPreference'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('subsidyEnrolled', $data ?? [], null);
        $this->setIfExists('subsidyPreference', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];


        return $invalidProperties;
    }

    /**
     * Gets subsidyEnrolled
     *
     * @return bool|null
    
     */
    public function getSubsidyEnrolled()
    {
        return $this->container['subsidyEnrolled'];
    }

    /**
     * Sets subsidyEnrolled
     *
     * @param bool|null $subsidyEnrolled A Boolean parameter that allows all sellers to completely enroll in or out of the Competitive Price Adjustment program
     *
     * @return self
    
     */
    public function setSubsidyEnrolled($subsidyEnrolled)
    {
        if (is_null($subsidyEnrolled)) {
            throw new \InvalidArgumentException('non-nullable subsidyEnrolled cannot be null');
        }

        $this->container['subsidyEnrolled'] = $subsidyEnrolled;
        return $this;
    }

    /**
     * Gets subsidyPreference
     *
     * @return bool|null
    
     */
    public function getSubsidyPreference()
    {
        return $this->container['subsidyPreference'];
    }

    /**
     * Sets subsidyPreference
     *
     * @param bool|null $subsidyPreference A Boolean parameter that determines whether offer level subsidy setting override seller level subsidy setting
     *
     * @return self
    
     */
    public function setSubsidyPreference($subsidyPreference)
    {
        if (is_null($subsidyPreference)) {
            throw new \InvalidArgumentException('non-nullable subsidyPreference cannot be null');
        }

        $this->container['subsidyPreference'] = $subsidyPreference;
        return $this;
    }
}
