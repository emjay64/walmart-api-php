<?php

/**
 * Preview
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
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Fulfillment;

use Walmart\Models\BaseModel;

/**
 * Preview Class Doc Comment
 *
 * @category Class

 * @description List of preview responses

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class Preview extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Preview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'previewType' => 'string',
        'preview' => '\Walmart\Models\MP\US\Fulfillment\PreviewResponseDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'previewType' => null,
        'preview' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'previewType' => false,
        'preview' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'previewType' => 'previewType',
        'preview' => 'preview'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'previewType' => 'setPreviewType',
        'preview' => 'setPreview'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'previewType' => 'getPreviewType',
        'preview' => 'getPreview'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('previewType', $data ?? [], null);
        $this->setIfExists('preview', $data ?? [], null);
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
     * Gets previewType
     *
     * @return string|null
    
     */
    public function getPreviewType()
    {
        return $this->container['previewType'];
    }

    /**
     * Sets previewType
     *
     * @param string|null $previewType Use \"inbound\" if you are using WFS Inventory Transfer Service (ITS). Use \"selfMirroring\" if you are not using ITS and shipping directly to Walmart fulfillment centers.
     *
     * @return self
    
     */
    public function setPreviewType($previewType)
    {
        if (is_null($previewType)) {
            throw new \InvalidArgumentException('non-nullable previewType cannot be null');
        }

        $this->container['previewType'] = $previewType;
        return $this;
    }

    /**
     * Gets preview
     *
     * @return \Walmart\Models\MP\US\Fulfillment\PreviewResponseDTO[]|null
    
     */
    public function getPreview()
    {
        return $this->container['preview'];
    }

    /**
     * Sets preview
     *
     * @param \Walmart\Models\MP\US\Fulfillment\PreviewResponseDTO[]|null $preview Preview
     *
     * @return self
    
     */
    public function setPreview($preview)
    {
        if (is_null($preview)) {
            throw new \InvalidArgumentException('non-nullable preview cannot be null');
        }

        $this->container['preview'] = $preview;
        return $this;
    }
}
