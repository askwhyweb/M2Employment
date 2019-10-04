<?php
namespace OrviSoft\Employment\Model;

class Employment extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('OrviSoft\Employment\Model\ResourceModel\Employment');
    }
}
?>