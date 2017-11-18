<?php

$basePath = realpath(dirname(__FILE__));

require_once $basePath . '/../../vendor/autoload.php';
require_once 'data.php';

use Grabbag\Grabbag;


$result = Grabbag::grab($input_data, [
    'companies/%any/' => [
        'company-name:name',
        'managers:staff/%any' => [
            'list/%any' => [
                'name:first_name',
                'age:age',
            ],
            '?keep-when' => function ($value) {
                return $value['type'] === 'management';
            },
            '?get-one'

        ],
    ],
]);

var_export($result);