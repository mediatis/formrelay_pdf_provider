<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form Relay - PDF Provider Plugin',
    'description' => 'FormRelay Data Provider for PDFs with fillable form fields',
    'category' => 'be',
    'author' => '',
    'author_email' => '',
    'author_company' => 'Mediatis AG',
    'state' => 'alpha',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'formrelay' => '>=5.0.0'
        ],
        'conflicts' => [
        ],
    ],
];
