<?php
 /**
 * Solution Pioneers
 *
 * @category    SolutionPioneers
 * @package     SolutionPioneers_FreeShipping
 * @copyright   Copyright (c) Solution Pioneers (https://www.solution-pioneers.com/)
 */
namespace SolutionPioneers\FreeShipping\Plugin\Model;

use \Closure;
use Magento\Shipping\Model\Shipping as MagentoShipping;
use Magento\Quote\Model\Quote\Address\RateRequest;

class Shipping
{
    /**
     * @param \Magento\Shipping\Model\Shipping MagentoShipping
     * @param \Closure $proceed
     * @param string $carrierCode
     * @param RateRequest $request
     * 
     * @return Magento\Shipping\Model\Shipping
     */
    public function aroundCollectCarrierRates(
        MagentoShipping $subject,
        Closure $proceed,
        $carrierCode,
        $request
    ) {
        return $proceed($carrierCode, $request);
    }
}