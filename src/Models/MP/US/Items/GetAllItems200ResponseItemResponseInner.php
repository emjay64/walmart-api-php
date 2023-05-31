<?php

/**
 * GetAllItems200ResponseItemResponseInner
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
 * Item Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Items;

use Walmart\Models\BaseModel;

/**
 * GetAllItems200ResponseItemResponseInner Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetAllItems200ResponseItemResponseInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getAllItems_200_response_ItemResponse_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'mart' => 'string',
        'sku' => 'string',
        'wpid' => 'string',
        'upc' => 'string',
        'gtin' => 'string',
        'productName' => 'string',
        'shelf' => 'string',
        'productType' => 'string',
        'price' => '\Walmart\Models\MP\US\Items\GetAllItems200ResponseItemResponseInnerPrice',
        'publishedStatus' => 'string',
        'additionalAttributes' => '\Walmart\Models\MP\US\Items\GetAllItems200ResponseItemResponseInnerAdditionalAttributes',
        'unpublishedReasons' => '\Walmart\Models\MP\US\Items\GetAllItems200ResponseItemResponseInnerUnpublishedReasons',
        'lifecycleStatus' => 'string',
        'variantGroupId' => 'string',
        'variantGroupInfo' => '\Walmart\Models\MP\US\Items\GetAllItems200ResponseItemResponseInnerVariantGroupInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'mart' => null,
        'sku' => null,
        'wpid' => null,
        'upc' => null,
        'gtin' => null,
        'productName' => null,
        'shelf' => null,
        'productType' => null,
        'price' => null,
        'publishedStatus' => null,
        'additionalAttributes' => null,
        'unpublishedReasons' => null,
        'lifecycleStatus' => null,
        'variantGroupId' => null,
        'variantGroupInfo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'mart' => false,
        'sku' => false,
        'wpid' => false,
        'upc' => false,
        'gtin' => false,
        'productName' => false,
        'shelf' => false,
        'productType' => false,
        'price' => false,
        'publishedStatus' => false,
        'additionalAttributes' => false,
        'unpublishedReasons' => false,
        'lifecycleStatus' => false,
        'variantGroupId' => false,
        'variantGroupInfo' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'mart' => 'mart',
        'sku' => 'sku',
        'wpid' => 'wpid',
        'upc' => 'upc',
        'gtin' => 'gtin',
        'productName' => 'productName',
        'shelf' => 'shelf',
        'productType' => 'productType',
        'price' => 'price',
        'publishedStatus' => 'publishedStatus',
        'additionalAttributes' => 'additionalAttributes',
        'unpublishedReasons' => 'unpublishedReasons',
        'lifecycleStatus' => 'lifecycleStatus',
        'variantGroupId' => 'variantGroupId',
        'variantGroupInfo' => 'variantGroupInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'mart' => 'setMart',
        'sku' => 'setSku',
        'wpid' => 'setWpid',
        'upc' => 'setUpc',
        'gtin' => 'setGtin',
        'productName' => 'setProductName',
        'shelf' => 'setShelf',
        'productType' => 'setProductType',
        'price' => 'setPrice',
        'publishedStatus' => 'setPublishedStatus',
        'additionalAttributes' => 'setAdditionalAttributes',
        'unpublishedReasons' => 'setUnpublishedReasons',
        'lifecycleStatus' => 'setLifecycleStatus',
        'variantGroupId' => 'setVariantGroupId',
        'variantGroupInfo' => 'setVariantGroupInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'mart' => 'getMart',
        'sku' => 'getSku',
        'wpid' => 'getWpid',
        'upc' => 'getUpc',
        'gtin' => 'getGtin',
        'productName' => 'getProductName',
        'shelf' => 'getShelf',
        'productType' => 'getProductType',
        'price' => 'getPrice',
        'publishedStatus' => 'getPublishedStatus',
        'additionalAttributes' => 'getAdditionalAttributes',
        'unpublishedReasons' => 'getUnpublishedReasons',
        'lifecycleStatus' => 'getLifecycleStatus',
        'variantGroupId' => 'getVariantGroupId',
        'variantGroupInfo' => 'getVariantGroupInfo'
    ];


    public const MART_WALMART_US = 'WALMART_US';

    public const MART_WALMART_CA = 'WALMART_CA';

    public const MART_ASDA_GM = 'ASDA_GM';

    public const MART_WALMART_MEXICO = 'WALMART_MEXICO';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMartAllowableValues()
    {
        return [
            self::MART_WALMART_US,
            self::MART_WALMART_CA,
            self::MART_ASDA_GM,
            self::MART_WALMART_MEXICO,
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
        $this->setIfExists('mart', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('wpid', $data ?? [], null);
        $this->setIfExists('upc', $data ?? [], null);
        $this->setIfExists('gtin', $data ?? [], null);
        $this->setIfExists('productName', $data ?? [], null);
        $this->setIfExists('shelf', $data ?? [], null);
        $this->setIfExists('productType', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('publishedStatus', $data ?? [], null);
        $this->setIfExists('additionalAttributes', $data ?? [], null);
        $this->setIfExists('unpublishedReasons', $data ?? [], null);
        $this->setIfExists('lifecycleStatus', $data ?? [], null);
        $this->setIfExists('variantGroupId', $data ?? [], null);
        $this->setIfExists('variantGroupInfo', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMartAllowableValues();
        if (!is_null($this->container['mart']) && !in_array($this->container['mart'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mart', must be one of '%s'",
                $this->container['mart'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets mart
     *
     * @return string|null
    
     */
    public function getMart()
    {
        return $this->container['mart'];
    }

    /**
     * Sets mart
     *
     * @param string|null $mart The marketplace name. Example: Walmart_US
     *
     * @return self
    
     */
    public function setMart($mart)
    {
        if (is_null($mart)) {
            throw new \InvalidArgumentException('non-nullable mart cannot be null');
        }
        $allowedValues = $this->getMartAllowableValues();
        if (!in_array($mart, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mart', must be one of '%s'",
                    $mart,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['mart'] = $mart;
        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
    
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku An arbitrary alphanumeric unique ID, specified by the seller, which identifies each item.
     *
     * @return self
    
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }

        $this->container['sku'] = $sku;
        return $this;
    }

    /**
     * Gets wpid
     *
     * @return string|null
    
     */
    public function getWpid()
    {
        return $this->container['wpid'];
    }

    /**
     * Sets wpid
     *
     * @param string|null $wpid The Walmart Product ID assigned by Walmart to the item when listed on Walmart.com
     *
     * @return self
    
     */
    public function setWpid($wpid)
    {
        if (is_null($wpid)) {
            throw new \InvalidArgumentException('non-nullable wpid cannot be null');
        }

        $this->container['wpid'] = $wpid;
        return $this;
    }

    /**
     * Gets upc
     *
     * @return string|null
    
     */
    public function getUpc()
    {
        return $this->container['upc'];
    }

    /**
     * Sets upc
     *
     * @param string|null $upc The 12-digit bar code used extensively for retail packaging in the United States
     *
     * @return self
    
     */
    public function setUpc($upc)
    {
        if (is_null($upc)) {
            throw new \InvalidArgumentException('non-nullable upc cannot be null');
        }

        $this->container['upc'] = $upc;
        return $this;
    }

    /**
     * Gets gtin
     *
     * @return string|null
    
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string|null $gtin The GTIN-compatible Product ID (i.e. UPC or EAN). UPCs must be 12 or 14 digitis in length. EANs must be 13 digits in length.
     *
     * @return self
    
     */
    public function setGtin($gtin)
    {
        if (is_null($gtin)) {
            throw new \InvalidArgumentException('non-nullable gtin cannot be null');
        }

        $this->container['gtin'] = $gtin;
        return $this;
    }

    /**
     * Gets productName
     *
     * @return string|null
    
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string|null $productName A seller-specified, alphanumeric string uniquely identifying the product name. Example: 'Sterling Silver Blue Diamond Heart Pendant with 18in Chain'
     *
     * @return self
    
     */
    public function setProductName($productName)
    {
        if (is_null($productName)) {
            throw new \InvalidArgumentException('non-nullable productName cannot be null');
        }

        $this->container['productName'] = $productName;
        return $this;
    }

    /**
     * Gets shelf
     *
     * @return string|null
    
     */
    public function getShelf()
    {
        return $this->container['shelf'];
    }

    /**
     * Sets shelf
     *
     * @param string|null $shelf Walmart assigned an item shelf name
     *
     * @return self
    
     */
    public function setShelf($shelf)
    {
        if (is_null($shelf)) {
            throw new \InvalidArgumentException('non-nullable shelf cannot be null');
        }

        $this->container['shelf'] = $shelf;
        return $this;
    }

    /**
     * Gets productType
     *
     * @return string|null
    
     */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
     * Sets productType
     *
     * @param string|null $productType A seller-specified, alphanumeric string uniquely identifying the Product Type. Example: 'Diamond'
     *
     * @return self
    
     */
    public function setProductType($productType)
    {
        if (is_null($productType)) {
            throw new \InvalidArgumentException('non-nullable productType cannot be null');
        }

        $this->container['productType'] = $productType;
        return $this;
    }

    /**
     * Gets price
     *
     * @return \Walmart\Models\MP\US\Items\GetAllItems200ResponseItemResponseInnerPrice|null
    
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Walmart\Models\MP\US\Items\GetAllItems200ResponseItemResponseInnerPrice|null $price price
     *
     * @return self
    
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }

        $this->container['price'] = $price;
        return $this;
    }

    /**
     * Gets publishedStatus
     *
     * @return string|null
    
     */
    public function getPublishedStatus()
    {
        return $this->container['publishedStatus'];
    }

    /**
     * Sets publishedStatus
     *
     * @param string|null $publishedStatus The status of an item when the item is in the submission process. The status can be one of the following: PUBLISHED, READY_TO_PUBLISH, IN_PROGRESS, UNPUBLISHED, STAGE, or SYSTEM_PROBLEM.
     *
     * @return self
    
     */
    public function setPublishedStatus($publishedStatus)
    {
        if (is_null($publishedStatus)) {
            throw new \InvalidArgumentException('non-nullable publishedStatus cannot be null');
        }

        $this->container['publishedStatus'] = $publishedStatus;
        return $this;
    }

    /**
     * Gets additionalAttributes
     *
     * @return \Walmart\Models\MP\US\Items\GetAllItems200ResponseItemResponseInnerAdditionalAttributes|null
    
     */
    public function getAdditionalAttributes()
    {
        return $this->container['additionalAttributes'];
    }

    /**
     * Sets additionalAttributes
     *
     * @param \Walmart\Models\MP\US\Items\GetAllItems200ResponseItemResponseInnerAdditionalAttributes|null $additionalAttributes additionalAttributes
     *
     * @return self
    
     */
    public function setAdditionalAttributes($additionalAttributes)
    {
        if (is_null($additionalAttributes)) {
            throw new \InvalidArgumentException('non-nullable additionalAttributes cannot be null');
        }

        $this->container['additionalAttributes'] = $additionalAttributes;
        return $this;
    }

    /**
     * Gets unpublishedReasons
     *
     * @return \Walmart\Models\MP\US\Items\GetAllItems200ResponseItemResponseInnerUnpublishedReasons|null
    
     */
    public function getUnpublishedReasons()
    {
        return $this->container['unpublishedReasons'];
    }

    /**
     * Sets unpublishedReasons
     *
     * @param \Walmart\Models\MP\US\Items\GetAllItems200ResponseItemResponseInnerUnpublishedReasons|null $unpublishedReasons unpublishedReasons
     *
     * @return self
    
     */
    public function setUnpublishedReasons($unpublishedReasons)
    {
        if (is_null($unpublishedReasons)) {
            throw new \InvalidArgumentException('non-nullable unpublishedReasons cannot be null');
        }

        $this->container['unpublishedReasons'] = $unpublishedReasons;
        return $this;
    }

    /**
     * Gets lifecycleStatus
     *
     * @return string|null
    
     */
    public function getLifecycleStatus()
    {
        return $this->container['lifecycleStatus'];
    }

    /**
     * Sets lifecycleStatus
     *
     * @param string|null $lifecycleStatus The lifecycle status of an item describes where the item listing is in the overall lifecycle. Examples of allowed values are ACTIVE , ARCHIVED, RETIRED.
     *
     * @return self
    
     */
    public function setLifecycleStatus($lifecycleStatus)
    {
        if (is_null($lifecycleStatus)) {
            throw new \InvalidArgumentException('non-nullable lifecycleStatus cannot be null');
        }

        $this->container['lifecycleStatus'] = $lifecycleStatus;
        return $this;
    }

    /**
     * Gets variantGroupId
     *
     * @return string|null
    
     */
    public function getVariantGroupId()
    {
        return $this->container['variantGroupId'];
    }

    /**
     * Sets variantGroupId
     *
     * @param string|null $variantGroupId Variant Id  if the item is of type Variant
     *
     * @return self
    
     */
    public function setVariantGroupId($variantGroupId)
    {
        if (is_null($variantGroupId)) {
            throw new \InvalidArgumentException('non-nullable variantGroupId cannot be null');
        }

        $this->container['variantGroupId'] = $variantGroupId;
        return $this;
    }

    /**
     * Gets variantGroupInfo
     *
     * @return \Walmart\Models\MP\US\Items\GetAllItems200ResponseItemResponseInnerVariantGroupInfo|null
    
     */
    public function getVariantGroupInfo()
    {
        return $this->container['variantGroupInfo'];
    }

    /**
     * Sets variantGroupInfo
     *
     * @param \Walmart\Models\MP\US\Items\GetAllItems200ResponseItemResponseInnerVariantGroupInfo|null $variantGroupInfo variantGroupInfo
     *
     * @return self
    
     */
    public function setVariantGroupInfo($variantGroupInfo)
    {
        if (is_null($variantGroupInfo)) {
            throw new \InvalidArgumentException('non-nullable variantGroupInfo cannot be null');
        }

        $this->container['variantGroupInfo'] = $variantGroupInfo;
        return $this;
    }
}
