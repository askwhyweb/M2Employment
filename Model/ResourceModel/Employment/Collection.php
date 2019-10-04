<?php

namespace OrviSoft\Employment\Model\ResourceModel\Employment;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('OrviSoft\Employment\Model\Employment', 'OrviSoft\Employment\Model\ResourceModel\Employment');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }

}
?>