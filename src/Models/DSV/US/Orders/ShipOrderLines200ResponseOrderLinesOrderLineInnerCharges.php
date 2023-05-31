<?php

/**
 * ShipOrderLines200ResponseOrderLinesOrderLineInnerCharges
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
 * ShipOrderLines200ResponseOrderLinesOrderLineInnerCharges Class Doc Comment
 *
 * @category Class

 * @description Information relating to the charge for the orderLine

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShipOrderLines200ResponseOrderLinesOrderLineInnerCharges extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'shipOrderLines_200_response_orderLines_orderLine_inner_charges';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'charge' => '\Walmart\Models\DSV\US\Orders\ShipOrderLines200ResponseOrderLinesOrderLineInnerChargesChargeInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'charge' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'charge' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'charge' => 'charge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'charge' => 'setCharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'charge' => 'getCharge'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('charge', $data ?? [], null);
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
     * Gets charge
     *
     * @return \Walmart\Models\DSV\US\Orders\ShipOrderLines200ResponseOrderLinesOrderLineInnerChargesChargeInner[]|null
    
     */
    public function getCharge()
    {
        return $this->container['charge'];
    }

    /**
     * Sets charge
     *
     * @param \Walmart\Models\DSV\US\Orders\ShipOrderLines200ResponseOrderLinesOrderLineInnerChargesChargeInner[]|null $charge List of elements that make up a charge
     *
     * @return self
    
     */
    public function setCharge($charge)
    {
        if (is_null($charge)) {
            throw new \InvalidArgumentException('non-nullable charge cannot be null');
        }

        $this->container['charge'] = $charge;
        return $this;
    }
}
