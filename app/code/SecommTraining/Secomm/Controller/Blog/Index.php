<?php
namespace SecommTraining\Secomm\Controller\Blog;

use Magento\Framework\App\Action\Action;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use SecommTraining\Secomm\Model\ResourceModel\Post\CollectionFactory;

class Index extends Action
{
    protected $PageFactory;
    protected $PostsFactory;

    public function __construct(Context $context, PageFactory $pageFactory, CollectionFactory $postsFactory)
{
    parent::__construct($context);
    $this->PageFactory = $pageFactory;
    $this->PostsFactory = $postsFactory;
}

    public function execute()
{
    echo "Lấy dữ liệu từ bảng blog_posts";
    $this->PostsFactory->create();
    $collection = $this->PostsFactory->create()
        ->addFieldToSelect(array('title','feature_image','content','created_at','update_at'))
//        ->addFieldToFilter('title',1)
        ->setPageSize(10);
    echo '<pre>';
    print_r($collection->getData());
    echo '<pre>';
}
}

