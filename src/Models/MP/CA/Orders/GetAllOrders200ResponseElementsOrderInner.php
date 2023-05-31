<?php

/**
 * GetAllOrders200ResponseElementsOrderInner
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
 * Order Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\CA\Orders;

use Walmart\Models\BaseModel;

/**
 * GetAllOrders200ResponseElementsOrderInner Class Doc Comment
 *
 * @category Class

 * @description Information about the purchase order

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetAllOrders200ResponseElementsOrderInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getAllOrders_200_response_elements_order_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'purchaseOrderId' => 'string',
        'customerOrderId' => 'string',
        'customerEmailId' => 'string',
        'orderDate' => '\DateTime',
        'shippingInfo' => '\Walmart\Models\MP\CA\Orders\ShippingUpdatesCA200ResponseShippingInfo',
        'orderLines' => '\Walmart\Models\MP\CA\Orders\ShippingUpdatesCA200ResponseOrderLines'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'purchaseOrderId' => null,
        'customerOrderId' => null,
        'customerEmailId' => null,
        'orderDate' => 'date-time',
        'shippingInfo' => null,
        'orderLines' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'purchaseOrderId' => false,
        'customerOrderId' => false,
        'customerEmailId' => false,
        'orderDate' => false,
        'shippingInfo' => false,
        'orderLines' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'purchaseOrderId' => 'purchaseOrderId',
        'customerOrderId' => 'customerOrderId',
        'customerEmailId' => 'customerEmailId',
        'orderDate' => 'orderDate',
        'shippingInfo' => 'shippingInfo',
        'orderLines' => 'orderLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'purchaseOrderId' => 'setPurchaseOrderId',
        'customerOrderId' => 'setCustomerOrderId',
        'customerEmailId' => 'setCustomerEmailId',
        'orderDate' => 'setOrderDate',
        'shippingInfo' => 'setShippingInfo',
        'orderLines' => 'setOrderLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'purchaseOrderId' => 'getPurchaseOrderId',
        'customerOrderId' => 'getCustomerOrderId',
        'customerEmailId' => 'getCustomerEmailId',
        'orderDate' => 'getOrderDate',
        'shippingInfo' => 'getShippingInfo',
        'orderLines' => 'getOrderLines'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('purchaseOrderId', $data ?? [], null);
        $this->setIfExists('customerOrderId', $data ?? [], null);
        $this->setIfExists('customerEmailId', $data ?? [], null);
        $this->setIfExists('orderDate', $data ?? [], null);
        $this->setIfExists('shippingInfo', $data ?? [], null);
        $this->setIfExists('orderLines', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['purchaseOrderId'] === null) {
            $invalidProperties[] = "'purchaseOrderId' can't be null";
        }
        if ($this->container['customerOrderId'] === null) {
            $invalidProperties[] = "'customerOrderId' can't be null";
        }
        if ($this->container['customerEmailId'] === null) {
            $invalidProperties[] = "'customerEmailId' can't be null";
        }
        if ($this->container['orderDate'] === null) {
            $invalidProperties[] = "'orderDate' can't be null";
        }
        if ($this->container['shippingInfo'] === null) {
            $invalidProperties[] = "'shippingInfo' can't be null";
        }
        if ($this->container['orderLines'] === null) {
            $invalidProperties[] = "'orderLines' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets purchaseOrderId
     *
     * @return string
    
     */
    public function getPurchaseOrderId()
    {
        return $this->container['purchaseOrderId'];
    }

    /**
     * Sets purchaseOrderId
     *
     * @param string $purchaseOrderId A unique ID associated with the seller's purchase order
     *
     * @return self
    
     */
    public function setPurchaseOrderId($purchaseOrderId)
    {
        if (is_null($purchaseOrderId)) {
            throw new \InvalidArgumentException('non-nullable purchaseOrderId cannot be null');
        }

        $this->container['purchaseOrderId'] = $purchaseOrderId;
        return $this;
    }

    /**
     * Gets customerOrderId
     *
     * @return string
    
     */
    public function getCustomerOrderId()
    {
        return $this->container['customerOrderId'];
    }

    /**
     * Sets customerOrderId
     *
     * @param string $customerOrderId A unique ID associated with the sales order for specified customer
     *
     * @return self
    
     */
    public function setCustomerOrderId($customerOrderId)
    {
        if (is_null($customerOrderId)) {
            throw new \InvalidArgumentException('non-nullable customerOrderId cannot be null');
        }

        $this->container['customerOrderId'] = $customerOrderId;
        return $this;
    }

    /**
     * Gets customerEmailId
     *
     * @return string
    
     */
    public function getCustomerEmailId()
    {
        return $this->container['customerEmailId'];
    }

    /**
     * Sets customerEmailId
     *
     * @param string $customerEmailId The email address of the customer for the sales order
     *
     * @return self
    
     */
    public function setCustomerEmailId($customerEmailId)
    {
        if (is_null($customerEmailId)) {
            throw new \InvalidArgumentException('non-nullable customerEmailId cannot be null');
        }

        $this->container['customerEmailId'] = $customerEmailId;
        return $this;
    }

    /**
     * Gets orderDate
     *
     * @return \DateTime
    
     */
    public function getOrderDate()
    {
        return $this->container['orderDate'];
    }

    /**
     * Sets orderDate
     *
     * @param \DateTime $orderDate The date the customer submitted the sales order
     *
     * @return self
    
     */
    public function setOrderDate($orderDate)
    {
        if (is_null($orderDate)) {
            throw new \InvalidArgumentException('non-nullable orderDate cannot be null');
        }

        $this->container['orderDate'] = $orderDate;
        return $this;
    }

    /**
     * Gets shippingInfo
     *
     * @return \Walmart\Models\MP\CA\Orders\ShippingUpdatesCA200ResponseShippingInfo
    
     */
    public function getShippingInfo()
    {
        return $this->container['shippingInfo'];
    }

    /**
     * Sets shippingInfo
     *
     * @param \Walmart\Models\MP\CA\Orders\ShippingUpdatesCA200ResponseShippingInfo $shippingInfo shippingInfo
     *
     * @return self
    
     */
    public function setShippingInfo($shippingInfo)
    {
        if (is_null($shippingInfo)) {
            throw new \InvalidArgumentException('non-nullable shippingInfo cannot be null');
        }

        $this->container['shippingInfo'] = $shippingInfo;
        return $this;
    }

    /**
     * Gets orderLines
     *
     * @return \Walmart\Models\MP\CA\Orders\ShippingUpdatesCA200ResponseOrderLines
    
     */
    public function getOrderLines()
    {
        return $this->container['orderLines'];
    }

    /**
     * Sets orderLines
     *
     * @param \Walmart\Models\MP\CA\Orders\ShippingUpdatesCA200ResponseOrderLines $orderLines orderLines
     *
     * @return self
    
     */
    public function setOrderLines($orderLines)
    {
        if (is_null($orderLines)) {
            throw new \InvalidArgumentException('non-nullable orderLines cannot be null');
        }

        $this->container['orderLines'] = $orderLines;
        return $this;
    }
}
