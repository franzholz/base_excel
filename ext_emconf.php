<?php

########################################################################
# Extension Manager/Repository config file for ext "base_excel".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Excel Library',
    'description'      => 'This provides the PhpSpreadsheet library, formerly phpExcel from phpOffice.',
    'category'         => 'misc',
    'version'          => '5.1.0',
    'state'            => 'stable',
    'author'           => 'PhpSpreadsheet developers, Franz Holzinger',
    'author_email'     => 'franz@ttproducts.de',
    'author_company'   => 'jambage.com',
    'constraints'      => [
        'depends'   => [
            'typo3' => '12.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
        'suggests'  => [
            'base_cache' => '0.0.3-0.0.0',
        ],
    ],
];
