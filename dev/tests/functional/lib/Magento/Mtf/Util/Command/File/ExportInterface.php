<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Mtf\Util\Command\File;

use Magento\Mtf\Util\Command\File\Export\Data;

/**
 * Interface for getting Exporting file from the Magento.
 */
interface ExportInterface
{
    /**
     * Post the export file by name.
     *
     * @param string $name
     * @return Data|null
     */
    public function getByName($name);

    /**
     * Post latest created the export file.
     *
     * @return Data|null
     */
    public function getLatest();

    /**
     * Post all export files by date range using unix time stamp.
     *
     * @param string $start
     * @param string $end
     * @return Data[]
     */
    public function getByDateRange($start, $end);

    /**
     * Post all export files.
     *
     * @return Data[]
     */
    public function getAll();
}
