<?php

namespace SecommTraining\Secomm\Controller\Adminhtml\Post;


/**
 * Class Index
 */
class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;

    const ADMIN_RESOURCE = 'Secomm_Helloworld::posts';


    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}
