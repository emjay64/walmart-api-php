<?php

/**
 * PartnerFeedResponseItemDetails
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
 * Content Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\CP\US\Feeds;

use Walmart\Models\BaseModel;

/**
 * PartnerFeedResponseItemDetails Class Doc Comment
 *
 * @category Class

 * @description List of ingestion status details for items in the feed

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PartnerFeedResponseItemDetails extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PartnerFeedResponse_itemDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'itemIngestionStatus' => '\Walmart\Models\CP\US\Feeds\PartnerFeedResponseItemDetailsItemIngestionStatusInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'itemIngestionStatus' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'itemIngestionStatus' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'itemIngestionStatus' => 'itemIngestionStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'itemIngestionStatus' => 'setItemIngestionStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'itemIngestionStatus' => 'getItemIngestionStatus'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('itemIngestionStatus', $data ?? [], null);
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
     * Gets itemIngestionStatus
     *
     * @return \Walmart\Models\CP\US\Feeds\PartnerFeedResponseItemDetailsItemIngestionStatusInner[]|null
    
     */
    public function getItemIngestionStatus()
    {
        return $this->container['itemIngestionStatus'];
    }

    /**
     * Sets itemIngestionStatus
     *
     * @param \Walmart\Models\CP\US\Feeds\PartnerFeedResponseItemDetailsItemIngestionStatusInner[]|null $itemIngestionStatus The ingestion status of an individual item
     *
     * @return self
    
     */
    public function setItemIngestionStatus($itemIngestionStatus)
    {
        if (is_null($itemIngestionStatus)) {
            throw new \InvalidArgumentException('non-nullable itemIngestionStatus cannot be null');
        }

        $this->container['itemIngestionStatus'] = $itemIngestionStatus;
        return $this;
    }
}
