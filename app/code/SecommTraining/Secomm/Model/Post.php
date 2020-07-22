<?php
namespace SecommTraining\Secomm\Model;

use SecommTraining\Secomm\Api\Data\ContentInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements ContentInterface, IdentityInterface
    {
    const CACHE_TAG = 'secommtraining_secomm';

    protected function _construct()
    {
        $this->_init('SecommTraining\Secomm\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getId()
    {
        return parent::getData(self::ENTITY_ID);
    }

    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    public function getFeatureImage()
    {
        return $this->getData(self::FEATURE_IMAGE);
    }

    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATE_AT);
    }

    public function setId($id)
    {
        return $this->setData(self::ENTITY_ID, $id);
    }

    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    public function setFeatureImage($feature_image)
    {
        return $this->setData(self::FEATURE_IMAGE, $feature_image);
    }

    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    public function setCreatedAt($created_at)
    {
        return $this->setData(self::CREATED_AT, $created_at);
    }

    public function setUpdatedAt($updated_at)
    {
        return $this->setData(self::UPDATE_AT, $updated_at);
    }
}
?>
