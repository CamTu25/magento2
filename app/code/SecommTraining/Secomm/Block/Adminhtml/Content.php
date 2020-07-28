<?php
namespace SecommTraining\Secomm\Block\Adminhtml;

class Content extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml_content';
        $this->_blockGroup = 'SecommTraining_Secomm';
        $this->_headerText = __('Manage Content');

        parent::_construct();

        if ($this->_isContentAction('SecommTraining_Secomm::save')) {
            $this->buttonList->update('add', 'label', __('Add Content'));
        } else {
            $this->buttonList->remove('add');
        }
    }

    protected function _isContentAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
}
?>
