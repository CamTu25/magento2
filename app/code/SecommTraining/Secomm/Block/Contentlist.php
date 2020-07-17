<?php
namespace SecommTraining\Secomm\Block;

use Magento\Framework\View\Element\Template;
use SecommTraining\Secomm\Model\ResourceModel\Post\CollectionFactory;

class Contentlist extends Template
{
    protected $PostsFactory;

    public function __construct(Template\Context $context, CollectionFactory $postsFactory)
    {
        $this->PostsFactory = $postsFactory;
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
