<?php
namespace SecommTraining\Secomm\Controller\Adminhtml\Content;


/**
 * Class NewAction
 */
class NewAction extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Secomm_Helloworld::posts';
    protected $resultPageFactory;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}
