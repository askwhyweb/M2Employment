<?php
namespace OrviSoft\Employment\Block\Adminhtml\Employment\Edit;

/**
 * Admin page left menu
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('employment_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Employment Information'));
    }
}