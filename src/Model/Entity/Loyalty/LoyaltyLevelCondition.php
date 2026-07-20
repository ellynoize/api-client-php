<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyLevelCondition
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class LoyaltyLevelCondition
 *
 * @category LoyaltyLevelCondition
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class LoyaltyLevelCondition
{
    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("privilegeSize")
     */
    public $privilegeSize;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("privilegeSizePromo")
     */
    public $privilegeSizePromo;

    /**
     * @var \RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevelConditionItem[]
     *
     * @JMS\Type("array<RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevelConditionItem>")
     * @JMS\SerializedName("items")
     */
    public $items;
}
