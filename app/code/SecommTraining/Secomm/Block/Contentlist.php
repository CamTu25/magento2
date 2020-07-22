<?php
namespace SecommTraining\Secomm\Block;

use Magento\Framework\View\Element\Template;
use SecommTraining\Secomm\Model\ResourceModel\Post\CollectionFactory;
use Magento\Framework\App\RequestInterface;

class Contentlist extends Template
{
    protected $PostsFactory;
    protected $Request;
    public function __construct(Template\Context $context, CollectionFactory $postsFactory, RequestInterface $request)
    {
        $this->PostsFactory = $postsFactory;
        $this->Request = $request;
        parent::__construct($context);
    }

    public function GetContent(){
        $blog = $this->PostsFactory->create();
        return $blog;
    }

    public function getImagePath()
    {
        $imagePath = $this->_storeManager->getStore()
            ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        return $imagePath .'secomm/';
    }

}
