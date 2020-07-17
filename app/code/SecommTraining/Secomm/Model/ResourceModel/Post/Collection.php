<?php
namespace SecommTraining\Secomm\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'SecommTraining\Secomm\Model\Post',
            'SecommTraining\Secomm\Model\ResourceModel\Post'
        );
    }
}
