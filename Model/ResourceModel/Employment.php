<?php
namespace OrviSoft\Employment\Model\ResourceModel;

class Employment extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('employment', 'id');
    }
}
?>