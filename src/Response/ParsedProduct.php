<?php


namespace Fnematov\TrendyolParser\Response;


use Fnematov\TrendyolParser\Fillable;

class ParsedProduct
{
    use Fillable;

    /**
     * Links of product attachments
     *
     * @var array[]
     */
    public $attachments;

    /**
     * Url of product
     *
     * @var string
     */
    public $url;

    /**
     * Product Id
     *
     * @var string
     */
    public $id;

    /**
     * Name of product
     *
     * @var string
     */
    public $name;

    /**
     * Barcode or SKU of product variant
     *
     * @var string
     */
    public $barcode;

    /**
     * Color of product. If it doesn't exists will be null
     *
     * @var null|string
     */
    public $color = null;

    /**
     * Product variants
     *
     * @var ProductVariant[]
     */
    public $variants;
}
