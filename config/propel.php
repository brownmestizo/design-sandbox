<?php

return [
    'propel' => [
        'database' => [
            'connections' => [
                'mpm' => [
                    'adapter'    => 'mysql',
                    'classname'  => 'Propel\Runtime\Connection\ConnectionWrapper',
                    'dsn'        => 'mysql:host=localhost;dbname=rathmell_mpm',
                    'user'       => 'root',
                    'password'   => '',
                    'attributes' => []
                ]
            ]
        ],
        'runtime' => [
            'defaultConnection' => 'mpm',
            'connections' => ['mpm']
        ],
        'generator' => [
            'defaultConnection' => 'mpm',
            'connections' => ['mpm']
        ],
        'paths' => [
            'schemaDir' => 'config/',
            'phpDir' => 'config/generated-classes/',
            'sqlDir' => 'config/generated-sql/'
        ],
    ]
];

?>