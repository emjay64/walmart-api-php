<?php

/**
 * UpdateBulkInventoryRequestInventoryInner
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
 * Inventory Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\DSV\US\Inventory;

use Walmart\Models\BaseModel;

/**
 * UpdateBulkInventoryRequestInventoryInner Class Doc Comment
 *
 * @category Class

 * @description Specifies an object for inventory information.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class UpdateBulkInventoryRequestInventoryInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'updateBulkInventory_request_inventory_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'productId' => 'string',
        'shipNode' => 'string',
        'availabilityCode' => 'string',
        'quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'productId' => null,
        'shipNode' => null,
        'availabilityCode' => null,
        'quantity' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'productId' => false,
        'shipNode' => false,
        'availabilityCode' => false,
        'quantity' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'productId' => 'productId',
        'shipNode' => 'shipNode',
        'availabilityCode' => 'availabilityCode',
        'quantity' => 'quantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'productId' => 'setProductId',
        'shipNode' => 'setShipNode',
        'availabilityCode' => 'setAvailabilityCode',
        'quantity' => 'setQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'productId' => 'getProductId',
        'shipNode' => 'getShipNode',
        'availabilityCode' => 'getAvailabilityCode',
        'quantity' => 'getQuantity'
    ];


    public const AVAILABILITY_CODE_AA = 'AA';

    public const AVAILABILITY_CODE_AC = 'AC';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAvailabilityCodeAllowableValues()
    {
        return [
            self::AVAILABILITY_CODE_AA,
            self::AVAILABILITY_CODE_AC,
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
        $this->setIfExists('productId', $data ?? [], null);
        $this->setIfExists('shipNode', $data ?? [], null);
        $this->setIfExists('availabilityCode', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['productId'] === null) {
            $invalidProperties[] = "'productId' can't be null";
        }
        if ($this->container['shipNode'] === null) {
            $invalidProperties[] = "'shipNode' can't be null";
        }
        if ($this->container['availabilityCode'] === null) {
            $invalidProperties[] = "'availabilityCode' can't be null";
        }
        $allowedValues = $this->getAvailabilityCodeAllowableValues();
        if (!is_null($this->container['availabilityCode']) && !in_array($this->container['availabilityCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'availabilityCode', must be one of '%s'",
                $this->container['availabilityCode'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets productId
     *
     * @return string
    
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param string $productId Specifies the product identifier for the item.    This parameter can only be a global trade item number (GTIN).   The global trade item number (GTIN) is a 14-digit number, including the check digit, that is used worldwide and identifies the Each. If the user’s number is less than 14 digits, add zeros at the beginning.
     *
     * @return self
    
     */
    public function setProductId($productId)
    {
        if (is_null($productId)) {
            throw new \InvalidArgumentException('non-nullable productId cannot be null');
        }

        $this->container['productId'] = $productId;
        return $this;
    }

    /**
     * Gets shipNode
     *
     * @return string
    
     */
    public function getShipNode()
    {
        return $this->container['shipNode'];
    }

    /**
     * Sets shipNode
     *
     * @param string $shipNode Specifies the distributor identifier for the distribution facility, used to identify each facility.
     *
     * @return self
    
     */
    public function setShipNode($shipNode)
    {
        if (is_null($shipNode)) {
            throw new \InvalidArgumentException('non-nullable shipNode cannot be null');
        }

        $this->container['shipNode'] = $shipNode;
        return $this;
    }

    /**
     * Gets availabilityCode
     *
     * @return string
    
     */
    public function getAvailabilityCode()
    {
        return $this->container['availabilityCode'];
    }

    /**
     * Sets availabilityCode
     *
     * @param string $availabilityCode Specifies the code that identifies how to manage the inventory update.   Codes include:   AC: The code used for standard inventory updates. Assign this code to an item with normal inventory.   AA: An item with infinite inventory. If users set AA as the `availabilityCode`, they do not need to provide inventory for the item.
     *
     * @return self
    
     */
    public function setAvailabilityCode($availabilityCode)
    {
        if (is_null($availabilityCode)) {
            throw new \InvalidArgumentException('non-nullable availabilityCode cannot be null');
        }
        $allowedValues = $this->getAvailabilityCodeAllowableValues();
        if (!in_array($availabilityCode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'availabilityCode', must be one of '%s'",
                    $availabilityCode,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['availabilityCode'] = $availabilityCode;
        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
    
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity Specifies the item quantity available in the inventory.
     *
     * @return self
    
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        $this->container['quantity'] = $quantity;
        return $this;
    }
}
