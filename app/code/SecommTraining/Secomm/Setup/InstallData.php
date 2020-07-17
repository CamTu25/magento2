<?php
namespace SecommTraining\Secomm\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $tableName = $setup->getTable('blog_posts');
        if($setup->getConnection()->isTableExists($tableName) == true){
            $data = [
                [
                    'title' => 'Seccom title 1',
                    'feature_image' => 'feature image 1',
                    'content' => 'content 1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'update_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Seccom title 2',
                    'feature_image' => 'feature image 2',
                    'content' => 'content 2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'update_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Seccom title 3',
                    'feature_image' => 'feature image 3',
                    'content' => 'content 3',
                    'created_at' => date('Y-m-d H:i:s'),
                    'update_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Seccom title 4',
                    'feature_image' => 'feature image 4',
                    'content' => 'content 4',
                    'created_at' => date('Y-m-d H:i:s'),
                    'update_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Seccom title 5',
                    'feature_image' => 'feature image 5',
                    'content' => 'content 5',
                    'created_at' => date('Y-m-d H:i:s'),
                    'update_at' => date('Y-m-d H:i:s'),
                ],
            ];
            foreach ($data as $item){
                $setup->getConnection()->insert($tableName, $item);
            }
        }
        $setup->endSetup();
    }
}

