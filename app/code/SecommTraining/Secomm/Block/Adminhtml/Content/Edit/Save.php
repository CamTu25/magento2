<?php

namespace SecommTraining\Secomm\Controller\Adminhtml\Content;

use Magento\Backend\App\Action;
use SecommTraining\Secomm\Model\Post;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Exception\LocalizedException;

class Save extends \Magento\Backend\App\Action
{
    /**
     * @var DataPersistorInterface
     */
    protected $dataPersistor;

    /**
     * @var \SecommTraining\Secomm\Model\PostFactory
     */
    private $postFactory;

    /**
     * @var \SecommTraining\Secomm\Api\ContentRepositoryInterface
     */
    private $contentRepository;

    /**
     * @param Action\Context $context
     * @param DataPersistorInterface $dataPersistor
     * @param \SecommTraining\Secomm\Model\PostFactory $postFactory
     * @param \SecommTraining\Secomm\Api\ContentRepositoryInterface $contentRepository
     */
    public function __construct(
        Action\Context $context,
        DataPersistorInterface $dataPersistor,
        \SecommTraining\Secomm\Model\PostFactory $postFactory = null,
        \SecommTraining\Secomm\Api\ContentRepositoryInterface $contentRepository = null
    ) {
        $this->dataPersistor = $dataPersistor;
        $this->postFactory = $postFactory
            ?: \Magento\Framework\App\ObjectManager::getInstance()->get(\SecommTraining\Secomm\Model\PostFactory::class);
        $this->contentRepository = $contentRepository
            ?: \Magento\Framework\App\ObjectManager::getInstance()->get(\SecommTraining\Secomm\Api\ContentRepositoryInterface::class);
        parent::__construct($context);
    }

    /**
     * Authorization level
     *
     * @see _isAllowed()
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('SecommTraining_Secomm::save');
    }

    /**
     * Save action
     *
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($data) {
            if (empty($data['entity_id'])) {
                $data['entity_id'] = null;
            }
            /** @var \SecommTraining\Secomm\Model\Post $model */
            $model = $this->postFactory->create();

            $id = $this->getRequest()->getParam('entity_id');
            if ($id) {
                try {
                    $model = $this->contentRepository->getById($id);
                } catch (LocalizedException $e) {
                    $this->messageManager->addErrorMessage(__('This news no longer exists.'));
                    return $resultRedirect->setPath('*/*/');
                }
            }

            $model->setData($data);

            $this->_eventManager->dispatch(
                'secomm_content_prepare_save',
                ['content' => $model, 'request' => $this->getRequest()]
            );

            try {
                $this->contentRepository->save($model);
                $this->messageManager->addSuccessMessage(__('You saved the news.'));
                $this->dataPersistor->clear('secomm_content');
                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['entity_id' => $model->getId(), '_current' => true]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addExceptionMessage($e->getPrevious() ?:$e);
            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the news.'));
            }

            $this->dataPersistor->set('secomm_content', $data);
            return $resultRedirect->setPath('*/*/edit', ['entity_id' => $this->getRequest()->getParam('entity_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}
?>
