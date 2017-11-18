<?php

$basePath = realpath(dirname(__FILE__));

require_once $basePath . '/../../vendor/autoload.php';
require_once 'data.php';

use Grabbag\Grabbag;


$result = Grabbag::grab($input_data, [
    'companies/%any/' => [
        'company-name:name',
        'employee-list:staff/%any/list/%any' => [
            'name:first_name',
            'age:age',
        ],
    ],
]);

var_export($result);
