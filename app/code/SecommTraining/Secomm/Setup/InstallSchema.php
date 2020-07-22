<?php

namespace SecommTraining\Secomm\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $tableName = $setup->getTable('blog_posts');
        // Kiểm tra xem tên bảng đã tồn tại hay chưa, nếu chưa thì tạo bảng
        if ($setup->getConnection()->isTableExists($tableName) != true) {
            $table = $setup->getConnection()->newTable($tableName)
                ->addColumn(
                    'entity_id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'unsigned' => true,
                        'nullable' => false,
                        'primary' => true
                    ],
                    'Entity_id'
                )
                ->addColumn(
                    'title',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false, 'default' => ''],
                    'Title'
                )
                ->addColumn(
                    'feature_image',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false, 'default' => ''],
                    'Feature_image'
                )
                ->addColumn(
                    'content',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false, 'default' => ''],
                    'Contentlist'
                )
                ->addColumn(
                    'created_at',
                    Table::TYPE_DATETIME,
                    null,
                    [
                        'nullable' => false, 'default' => '0'
                    ],
                    'Created_at'
                )
                ->addColumn(
                    'update_at',
                    Table::TYPE_DATETIME,
                    null,
                    [
                        'nullable' => false
                    ],
                    'Update_at'
                )
                ->setComment('Post Posts')
                ->setOption('type', 'InnoDB')
                ->setOption('charset', 'utf8');
            $setup->getConnection()->createTable($table);
        }

        $setup->endSetup();
    }
}

