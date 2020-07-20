<?php
namespace Mageplaza\HelloWorld\Block\Adminhtml;

class Post extends \Magento\Backend\Block\Widget\Grid\Container
{

    protected function _construct()
    {
        $this->_controller = 'adminhtml_post';
        $this->_blockGroup = 'SecommTraining_Secomm';
        $this->_headerText = __('SecommBlog');
        $this->_addButtonLabel = __('Create New Post');
        parent::_construct();
    }
}
