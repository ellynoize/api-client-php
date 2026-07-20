<?php

/**
 * PHP version 7.3
 *
 * @category LoyaltyBurnSetting
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */

namespace RetailCrm\Api\Model\Entity\Loyalty;

use RetailCrm\Api\Component\Serializer\Annotation as JMS;

/**
 * Class LoyaltyBurnSetting
 *
 * @category LoyaltyBurnSetting
 * @package  RetailCrm\Api\Model\Entity\Loyalty
 */
class LoyaltyBurnSetting
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
     * @JMS\SerializedName("period")
     */
    public $period;

    /**
     * @var int
     *
     * @JMS\Type("int")
     * @JMS\SerializedName("percent")
     */
    public $percent;
}
