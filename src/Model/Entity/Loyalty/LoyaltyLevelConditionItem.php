<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyLevelConditionItem
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class LoyaltyLevelConditionItem
 *
 * @category LoyaltyLevelConditionItem
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class LoyaltyLevelConditionItem
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var \RetailCrm\Api\Model\Entity\Orders\Items\Offer
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Orders\Items\Offer")
     * @JMS\SerializedName("offer")
     */
    public $offer;

    /**
     * @var \RetailCrm\Api\Model\Entity\Store\Product
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Store\Product")
     * @JMS\SerializedName("product")
     */
    public $product;

    /**
     * @var \RetailCrm\Api\Model\Entity\Store\ProductGroup
     *
     * @JMS\Type("RetailCrm\Api\Model\Entity\Store\ProductGroup")
     * @JMS\SerializedName("productGroup")
     */
    public $productGroup;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("manufacturer")
     */
    public $manufacturer;
}
