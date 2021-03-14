<?php


namespace Fnematov\TrendyolParser\Response;


class ParserResponse
{
    /**
     * List of grouped products
     *
     * @var ParsedProduct[]
     */
    public $products;

    /**
     * Product delivery range information
     *
     * @var string
     */
    public $delivery;

    /**
     * Product category name
     *
     * @var array
     */
    public $category;

    /**
     * Product brand name
     *
     * @var array
     */
    public $brand;

    /**
     * Gender information
     *
     * @var null|string
     */
    public $gender = null;

    /**
     * Group id of product
     *
     * @var string
     */
    public $groupId;

    /**
     * Rating score of product
     *
     * @var array
     */
    public $rating;
}
