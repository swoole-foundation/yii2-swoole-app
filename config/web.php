<?php
/**
 * @author xialeistudio
 * @date 2019-05-18
 */

use swoole\foundation\web\Request;
use swoole\foundation\web\Response;

return [
    'id' => 'yii2-swoole-app',
    'name' => 'yii2 swoole app',
    'basePath' => dirname(__DIR__),
    'language' => 'zh-CN',
    'bootstrap' => ['log'],
    'aliases' => [
        '@app' => dirname(__DIR__)
    ],
    'components' => array_merge(require __DIR__ . '/components.php', [
        'response' => [
            'class' => Response::class,
            'format' => Response::FORMAT_JSON
        ],
        'request' => [
            'class' => Request::class,
            'cookieValidationKey' => '123456'
        ]
    ]),
    'params' => require __DIR__ . '/params.php'
];