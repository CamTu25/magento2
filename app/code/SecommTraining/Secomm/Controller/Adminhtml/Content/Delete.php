<?php
namespace SecommTraining\Secomm\Controller\Adminhtml\Content;


/**
 * Class Delete
 */
class Delete extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'SecommTraining_Secomm::posts';

    /**
     * @var \SecommTraining\Secomm\Model\PostRepository
     */
    protected $contentRepository;

    /**
     * Delete constructor.
     * @param \SecommTraining\Secomm\Model\PostRepository $contentRepository
     * @param \Magento\Backend\App\Action\Context $context
     */
    public function __construct(
        \SecommTraining\Secomm\Model\PostRepository $contentRepository,
        \Magento\Backend\App\Action\Context $context
    ) {
        $this->contentRepository = $contentRepository;

        parent::__construct($context);
    }

    public function execute()
    {
        // check if we know what should be deleted
        $id = $this->getRequest()->getParam('entity_id');
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                // delete model
                $this->contentRepository->deleteById($id);
                // display success message
                $this->messageManager->addSuccess(__('You have deleted the object.'));
                // go to grid
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addError($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/', ['entity_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addError(__('We can not find an object to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');

    }

}
