# TYPO3 extension base_excel

## What is does

This extension brings the "PhpSpreadsheet library" PHP classes "phpoffice/phpspreadsheet", formerly phpExcel, to TYPO3.

## What is the origin

See https://github.com/PHPOffice/PhpSpreadsheet/tree/1.29.0

All the library classes are available in the extension file
*Library/phpoffice-phpspreadsheet.phar* which is automatically included
upon activation in the extension manager by composer or autoloader.

## Documentation

https://github.com/PHPOffice/PhpSpreadsheet/tree/1.29.0

## Installation
Via composer or the TER.

### Composer
`composer req jambagecom/base-excel`

### TER
https://extensions.typo3.org/extension/base_excel

#### phar-composer
Get it from here:
https://github.com/clue/phar-composer

#### For developers
In case TYPO3 does not run in composer mode, the library directory can be rebuilt by 
- running `composer run-script extension-create-libs`. 
- See chapter contributors.

#### For contributors
- To build the TER package, you must delete the file *Libraries/phpoffice-phpspreadsheet.phar*
  and run the command `composer run-script extension-release` in the extension folder for generating the archive.
- At the beginning you will get the question: 
    *"No composer.json in current directory, do you want to use the one at /var/www/html/typo3conf/ext/base_excel? [Y,n]?"*. 
-- Here you must answer with **N**. 
- Then everything will be downloaded and the resulting file 
*Library/phpoffice-phpspreadsheet.phar* will be generated.
