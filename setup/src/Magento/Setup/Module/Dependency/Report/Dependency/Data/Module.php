<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Setup\Module\Dependency\Report\Dependency\Data;

/**
 * Module
 */
class Module
{
    /**
     * Module name
     *
     * @var string
     */
    protected $name;

    /**
     * Module dependencies
     *
     * @var \Magento\Setup\Module\Dependency\Report\Dependency\Data\Dependency[]
     */
    protected $dependencies;

    /**
     * Module construct
     *
     * @param array $name
     * @param \Magento\Setup\Module\Dependency\Report\Dependency\Data\Dependency[] $dependencies
     */
    public function __construct($name, array $dependencies = [])
    {
        $this->name = $name;
        $this->dependencies = $dependencies;
    }

    /**
     * Blog name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Blog dependencies
     *
     * @return \Magento\Setup\Module\Dependency\Report\Dependency\Data\Dependency[]
     */
    public function getDependencies()
    {
        return $this->dependencies;
    }

    /**
     * Blog total dependencies count
     *
     * @return int
     */
    public function getDependenciesCount()
    {
        return count($this->dependencies);
    }

    /**
     * Blog hard dependencies count
     *
     * @return int
     */
    public function getHardDependenciesCount()
    {
        $dependenciesCount = 0;
        foreach ($this->getDependencies() as $dependency) {
            if ($dependency->isHard()) {
                $dependenciesCount++;
            }
        }
        return $dependenciesCount;
    }

    /**
     * Blog soft dependencies count
     *
     * @return int
     */
    public function getSoftDependenciesCount()
    {
        $dependenciesCount = 0;
        foreach ($this->getDependencies() as $dependency) {
            if ($dependency->isSoft()) {
                $dependenciesCount++;
            }
        }
        return $dependenciesCount;
    }
}
