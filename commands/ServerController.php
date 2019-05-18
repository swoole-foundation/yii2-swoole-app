<?php
/**
 * @author xialeistudio
 * @date 2019-05-18
 */

namespace app\commands;

use swoole\foundation\web\Server;
use Yii;
use yii\console\Controller;
use \Swoole\Runtime;

/**
 * Swoole服务器管理
 * Class ServerController
 * @package app\commands
 */
class ServerController extends Controller
{
    /**
     * 服务器管理
     */
    public function actionIndex()
    {
    }

    /**
     * 发送信号
     * @param int $signal
     */
    private function kill($signal)
    {
        $pid = file_get_contents(Yii::getAlias('@runtime/swoole.pid'));
        if (empty($pid)) {
            $this->stderr("swoole服务器未运行\n");
            return;
        }
        if (!posix_kill($pid, $signal)) {
            $this->stderr("swoole服务器未运行\n");
            return;
        }
    }

    /**
     * 启动Swoole服务器
     */
    public function actionStart()
    {
        Runtime::enableCoroutine();
        $config = require __DIR__ . '/../config/server.php';
        (new Server($config))->start();
    }

    /**
     * 关闭服务器
     */
    public function actionShutdown()
    {
        $this->kill(SIGTERM);
        $this->stdout("swoole服务器已关闭\n");
    }

    /**
     * reload工作进程
     */
    public function actionReload()
    {
        $this->kill(SIGUSR1);
        $this->stdout("Swoole服务器工作进程reload完成\n");
    }
}