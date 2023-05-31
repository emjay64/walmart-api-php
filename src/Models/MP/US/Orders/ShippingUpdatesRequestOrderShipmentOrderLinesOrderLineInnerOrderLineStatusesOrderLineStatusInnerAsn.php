<?php

/**
 * ShippingUpdatesRequestOrderShipmentOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerAsn
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

namespace Walmart\Models\MP\US\Orders;

use Walmart\Models\BaseModel;

/**
 * ShippingUpdatesRequestOrderShipmentOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerAsn Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShippingUpdatesRequestOrderShipmentOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerAsn extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'shippingUpdates_request_orderShipment_orderLines_orderLine_inner_orderLineStatuses_orderLineStatus_inner_asn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'packageASN' => 'string',
        'palletASN' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'packageASN' => null,
        'palletASN' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'packageASN' => false,
        'palletASN' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'packageASN' => 'packageASN',
        'palletASN' => 'palletASN'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'packageASN' => 'setPackageASN',
        'palletASN' => 'setPalletASN'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'packageASN' => 'getPackageASN',
        'palletASN' => 'getPalletASN'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('packageASN', $data ?? [], null);
        $this->setIfExists('palletASN', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['packageASN'] === null) {
            $invalidProperties[] = "'packageASN' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets packageASN
     *
     * @return string
    
     */
    public function getPackageASN()
    {
        return $this->container['packageASN'];
    }

    /**
     * Sets packageASN
     *
     * @param string $packageASN packageASN
     *
     * @return self
    
     */
    public function setPackageASN($packageASN)
    {
        if (is_null($packageASN)) {
            throw new \InvalidArgumentException('non-nullable packageASN cannot be null');
        }

        $this->container['packageASN'] = $packageASN;
        return $this;
    }

    /**
     * Gets palletASN
     *
     * @return string|null
    
     */
    public function getPalletASN()
    {
        return $this->container['palletASN'];
    }

    /**
     * Sets palletASN
     *
     * @param string|null $palletASN palletASN
     *
     * @return self
    
     */
    public function setPalletASN($palletASN)
    {
        if (is_null($palletASN)) {
            throw new \InvalidArgumentException('non-nullable palletASN cannot be null');
        }

        $this->container['palletASN'] = $palletASN;
        return $this;
    }
}
