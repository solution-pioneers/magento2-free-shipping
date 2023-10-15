<?php
 /**
 * Solution Pioneers
 *
 * @category    SolutionPioneers
 * @package     SolutionPioneers_FreeShipping
 * @copyright   Copyright (c) Solution Pioneers (https://www.solution-pioneers.com/)
 */
namespace SolutionPioneers\FreeShipping\Plugin\Model\Quote;

use Magento\Quote\Model\ShippingMethodManagement as MagentoQuoteShippingMethodManagement;

class ShippingMethodManagement
{
    /**
     * @var string
     */
    protected const FREE_SHIPPING_CARRIER_CODE = 'freeshipping';

    /**
     * @var string
     */
    protected const FREE_SHIPPING_METHOD_CODE = 'freeshipping';

    /**
     * @param \Magento\Quote\Model\ShippingMethodManagement
     * @param array<mixed>
     */
    public function afterEstimateByAddress(
        MagentoQuoteShippingMethodManagement $subject, 
        array $result
    ){
        return $this->getShippingMethods($result);
    }
    
    /**
     * @param \Magento\Quote\Model\ShippingMethodManagement
     * @param array<mixed>
     */
    public function afterEstimateByExtendedAddress(
        MagentoQuoteShippingMethodManagement $subject, 
        array $result
    ) {
        return $this->getShippingMethods($result);
    }
    
    /**
     * @param \Magento\Quote\Model\ShippingMethodManagement
     * @param array<mixed>
     */
    public function afterEstimateByAddressId(
        MagentoQuoteShippingMethodManagement $subject, 
        array $result
    ){
        return $this->getShippingMethods($result);
    }
    
    /**
     * @param array<mixed> $result
     * 
     * @return array<mixed>
     */
    private function getShippingMethods(array $result)
    {
        foreach ($result as $shippingMethod) {
            if (
                $shippingMethod->getCarrierCode() == static::FREE_SHIPPING_CARRIER_CODE 
                && $shippingMethod->getMethodCode() == static::FREE_SHIPPING_METHOD_CODE
            ) {
                return [$shippingMethod];
            }
        }
    
        return $result;
    }
}