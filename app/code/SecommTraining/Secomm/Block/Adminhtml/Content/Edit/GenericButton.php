<?php
namespace SecommTraining\Secomm\Block\Adminhtml\Content\Edit;

use Magento\Backend\Block\Widget\Context;
use SecommTraining\Secomm\Api\ContentRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;

class GenericButton
{
    protected $context;

    protected $contentRepository;

    public function __construct(
        Context $context,
        ContentRepositoryInterface $contentRepository
    ) {
        $this->context = $context;
        $this->contentRepository = $contentRepository;
    }

    public function getBlogId()
    {
        try {
            return $this->contentRepository->getById(
                $this->context->getRequest()->getParam('entity_id')
            )->getId();
        } catch (NoSuchEntityException $e) {
        }
        return null;
    }

    public function getUrl($route = '', $params = [])
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}
?>
