<?php
namespace Magetop\Helloworld\Helper;
 
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;
 
class Data extends AbstractHelper
{
    public function getText($text){
        return $this->scopeConfig->getValue('helloworld/setting/'.$text, ScopeInterface::SCOPE_STORE);
    }
}