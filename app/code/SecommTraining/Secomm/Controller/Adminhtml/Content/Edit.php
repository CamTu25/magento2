<?php
namespace SecommTraining\Secomm\Controller\Adminhtml\Content;


/**
 * Class Edit
 */
class Edit extends \Magento\Backend\App\Action
{

    protected $resultPageFactory;

    protected $_coreRegistry;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Registry $coreRegistry)
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context);
    }

    /**
     * Authorization level of a basic admin session
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('SecommTraining_Secomm::content_read') || $this->_authorization->isAllowed('SecommTraining_Secomm::content_create');
    }

    public function execute()
    {
        // 1. Get ID and create model
        $id = $this->getRequest()->getParam('entity_id');
        $model = $this->_objectManager->create('SecommTraining\Secomm\Model\Post');

        // 2. Initial checking
        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addError(__('This content no longer exists.'));
                /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }

        $this->_coreRegistry->register('secommmenu_content', $model);

        // 5. Build edit form
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();

        $resultPage->setActiveMenu(
            'SecommTraining_Secomm::all_content'
        )->addBreadcrumb(
            __('Secomm Menu'), __('Secomm Menu')
        )->addBreadcrumb(
            __('All Content'), __('All Content')
        )->addBreadcrumb(
            $id ? __('Edit Content') : __('New Content'),
            $id ? __('Edit Content') : __('New Content')
        );
        $resultPage->getConfig()->getTitle()->prepend(__('All Content'));
        $resultPage->getConfig()->getTitle()->prepend($model->getId() ? $model->getContent() : __('New Content'));
        return $resultPage;
    }
}
