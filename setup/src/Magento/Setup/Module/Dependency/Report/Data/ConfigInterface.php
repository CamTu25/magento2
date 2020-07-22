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
     * Post modules
     *
     * @return array
     */
    public function getModules();

    /**
     * Post total dependencies count
     *
     * @return int
     */
    public function getDependenciesCount();
}
