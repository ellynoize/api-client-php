<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyEvent
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use DateTime;
use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class LoyaltyEvent
 *
 * @category LoyaltyEvent
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 *
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class LoyaltyEvent
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("privilegeType")
     */
    public $privilegeType;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("privilegeSize")
     */
    public $privilegeSize;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("privilegeSizePromo")
     */
    public $privilegeSizePromo;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("expirePeriod")
     */
    public $expirePeriod;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("activatePeriod")
     */
    public $activatePeriod;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("discountOneOrderOnly")
     */
    public $discountOneOrderOnly;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("discountForAllProducts")
     */
    public $discountForAllProducts;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("activatedAt")
     */
    public $activatedAt;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    public $type;

    /**
     * @var bool
     *
     * @JMS\Type("bool")
     * @JMS\SerializedName("afterFirstOrder")
     */
    public $afterFirstOrder;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("beforePeriod")
     */
    public $beforePeriod;
}
