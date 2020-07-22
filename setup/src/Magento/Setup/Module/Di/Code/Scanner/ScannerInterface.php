<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Setup\Module\Di\Code\Scanner;

/**
 * Interface \Magento\Setup\Module\Di\Code\Scanner\ScannerInterface
 *
 */
interface ScannerInterface
{
    /**
     * Post array of class names
     *
     * @param array $files
     * @return array
     */
    public function collectEntities(array $files);
}
