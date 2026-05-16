<?php

namespace JambageCom\BaseExcel\Api;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */


/**
 * Part of the base_excel (PhpSpreadsheet library) extension.
 *
 * PhpSpreadsheet API functions
 *
 * @author        Franz Holzinger <franz@ttproducts.de>
 * @maintainer    Franz Holzinger <franz@ttproducts.de>
 * @package       TYPO3
 * @subpackage    base_excel
 */
class PhpSpreadsheet implements \TYPO3\CMS\Core\SingletonInterface
{

    /**
     * copy a complete row with all columns, their values, styles and formats
     *
     * see: https://stackoverflow.com/questions/29341713/phpexcel-fast-duplicate-row
     *
     */
    static public function copyRow(
        &$fromWorkspace,
        &$toWorkspace,
        $fromRow,
        $toRow
    ) {
        $toWorkspace->getRowDimension($toRow)->setRowHeight(
            $fromWorkspace->getRowDimension($fromRow)->getRowHeight()
        );
        $lastColumn = $fromWorkspace->getHighestColumn();
        for ($column = 'A'; $column <= $lastColumn; ++$column) {
            $fromCell = $fromWorkspace->getCell($column . $fromRow);
            $toCell   = $toWorkspace->getCell($column . $toRow);
            $toCell->setXfIndex($fromCell->getXfIndex());
            $toCell->setValue($fromCell->getValue());
        }
    }
}
