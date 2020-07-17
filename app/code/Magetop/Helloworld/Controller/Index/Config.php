<?php
namespace Magetop\Helloworld\Controller\Index;
 
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magetop\Helloworld\Helper\Data;
 
class Config extends Action
{
 
    protected $helper;
 
    public function __construct(Context $context, Data $helper)
    {
        $this->helper = $helper;
        parent::__construct($context);
    }
 
 
    public function execute()
    {
        echo $this->helper->getText('text');
    }
}