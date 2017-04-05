<?php


namespace Prince\Adminlogs\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

    /**
     * {@inheritdoc}
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $installer = $setup;
        $installer->startSetup();

        $table_prince_adminlogs = $setup->getConnection()->newTable($setup->getTable('prince_adminlogs'));

        
        $table_prince_adminlogs->addColumn(
            'adminlogs_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            array('identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,),
            'Entity ID'
        );
        

        
        $table_prince_adminlogs->addColumn(
            'username',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'username'
        );
        

        
        $table_prince_adminlogs->addColumn(
            'ipaddress',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'ipaddress'
        );
        

        
        $table_prince_adminlogs->addColumn(
            'status',
            \Magento\Framework\DB\Ddl\Table::TYPE_BOOLEAN,
            null,
            [],
            'status'
        );
        

        
        $table_prince_adminlogs->addColumn(
            'date',
            \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
            null,
            [],
            'date'
        );
        

        $setup->getConnection()->createTable($table_prince_adminlogs);

        $setup->endSetup();
    }
}
