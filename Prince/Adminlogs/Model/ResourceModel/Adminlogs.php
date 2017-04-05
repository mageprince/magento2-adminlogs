<?php


namespace Prince\Adminlogs\Model\ResourceModel;

class Adminlogs extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('prince_adminlogs', 'adminlogs_id');
    }
}
