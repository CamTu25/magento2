<?php
namespace SecommTraining\Secomm\Api\Data;

/**
 * Interface PostInterface
 *
 * @api
 */
interface ContentInterface
{
    const ENTITY_ID = 'entity_id';
    const TITLE  = 'title';
    const FEATURE_IMAGE = 'feature_image';
    const CONTENT = 'content';
    const CREATED_AT = 'created_at';
    const UPDATE_AT = 'update_at';

    public function getId();

    public function getTitle();

    public function getFeatureImage();

    public function getContent();

    public function getCreatedAt();

    public function getUpdatedAt();

    public function setId($id);

    public function setTitle($title);

    public function setFeatureImage($feature_image);

    public function setContent($content);

    public function setCreatedAt($created_at);

    public function setUpdatedAt($updated_at);
}

?>
