<?php

/**
 * RepricerStrategyType
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
 * RepricerStrategyType Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class RepricerStrategyType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RepricerStrategyType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'strategyType' => 'string',
        'adjustmentType' => 'string',
        'adjustmentValue' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'strategyType' => null,
        'adjustmentType' => null,
        'adjustmentValue' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'strategyType' => false,
        'adjustmentType' => false,
        'adjustmentValue' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'strategyType' => 'strategyType',
        'adjustmentType' => 'adjustmentType',
        'adjustmentValue' => 'adjustmentValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'strategyType' => 'setStrategyType',
        'adjustmentType' => 'setAdjustmentType',
        'adjustmentValue' => 'setAdjustmentValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'strategyType' => 'getStrategyType',
        'adjustmentType' => 'getAdjustmentType',
        'adjustmentValue' => 'getAdjustmentValue'
    ];


    public const STRATEGY_TYPE_BUY_BOX_PRICE = 'Buy Box Price';

    public const STRATEGY_TYPE_EXTERNAL_PRICE = 'External Price';

    public const STRATEGY_TYPE_COMPETITIVE_PRICE = 'Competitive Price';

    public const ADJUSTMENT_TYPE_UNIT = 'UNIT';

    public const ADJUSTMENT_TYPE_PERCENTAGE = 'PERCENTAGE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStrategyTypeAllowableValues()
    {
        return [
            self::STRATEGY_TYPE_BUY_BOX_PRICE,
            self::STRATEGY_TYPE_EXTERNAL_PRICE,
            self::STRATEGY_TYPE_COMPETITIVE_PRICE,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAdjustmentTypeAllowableValues()
    {
        return [
            self::ADJUSTMENT_TYPE_UNIT,
            self::ADJUSTMENT_TYPE_PERCENTAGE,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('strategyType', $data ?? [], null);
        $this->setIfExists('adjustmentType', $data ?? [], null);
        $this->setIfExists('adjustmentValue', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStrategyTypeAllowableValues();
        if (!is_null($this->container['strategyType']) && !in_array($this->container['strategyType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'strategyType', must be one of '%s'",
                $this->container['strategyType'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAdjustmentTypeAllowableValues();
        if (!is_null($this->container['adjustmentType']) && !in_array($this->container['adjustmentType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'adjustmentType', must be one of '%s'",
                $this->container['adjustmentType'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets strategyType
     *
     * @return string|null
    
     */
    public function getStrategyType()
    {
        return $this->container['strategyType'];
    }

    /**
     * Sets strategyType
     *
     * @param string|null $strategyType strategyType
     *
     * @return self
    
     */
    public function setStrategyType($strategyType)
    {
        if (is_null($strategyType)) {
            throw new \InvalidArgumentException('non-nullable strategyType cannot be null');
        }
        $allowedValues = $this->getStrategyTypeAllowableValues();
        if (!in_array($strategyType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'strategyType', must be one of '%s'",
                    $strategyType,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['strategyType'] = $strategyType;
        return $this;
    }

    /**
     * Gets adjustmentType
     *
     * @return string|null
    
     */
    public function getAdjustmentType()
    {
        return $this->container['adjustmentType'];
    }

    /**
     * Sets adjustmentType
     *
     * @param string|null $adjustmentType adjustmentType
     *
     * @return self
    
     */
    public function setAdjustmentType($adjustmentType)
    {
        if (is_null($adjustmentType)) {
            throw new \InvalidArgumentException('non-nullable adjustmentType cannot be null');
        }
        $allowedValues = $this->getAdjustmentTypeAllowableValues();
        if (!in_array($adjustmentType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'adjustmentType', must be one of '%s'",
                    $adjustmentType,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['adjustmentType'] = $adjustmentType;
        return $this;
    }

    /**
     * Gets adjustmentValue
     *
     * @return float|null
    
     */
    public function getAdjustmentValue()
    {
        return $this->container['adjustmentValue'];
    }

    /**
     * Sets adjustmentValue
     *
     * @param float|null $adjustmentValue adjustmentValue
     *
     * @return self
    
     */
    public function setAdjustmentValue($adjustmentValue)
    {
        if (is_null($adjustmentValue)) {
            throw new \InvalidArgumentException('non-nullable adjustmentValue cannot be null');
        }

        $this->container['adjustmentValue'] = $adjustmentValue;
        return $this;
    }
}
