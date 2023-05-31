<?php

/**
 * RuleInfo
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
 * Rules Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Rules;

use Walmart\Models\BaseModel;

/**
 * RuleInfo Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class RuleInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RuleInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'conditions' => '\Walmart\Models\MP\US\Rules\Condition[]',
        'description' => 'string',
        'name' => 'string',
        'priority' => 'string',
        'ruleId' => 'string',
        'ruleStatus' => 'string',
        'skuProcessingStatus' => 'string',
        'ruleAction' => '\Walmart\Models\MP\US\Rules\RuleAction'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'conditions' => null,
        'description' => null,
        'name' => null,
        'priority' => null,
        'ruleId' => null,
        'ruleStatus' => null,
        'skuProcessingStatus' => null,
        'ruleAction' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'conditions' => false,
        'description' => false,
        'name' => false,
        'priority' => false,
        'ruleId' => false,
        'ruleStatus' => false,
        'skuProcessingStatus' => false,
        'ruleAction' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'conditions' => 'conditions',
        'description' => 'description',
        'name' => 'name',
        'priority' => 'priority',
        'ruleId' => 'ruleId',
        'ruleStatus' => 'ruleStatus',
        'skuProcessingStatus' => 'skuProcessingStatus',
        'ruleAction' => 'ruleAction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'conditions' => 'setConditions',
        'description' => 'setDescription',
        'name' => 'setName',
        'priority' => 'setPriority',
        'ruleId' => 'setRuleId',
        'ruleStatus' => 'setRuleStatus',
        'skuProcessingStatus' => 'setSkuProcessingStatus',
        'ruleAction' => 'setRuleAction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'conditions' => 'getConditions',
        'description' => 'getDescription',
        'name' => 'getName',
        'priority' => 'getPriority',
        'ruleId' => 'getRuleId',
        'ruleStatus' => 'getRuleStatus',
        'skuProcessingStatus' => 'getSkuProcessingStatus',
        'ruleAction' => 'getRuleAction'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('conditions', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('ruleId', $data ?? [], null);
        $this->setIfExists('ruleStatus', $data ?? [], null);
        $this->setIfExists('skuProcessingStatus', $data ?? [], null);
        $this->setIfExists('ruleAction', $data ?? [], null);
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
     * Gets conditions
     *
     * @return \Walmart\Models\MP\US\Rules\Condition[]|null
    
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param \Walmart\Models\MP\US\Rules\Condition[]|null $conditions Seller creates conditions while defining the custom rule assortment.There are three condition which a seller can use : subCategories, price, weight.
     *
     * @return self
    
     */
    public function setConditions($conditions)
    {
        if (is_null($conditions)) {
            throw new \InvalidArgumentException('non-nullable conditions cannot be null');
        }

        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
    
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the rule created for custom rule assortment.
     *
     * @return self
    
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        $this->container['description'] = $description;
        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
    
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the rule created for custom rule assortment.
     *
     * @return self
    
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;
        return $this;
    }

    /**
     * Gets priority
     *
     * @return string|null
    
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string|null $priority Priority of the rule created for custom rule assortment.
     *
     * @return self
    
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }

        $this->container['priority'] = $priority;
        return $this;
    }

    /**
     * Gets ruleId
     *
     * @return string|null
    
     */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
     * Sets ruleId
     *
     * @param string|null $ruleId Unique identifier of the rule created for custom rule assortment.
     *
     * @return self
    
     */
    public function setRuleId($ruleId)
    {
        if (is_null($ruleId)) {
            throw new \InvalidArgumentException('non-nullable ruleId cannot be null');
        }

        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
     * Gets ruleStatus
     *
     * @return string|null
    
     */
    public function getRuleStatus()
    {
        return $this->container['ruleStatus'];
    }

    /**
     * Sets ruleStatus
     *
     * @param string|null $ruleStatus Status of the rule post the rule creation. Allowed values are Active, Inactive, Submitted.
     *
     * @return self
    
     */
    public function setRuleStatus($ruleStatus)
    {
        if (is_null($ruleStatus)) {
            throw new \InvalidArgumentException('non-nullable ruleStatus cannot be null');
        }

        $this->container['ruleStatus'] = $ruleStatus;
        return $this;
    }

    /**
     * Gets skuProcessingStatus
     *
     * @return string|null
    
     */
    public function getSkuProcessingStatus()
    {
        return $this->container['skuProcessingStatus'];
    }

    /**
     * Sets skuProcessingStatus
     *
     * @param string|null $skuProcessingStatus When the rule gets activated, skuProcessingStatus represents the state of all items being processed for two-day. The two values for skuProcessingStatus are Processing and Completed.
     *
     * @return self
    
     */
    public function setSkuProcessingStatus($skuProcessingStatus)
    {
        if (is_null($skuProcessingStatus)) {
            throw new \InvalidArgumentException('non-nullable skuProcessingStatus cannot be null');
        }

        $this->container['skuProcessingStatus'] = $skuProcessingStatus;
        return $this;
    }

    /**
     * Gets ruleAction
     *
     * @return \Walmart\Models\MP\US\Rules\RuleAction|null
    
     */
    public function getRuleAction()
    {
        return $this->container['ruleAction'];
    }

    /**
     * Sets ruleAction
     *
     * @param \Walmart\Models\MP\US\Rules\RuleAction|null $ruleAction ruleAction
     *
     * @return self
    
     */
    public function setRuleAction($ruleAction)
    {
        if (is_null($ruleAction)) {
            throw new \InvalidArgumentException('non-nullable ruleAction cannot be null');
        }

        $this->container['ruleAction'] = $ruleAction;
        return $this;
    }
}
