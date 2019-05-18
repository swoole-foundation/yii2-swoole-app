<?php
/**
 * Swoole服务器配置
 * @author xialeistudio
 * @date 2019-05-18
 */
return [
    'host' => 'localhost',
    'port' => 9501,
    'mode' => SWOOLE_PROCESS,
    'sockType' => SWOOLE_SOCK_TCP,
    'app' => require __DIR__ . '/web.php',
    'options' => [
        'pid_file' => Yii::getAlias('@runtime/swoole.pid'),
        'worker_num' => 2,
        'daemonize' => 0,
        'task_worker_num' => 2,
    ]
];