<?php
namespace SecommTraining\Secomm\Controller\Details;

use Magento\Framework\App\Action\Action;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class Detail extends Action
{
    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        $resultPage = $this->pageFactory->create();
        // Tạo tiêu đề
        $resultPage->getConfig()->getTitle()->set(__('Detail - Chi tiết'));
        // Tạo breadcrumb
        /** @var \Magento\Theme\Block\Html\Breadcrumbs */
        if($resultPage->getLayout()->getBlock('breadcrumbs')) {
            $breadcrumbs = $resultPage->getLayout()->getBlock('breadcrumbs');
            $breadcrumbs->addCrumb('TrangChu',
                [
                    'label' => __('Home'),
                    'title' => __('TrangChu'),
                    'link' => $this->_url->getUrl('')
                ]
            );
            $breadcrumbs->addCrumb('Post',
                [
                    'label' => __('Posts'),
                    'title' => __('BaiViet'),
                    'link' => $this->_url->getUrl('/secomm/posts/content')
                ]
            );
            $breadcrumbs->addCrumb('Detail',
                [
                    'label' => __('Detail'),
                    'title' => __('ChiTiet')
                ]
            );
        }
        return $resultPage;
    }

}
