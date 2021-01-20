<?php


namespace Fnematov\TrendyolParser\Response;


use Fnematov\TrendyolParser\Fillable;

class ProductVariant
{
    use Fillable;

    /**
     * Barcode or SKU of product variant
     *
     * @var string
     */
    public $barcode;

    /**
     * Stock availability of product variant, if it null it is not limiter
     *
     * @var null|int
     */
    public $stock = null;

    /**
     * Price of product variant in TL
     *
     * @var float
     */
    public $price;

    /**
     * Old price of product variant in TL. if discount 0, it will be null
     *
     * @var null|float
     */
    public $old_price = null;

    /**
     * Discount of product variant, if it doesn't exists will be 0
     *
     * @var float
     */
    public $discount;

    /**
     * Value of every variant, Ex: value of size or etc.
     *
     * @var string
     */
    public $value;

    /**
     * Url of product variant. Some times variant will come with sub query
     *
     * @var string
     */
    public $url;
}
