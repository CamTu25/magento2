<?php
namespace SecommTraining\Secomm\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    protected function _construct()
    {
        // blog_posts là tên bảng , id là khóa chính primary của bảng
        $this->_init('blog_posts', 'entity_id');
    }
}
