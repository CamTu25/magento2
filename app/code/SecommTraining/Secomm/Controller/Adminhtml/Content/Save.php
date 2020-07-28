<?php
namespace SecommTraining\Secomm\Controller\Adminhtml\Content;

use Magento\Backend\App\Action;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Exception\LocalizedException;
use SecommTraining\Secomm\Model\Post\ImageUploader;

/**
 * Class Save
 */
class Save extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Secomm_Helloworld::posts';

    /**
     * @var DataPersistorInterface
     */
    protected $dataPersistor;

    /**
     * @var DataPersistorInterface
     */
    protected $imageUploader;

    /**
     * @var \SecommTraining\Secomm\Model\PostRepository
     */
    protected $contentRepository;

    /**
     * @param Action\Context $context
     * @param DataPersistorInterface $dataPersistor
     * @param ImageUploader $imageUploader
     * @param \SecommTraining\Secomm\Model\PostRepository $contentRepository
     */
    public function __construct(
        Action\Context $context,
        DataPersistorInterface $dataPersistor,
        ImageUploader $imageUploader,
        \SecommTraining\Secomm\Model\PostRepository $contentRepository
    ) {
        $this->dataPersistor    = $dataPersistor;
        $this->imageUploader = $imageUploader;
        $this->contentRepository  = $contentRepository;

        parent::__construct($context);
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
            $imageName = '';
            if (!empty($data['feature_image'])) {
                $imageName = $data['feature_image'][0]['name'];
                $data['feature_image'] = $imageName;
            }

            /** @var \SecommTraining\Secomm\Model\Post $model */
            $model = $this->_objectManager->create('SecommTraining\Secomm\Model\Post');

            $id = $this->getRequest()->getParam('entity_id');
            if ($id) {
                $model = $this->contentRepository->getById($id);
            }

            $model->setData($data);

            try {
                $this->contentRepository->save($model);
                if ($imageName) {
                    $this->imageUploader->moveFileFromTmp($imageName);
                }
                $this->messageManager->addSuccess(__('You saved the thing.'));
                $this->dataPersistor->clear('secommmenu_content');
                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['entity_id' => $model->getId(), '_current' => true]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addException($e, __('Something went wrong while saving the data.'));
            }

            $this->dataPersistor->set('secommmenu_content', $data);
            return $resultRedirect->setPath('*/*/edit', ['entity_id' => $this->getRequest()->getParam('entity_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}
