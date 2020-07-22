<?php
namespace SecommTraining\Secomm\Block;

use Magento\Framework\View\Element\Template;
use SecommTraining\Secomm\Model\ResourceModel\Post\CollectionFactory;
use Magento\Framework\App\RequestInterface;
use SecommTraining\Secomm\Model\PostFactory;
class ContentDetail extends Template
{
    protected $PostFactory;
    protected $Request;
    protected $CollectionFactory;
    public function __construct(Template\Context $context, CollectionFactory $collectionFactory, PostFactory $postFactory, RequestInterface $request)
    {
        $this->CollectionFactory = $collectionFactory;
        $this->PostFactory = $postFactory;
        $this->Request = $request;
        parent::__construct($context);
    }

    public function getDetail()
    {
        $postId = $this->Request->getParam('id');
        $postModel = $this->PostFactory->create()->load($postId);
        return $postModel->getData();
        return $postId;
    }

    public function getImagePath()
    {
        $imagePath = $this->_storeManager->getStore()
            ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        return $imagePath .'secomm/';
    }

}
