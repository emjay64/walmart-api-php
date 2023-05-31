<?php

/**
 * ItemPriceTypePricingListPricingInnerPriceDisplayCodes
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
 * Promotion Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Promotions;

use Walmart\Models\BaseModel;

/**
 * ItemPriceTypePricingListPricingInnerPriceDisplayCodes Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ItemPriceTypePricingListPricingInnerPriceDisplayCodes extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ItemPriceType_pricingList_pricing_inner_priceDisplayCodes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'isClearance' => 'bool',
        'hidePriceForSOI' => 'object',
        'submapType' => 'object',
        'isRollback' => 'bool',
        'isReducedPrice' => 'bool',
        'isEligibleForAssociateDiscount' => 'object',
        'isStrikethrough' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'isClearance' => null,
        'hidePriceForSOI' => null,
        'submapType' => null,
        'isRollback' => null,
        'isReducedPrice' => null,
        'isEligibleForAssociateDiscount' => null,
        'isStrikethrough' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'isClearance' => false,
        'hidePriceForSOI' => false,
        'submapType' => false,
        'isRollback' => false,
        'isReducedPrice' => false,
        'isEligibleForAssociateDiscount' => false,
        'isStrikethrough' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'isClearance' => 'isClearance',
        'hidePriceForSOI' => 'hidePriceForSOI',
        'submapType' => 'submapType',
        'isRollback' => 'isRollback',
        'isReducedPrice' => 'isReducedPrice',
        'isEligibleForAssociateDiscount' => 'isEligibleForAssociateDiscount',
        'isStrikethrough' => 'isStrikethrough'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'isClearance' => 'setIsClearance',
        'hidePriceForSOI' => 'setHidePriceForSOI',
        'submapType' => 'setSubmapType',
        'isRollback' => 'setIsRollback',
        'isReducedPrice' => 'setIsReducedPrice',
        'isEligibleForAssociateDiscount' => 'setIsEligibleForAssociateDiscount',
        'isStrikethrough' => 'setIsStrikethrough'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'isClearance' => 'getIsClearance',
        'hidePriceForSOI' => 'getHidePriceForSOI',
        'submapType' => 'getSubmapType',
        'isRollback' => 'getIsRollback',
        'isReducedPrice' => 'getIsReducedPrice',
        'isEligibleForAssociateDiscount' => 'getIsEligibleForAssociateDiscount',
        'isStrikethrough' => 'getIsStrikethrough'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('isClearance', $data ?? [], null);
        $this->setIfExists('hidePriceForSOI', $data ?? [], null);
        $this->setIfExists('submapType', $data ?? [], null);
        $this->setIfExists('isRollback', $data ?? [], null);
        $this->setIfExists('isReducedPrice', $data ?? [], null);
        $this->setIfExists('isEligibleForAssociateDiscount', $data ?? [], null);
        $this->setIfExists('isStrikethrough', $data ?? [], null);
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
     * Gets isClearance
     *
     * @return bool|null
    
     */
    public function getIsClearance()
    {
        return $this->container['isClearance'];
    }

    /**
     * Sets isClearance
     *
     * @param bool|null $isClearance isClearance
     *
     * @return self
    
     */
    public function setIsClearance($isClearance)
    {
        if (is_null($isClearance)) {
            throw new \InvalidArgumentException('non-nullable isClearance cannot be null');
        }

        $this->container['isClearance'] = $isClearance;
        return $this;
    }

    /**
     * Gets hidePriceForSOI
     *
     * @return object|null
    
     */
    public function getHidePriceForSOI()
    {
        return $this->container['hidePriceForSOI'];
    }

    /**
     * Sets hidePriceForSOI
     *
     * @param object|null $hidePriceForSOI hidePriceForSOI
     *
     * @return self
    
     */
    public function setHidePriceForSOI($hidePriceForSOI)
    {
        if (is_null($hidePriceForSOI)) {
            throw new \InvalidArgumentException('non-nullable hidePriceForSOI cannot be null');
        }

        $this->container['hidePriceForSOI'] = $hidePriceForSOI;
        return $this;
    }

    /**
     * Gets submapType
     *
     * @return object|null
    
     */
    public function getSubmapType()
    {
        return $this->container['submapType'];
    }

    /**
     * Sets submapType
     *
     * @param object|null $submapType submapType
     *
     * @return self
    
     */
    public function setSubmapType($submapType)
    {
        if (is_null($submapType)) {
            throw new \InvalidArgumentException('non-nullable submapType cannot be null');
        }

        $this->container['submapType'] = $submapType;
        return $this;
    }

    /**
     * Gets isRollback
     *
     * @return bool|null
    
     */
    public function getIsRollback()
    {
        return $this->container['isRollback'];
    }

    /**
     * Sets isRollback
     *
     * @param bool|null $isRollback isRollback
     *
     * @return self
    
     */
    public function setIsRollback($isRollback)
    {
        if (is_null($isRollback)) {
            throw new \InvalidArgumentException('non-nullable isRollback cannot be null');
        }

        $this->container['isRollback'] = $isRollback;
        return $this;
    }

    /**
     * Gets isReducedPrice
     *
     * @return bool|null
    
     */
    public function getIsReducedPrice()
    {
        return $this->container['isReducedPrice'];
    }

    /**
     * Sets isReducedPrice
     *
     * @param bool|null $isReducedPrice isReducedPrice
     *
     * @return self
    
     */
    public function setIsReducedPrice($isReducedPrice)
    {
        if (is_null($isReducedPrice)) {
            throw new \InvalidArgumentException('non-nullable isReducedPrice cannot be null');
        }

        $this->container['isReducedPrice'] = $isReducedPrice;
        return $this;
    }

    /**
     * Gets isEligibleForAssociateDiscount
     *
     * @return object|null
    
     */
    public function getIsEligibleForAssociateDiscount()
    {
        return $this->container['isEligibleForAssociateDiscount'];
    }

    /**
     * Sets isEligibleForAssociateDiscount
     *
     * @param object|null $isEligibleForAssociateDiscount isEligibleForAssociateDiscount
     *
     * @return self
    
     */
    public function setIsEligibleForAssociateDiscount($isEligibleForAssociateDiscount)
    {
        if (is_null($isEligibleForAssociateDiscount)) {
            throw new \InvalidArgumentException('non-nullable isEligibleForAssociateDiscount cannot be null');
        }

        $this->container['isEligibleForAssociateDiscount'] = $isEligibleForAssociateDiscount;
        return $this;
    }

    /**
     * Gets isStrikethrough
     *
     * @return bool|null
    
     */
    public function getIsStrikethrough()
    {
        return $this->container['isStrikethrough'];
    }

    /**
     * Sets isStrikethrough
     *
     * @param bool|null $isStrikethrough isStrikethrough
     *
     * @return self
    
     */
    public function setIsStrikethrough($isStrikethrough)
    {
        if (is_null($isStrikethrough)) {
            throw new \InvalidArgumentException('non-nullable isStrikethrough cannot be null');
        }

        $this->container['isStrikethrough'] = $isStrikethrough;
        return $this;
    }
}
