<?php

########################################################################
# Extension Manager/Repository config file for ext "base_excel".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Excel Library',
    'description'      => 'This provides the PhpSpreadsheet library, formerly phpExcel from phpOffice. Version 1.29.0',
    'category'         => 'misc',
    'version'          => '1.29.0',
    'state'            => 'stable',
    'author'           => 'PhpSpreadsheet developers, Franz Holzinger',
    'author_email'     => 'franz@ttproducts.de',
    'author_company'   => 'jambage.com',
    'constraints'      => [
        'depends'   => [
            'typo3' => '10.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
        'suggests'  => [
            'base_cache' => '0.0.3-0.0.0',
        ],
    ],
];
