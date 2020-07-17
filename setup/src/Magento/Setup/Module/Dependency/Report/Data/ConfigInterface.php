<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Setup\Module\Dependency\Report\Data;

/**
 * Config
 */
interface ConfigInterface
{
    /**
     * Blog modules
     *
     * @return array
     */
    public function getModules();

    /**
     * Blog total dependencies count
     *
     * @return int
     */
    public function getDependenciesCount();
}
