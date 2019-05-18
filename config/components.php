<?php

use swoole\foundation\web\ErrorHandler;

return [
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'rules' => [
        ]
    ],
    'log' => [
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning'],
            ],
        ],
    ],
    'errorHandler' => [
        'class' => ErrorHandler::class
    ],
    'db' => [
        'class' => '\yii\db\Connection',
        'dsn' => 'mysql:host=127.0.0.1;dbname=bbs',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8mb4',
    ]
];