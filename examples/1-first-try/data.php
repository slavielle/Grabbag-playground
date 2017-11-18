<?php

$input_data = [
    'companies' => [
        [
            'name' => 'Acme Corporation',
            'staff' => [
                [
                    'type' => 'management',
                    'list' => [
                        (object)[
                            'first_name' => 'Kate',
                            'last_name' => 'Johnson',
                            'age' => '46'
                        ],
                        (object)[
                            'first_name' => 'Jack',
                            'last_name' => 'Smith',
                            'age' => '25'
                        ],
                    ],
                ],
                [
                    'type' => 'production',
                    'list' => [
                        (object)[
                            'first_name' => 'John',
                            'last_name' => 'Doe',
                            'age' => '34'
                        ],
                        (object)[
                            'first_name' => 'Barbara',
                            'last_name' => 'Williams',
                            'age' => '29'
                        ],
                    ]
                ]
            ],
        ],
        [
            'name' => 'Globex Corporation',
            'staff' => [
                [
                    'type' => 'management',
                    'list' => [
                        (object)[
                            'first_name' => 'John',
                            'last_name' => 'Williams',
                            'age' => '32'
                        ],
                        (object)[
                            'first_name' => 'Barbara',
                            'last_name' => 'Johnson',
                            'age' => '24'
                        ],
                    ],
                ],
                [
                    'type' => 'production',
                    'list' => [
                        (object)[
                            'first_name' => 'Jack',
                            'last_name' => 'Doe',
                            'age' => '39'
                        ],
                        (object)[
                            'first_name' => 'Kate',
                            'last_name' => 'Smith',
                            'age' => '24'
                        ],
                    ]
                ]
            ]
        ]
    ]
];