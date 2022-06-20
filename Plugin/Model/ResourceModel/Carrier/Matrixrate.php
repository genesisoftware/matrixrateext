<?php
namespace Genesisoft\MatrixRateExt\Plugin\Model\ResourceModel\Carrier;

class Matrixrate
{

    public function beforeGetRate($subject, \Magento\Quote\Model\Quote\Address\RateRequest $request, $zipRangeSet = false)
    {
        $postcode = trim($request->getDestPostcode()); //SHQ18-1978
        $postcode = str_replace('-','',$postcode);
        $request->setDestPostcode($postcode);
        return [$request,$zipRangeSet];
    }

}
