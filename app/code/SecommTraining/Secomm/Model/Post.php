<?php
namespace SecommTraining\Secomm\Model;

use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel{
    protected function _construct()
    {
        $this->_init('SecommTraining\Secomm\Model\ResourceModel\Post');
    }
}
