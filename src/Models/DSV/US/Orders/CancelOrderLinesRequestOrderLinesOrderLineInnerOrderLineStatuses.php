<?php

/**
 * CancelOrderLinesRequestOrderLinesOrderLineInnerOrderLineStatuses
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

namespace Walmart\Models\DSV\US\Orders;

use Walmart\Models\BaseModel;

/**
 * CancelOrderLinesRequestOrderLinesOrderLineInnerOrderLineStatuses Class Doc Comment
 *
 * @category Class

 * @description Information to update the orderLine with cancellation details

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CancelOrderLinesRequestOrderLinesOrderLineInnerOrderLineStatuses extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'cancelOrderLines_request_orderLines_orderLine_inner_orderLineStatuses';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'orderLineStatus' => '\Walmart\Models\DSV\US\Orders\CancelOrderLinesRequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'orderLineStatus' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orderLineStatus' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'orderLineStatus' => 'orderLineStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'orderLineStatus' => 'setOrderLineStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'orderLineStatus' => 'getOrderLineStatus'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('orderLineStatus', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['orderLineStatus'] === null) {
            $invalidProperties[] = "'orderLineStatus' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets orderLineStatus
     *
     * @return \Walmart\Models\DSV\US\Orders\CancelOrderLinesRequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInner[]
    
     */
    public function getOrderLineStatus()
    {
        return $this->container['orderLineStatus'];
    }

    /**
     * Sets orderLineStatus
     *
     * @param \Walmart\Models\DSV\US\Orders\CancelOrderLinesRequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInner[] $orderLineStatus List of details about the cancellation status update
     *
     * @return self
    
     */
    public function setOrderLineStatus($orderLineStatus)
    {
        if (is_null($orderLineStatus)) {
            throw new \InvalidArgumentException('non-nullable orderLineStatus cannot be null');
        }

        $this->container['orderLineStatus'] = $orderLineStatus;
        return $this;
    }
}
