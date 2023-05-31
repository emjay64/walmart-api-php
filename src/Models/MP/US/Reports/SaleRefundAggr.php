<?php

/**
 * SaleRefundAggr
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
 * Pregenerated Reports retiring on June 30, 2022 :
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Reports;

use Walmart\Models\BaseModel;

/**
 * SaleRefundAggr Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class SaleRefundAggr extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SaleRefundAggr';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'productPrice' => 'float',
        'shipping' => 'float',
        'netTaxCollected' => 'float',
        'productTaxCollected' => 'float',
        'shippingTaxCollected' => 'float',
        'netTaxWithheld' => 'float',
        'productTaxWithheld' => 'float',
        'shippingTaxWithheld' => 'float',
        'netFeeCollected' => 'float',
        'netFeeWithheld' => 'float',
        'netComm' => 'float',
        'netPayable' => 'float',
        'aboveCap' => 'float',
        'wfsShipping' => 'float',
        'wfsShipppingTax' => 'float',
        'totalBaseCommission' => 'float',
        'commissionSavings' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'productPrice' => null,
        'shipping' => null,
        'netTaxCollected' => null,
        'productTaxCollected' => null,
        'shippingTaxCollected' => null,
        'netTaxWithheld' => null,
        'productTaxWithheld' => null,
        'shippingTaxWithheld' => null,
        'netFeeCollected' => null,
        'netFeeWithheld' => null,
        'netComm' => null,
        'netPayable' => null,
        'aboveCap' => null,
        'wfsShipping' => null,
        'wfsShipppingTax' => null,
        'totalBaseCommission' => null,
        'commissionSavings' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'productPrice' => false,
        'shipping' => false,
        'netTaxCollected' => false,
        'productTaxCollected' => false,
        'shippingTaxCollected' => false,
        'netTaxWithheld' => false,
        'productTaxWithheld' => false,
        'shippingTaxWithheld' => false,
        'netFeeCollected' => false,
        'netFeeWithheld' => false,
        'netComm' => false,
        'netPayable' => false,
        'aboveCap' => false,
        'wfsShipping' => false,
        'wfsShipppingTax' => false,
        'totalBaseCommission' => false,
        'commissionSavings' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'productPrice' => 'productPrice',
        'shipping' => 'shipping',
        'netTaxCollected' => 'netTaxCollected',
        'productTaxCollected' => 'productTaxCollected',
        'shippingTaxCollected' => 'shippingTaxCollected',
        'netTaxWithheld' => 'netTaxWithheld',
        'productTaxWithheld' => 'productTaxWithheld',
        'shippingTaxWithheld' => 'shippingTaxWithheld',
        'netFeeCollected' => 'netFeeCollected',
        'netFeeWithheld' => 'netFeeWithheld',
        'netComm' => 'netComm',
        'netPayable' => 'netPayable',
        'aboveCap' => 'aboveCap',
        'wfsShipping' => 'wfsShipping',
        'wfsShipppingTax' => 'wfsShipppingTax',
        'totalBaseCommission' => 'totalBaseCommission',
        'commissionSavings' => 'commissionSavings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'productPrice' => 'setProductPrice',
        'shipping' => 'setShipping',
        'netTaxCollected' => 'setNetTaxCollected',
        'productTaxCollected' => 'setProductTaxCollected',
        'shippingTaxCollected' => 'setShippingTaxCollected',
        'netTaxWithheld' => 'setNetTaxWithheld',
        'productTaxWithheld' => 'setProductTaxWithheld',
        'shippingTaxWithheld' => 'setShippingTaxWithheld',
        'netFeeCollected' => 'setNetFeeCollected',
        'netFeeWithheld' => 'setNetFeeWithheld',
        'netComm' => 'setNetComm',
        'netPayable' => 'setNetPayable',
        'aboveCap' => 'setAboveCap',
        'wfsShipping' => 'setWfsShipping',
        'wfsShipppingTax' => 'setWfsShipppingTax',
        'totalBaseCommission' => 'setTotalBaseCommission',
        'commissionSavings' => 'setCommissionSavings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'productPrice' => 'getProductPrice',
        'shipping' => 'getShipping',
        'netTaxCollected' => 'getNetTaxCollected',
        'productTaxCollected' => 'getProductTaxCollected',
        'shippingTaxCollected' => 'getShippingTaxCollected',
        'netTaxWithheld' => 'getNetTaxWithheld',
        'productTaxWithheld' => 'getProductTaxWithheld',
        'shippingTaxWithheld' => 'getShippingTaxWithheld',
        'netFeeCollected' => 'getNetFeeCollected',
        'netFeeWithheld' => 'getNetFeeWithheld',
        'netComm' => 'getNetComm',
        'netPayable' => 'getNetPayable',
        'aboveCap' => 'getAboveCap',
        'wfsShipping' => 'getWfsShipping',
        'wfsShipppingTax' => 'getWfsShipppingTax',
        'totalBaseCommission' => 'getTotalBaseCommission',
        'commissionSavings' => 'getCommissionSavings'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('productPrice', $data ?? [], null);
        $this->setIfExists('shipping', $data ?? [], null);
        $this->setIfExists('netTaxCollected', $data ?? [], null);
        $this->setIfExists('productTaxCollected', $data ?? [], null);
        $this->setIfExists('shippingTaxCollected', $data ?? [], null);
        $this->setIfExists('netTaxWithheld', $data ?? [], null);
        $this->setIfExists('productTaxWithheld', $data ?? [], null);
        $this->setIfExists('shippingTaxWithheld', $data ?? [], null);
        $this->setIfExists('netFeeCollected', $data ?? [], null);
        $this->setIfExists('netFeeWithheld', $data ?? [], null);
        $this->setIfExists('netComm', $data ?? [], null);
        $this->setIfExists('netPayable', $data ?? [], null);
        $this->setIfExists('aboveCap', $data ?? [], null);
        $this->setIfExists('wfsShipping', $data ?? [], null);
        $this->setIfExists('wfsShipppingTax', $data ?? [], null);
        $this->setIfExists('totalBaseCommission', $data ?? [], null);
        $this->setIfExists('commissionSavings', $data ?? [], null);
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
     * Gets productPrice
     *
     * @return float|null
    
     */
    public function getProductPrice()
    {
        return $this->container['productPrice'];
    }

    /**
     * Sets productPrice
     *
     * @param float|null $productPrice productPrice
     *
     * @return self
    
     */
    public function setProductPrice($productPrice)
    {
        if (is_null($productPrice)) {
            throw new \InvalidArgumentException('non-nullable productPrice cannot be null');
        }

        $this->container['productPrice'] = $productPrice;
        return $this;
    }

    /**
     * Gets shipping
     *
     * @return float|null
    
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param float|null $shipping shipping
     *
     * @return self
    
     */
    public function setShipping($shipping)
    {
        if (is_null($shipping)) {
            throw new \InvalidArgumentException('non-nullable shipping cannot be null');
        }

        $this->container['shipping'] = $shipping;
        return $this;
    }

    /**
     * Gets netTaxCollected
     *
     * @return float|null
    
     */
    public function getNetTaxCollected()
    {
        return $this->container['netTaxCollected'];
    }

    /**
     * Sets netTaxCollected
     *
     * @param float|null $netTaxCollected netTaxCollected
     *
     * @return self
    
     */
    public function setNetTaxCollected($netTaxCollected)
    {
        if (is_null($netTaxCollected)) {
            throw new \InvalidArgumentException('non-nullable netTaxCollected cannot be null');
        }

        $this->container['netTaxCollected'] = $netTaxCollected;
        return $this;
    }

    /**
     * Gets productTaxCollected
     *
     * @return float|null
    
     */
    public function getProductTaxCollected()
    {
        return $this->container['productTaxCollected'];
    }

    /**
     * Sets productTaxCollected
     *
     * @param float|null $productTaxCollected productTaxCollected
     *
     * @return self
    
     */
    public function setProductTaxCollected($productTaxCollected)
    {
        if (is_null($productTaxCollected)) {
            throw new \InvalidArgumentException('non-nullable productTaxCollected cannot be null');
        }

        $this->container['productTaxCollected'] = $productTaxCollected;
        return $this;
    }

    /**
     * Gets shippingTaxCollected
     *
     * @return float|null
    
     */
    public function getShippingTaxCollected()
    {
        return $this->container['shippingTaxCollected'];
    }

    /**
     * Sets shippingTaxCollected
     *
     * @param float|null $shippingTaxCollected shippingTaxCollected
     *
     * @return self
    
     */
    public function setShippingTaxCollected($shippingTaxCollected)
    {
        if (is_null($shippingTaxCollected)) {
            throw new \InvalidArgumentException('non-nullable shippingTaxCollected cannot be null');
        }

        $this->container['shippingTaxCollected'] = $shippingTaxCollected;
        return $this;
    }

    /**
     * Gets netTaxWithheld
     *
     * @return float|null
    
     */
    public function getNetTaxWithheld()
    {
        return $this->container['netTaxWithheld'];
    }

    /**
     * Sets netTaxWithheld
     *
     * @param float|null $netTaxWithheld netTaxWithheld
     *
     * @return self
    
     */
    public function setNetTaxWithheld($netTaxWithheld)
    {
        if (is_null($netTaxWithheld)) {
            throw new \InvalidArgumentException('non-nullable netTaxWithheld cannot be null');
        }

        $this->container['netTaxWithheld'] = $netTaxWithheld;
        return $this;
    }

    /**
     * Gets productTaxWithheld
     *
     * @return float|null
    
     */
    public function getProductTaxWithheld()
    {
        return $this->container['productTaxWithheld'];
    }

    /**
     * Sets productTaxWithheld
     *
     * @param float|null $productTaxWithheld productTaxWithheld
     *
     * @return self
    
     */
    public function setProductTaxWithheld($productTaxWithheld)
    {
        if (is_null($productTaxWithheld)) {
            throw new \InvalidArgumentException('non-nullable productTaxWithheld cannot be null');
        }

        $this->container['productTaxWithheld'] = $productTaxWithheld;
        return $this;
    }

    /**
     * Gets shippingTaxWithheld
     *
     * @return float|null
    
     */
    public function getShippingTaxWithheld()
    {
        return $this->container['shippingTaxWithheld'];
    }

    /**
     * Sets shippingTaxWithheld
     *
     * @param float|null $shippingTaxWithheld shippingTaxWithheld
     *
     * @return self
    
     */
    public function setShippingTaxWithheld($shippingTaxWithheld)
    {
        if (is_null($shippingTaxWithheld)) {
            throw new \InvalidArgumentException('non-nullable shippingTaxWithheld cannot be null');
        }

        $this->container['shippingTaxWithheld'] = $shippingTaxWithheld;
        return $this;
    }

    /**
     * Gets netFeeCollected
     *
     * @return float|null
    
     */
    public function getNetFeeCollected()
    {
        return $this->container['netFeeCollected'];
    }

    /**
     * Sets netFeeCollected
     *
     * @param float|null $netFeeCollected netFeeCollected
     *
     * @return self
    
     */
    public function setNetFeeCollected($netFeeCollected)
    {
        if (is_null($netFeeCollected)) {
            throw new \InvalidArgumentException('non-nullable netFeeCollected cannot be null');
        }

        $this->container['netFeeCollected'] = $netFeeCollected;
        return $this;
    }

    /**
     * Gets netFeeWithheld
     *
     * @return float|null
    
     */
    public function getNetFeeWithheld()
    {
        return $this->container['netFeeWithheld'];
    }

    /**
     * Sets netFeeWithheld
     *
     * @param float|null $netFeeWithheld netFeeWithheld
     *
     * @return self
    
     */
    public function setNetFeeWithheld($netFeeWithheld)
    {
        if (is_null($netFeeWithheld)) {
            throw new \InvalidArgumentException('non-nullable netFeeWithheld cannot be null');
        }

        $this->container['netFeeWithheld'] = $netFeeWithheld;
        return $this;
    }

    /**
     * Gets netComm
     *
     * @return float|null
    
     */
    public function getNetComm()
    {
        return $this->container['netComm'];
    }

    /**
     * Sets netComm
     *
     * @param float|null $netComm netComm
     *
     * @return self
    
     */
    public function setNetComm($netComm)
    {
        if (is_null($netComm)) {
            throw new \InvalidArgumentException('non-nullable netComm cannot be null');
        }

        $this->container['netComm'] = $netComm;
        return $this;
    }

    /**
     * Gets netPayable
     *
     * @return float|null
    
     */
    public function getNetPayable()
    {
        return $this->container['netPayable'];
    }

    /**
     * Sets netPayable
     *
     * @param float|null $netPayable netPayable
     *
     * @return self
    
     */
    public function setNetPayable($netPayable)
    {
        if (is_null($netPayable)) {
            throw new \InvalidArgumentException('non-nullable netPayable cannot be null');
        }

        $this->container['netPayable'] = $netPayable;
        return $this;
    }

    /**
     * Gets aboveCap
     *
     * @return float|null
    
     */
    public function getAboveCap()
    {
        return $this->container['aboveCap'];
    }

    /**
     * Sets aboveCap
     *
     * @param float|null $aboveCap aboveCap
     *
     * @return self
    
     */
    public function setAboveCap($aboveCap)
    {
        if (is_null($aboveCap)) {
            throw new \InvalidArgumentException('non-nullable aboveCap cannot be null');
        }

        $this->container['aboveCap'] = $aboveCap;
        return $this;
    }

    /**
     * Gets wfsShipping
     *
     * @return float|null
    
     */
    public function getWfsShipping()
    {
        return $this->container['wfsShipping'];
    }

    /**
     * Sets wfsShipping
     *
     * @param float|null $wfsShipping wfsShipping
     *
     * @return self
    
     */
    public function setWfsShipping($wfsShipping)
    {
        if (is_null($wfsShipping)) {
            throw new \InvalidArgumentException('non-nullable wfsShipping cannot be null');
        }

        $this->container['wfsShipping'] = $wfsShipping;
        return $this;
    }

    /**
     * Gets wfsShipppingTax
     *
     * @return float|null
    
     */
    public function getWfsShipppingTax()
    {
        return $this->container['wfsShipppingTax'];
    }

    /**
     * Sets wfsShipppingTax
     *
     * @param float|null $wfsShipppingTax wfsShipppingTax
     *
     * @return self
    
     */
    public function setWfsShipppingTax($wfsShipppingTax)
    {
        if (is_null($wfsShipppingTax)) {
            throw new \InvalidArgumentException('non-nullable wfsShipppingTax cannot be null');
        }

        $this->container['wfsShipppingTax'] = $wfsShipppingTax;
        return $this;
    }

    /**
     * Gets totalBaseCommission
     *
     * @return float|null
    
     */
    public function getTotalBaseCommission()
    {
        return $this->container['totalBaseCommission'];
    }

    /**
     * Sets totalBaseCommission
     *
     * @param float|null $totalBaseCommission totalBaseCommission
     *
     * @return self
    
     */
    public function setTotalBaseCommission($totalBaseCommission)
    {
        if (is_null($totalBaseCommission)) {
            throw new \InvalidArgumentException('non-nullable totalBaseCommission cannot be null');
        }

        $this->container['totalBaseCommission'] = $totalBaseCommission;
        return $this;
    }

    /**
     * Gets commissionSavings
     *
     * @return float|null
    
     */
    public function getCommissionSavings()
    {
        return $this->container['commissionSavings'];
    }

    /**
     * Sets commissionSavings
     *
     * @param float|null $commissionSavings commissionSavings
     *
     * @return self
    
     */
    public function setCommissionSavings($commissionSavings)
    {
        if (is_null($commissionSavings)) {
            throw new \InvalidArgumentException('non-nullable commissionSavings cannot be null');
        }

        $this->container['commissionSavings'] = $commissionSavings;
        return $this;
    }
}
