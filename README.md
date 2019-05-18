# yii2 swoole app
swoole Yii2应用模板，开发方式同普通Yii2应用一致，让你拥有Yii2的开发效率和swoole的运行效率!
## 初始化项目

`composer create-project swoole-foundation/yii2-swoole-app app`

## 改造已有项目

可以参考本项目，需要处理的地方如下：

1. web环境下Request/Response组件需要处理
2. ErrorHandler需要处理
3. 提供swoole启动引导脚本

第1点和第2点可以参考[https://github.com/swoole-foundation/yii2-swoole-extension](https://github.com/swoole-foundation/yii2-swoole-extension) 升级成本比较低。

## 服务器管理

+ 启动服务器
    ```bash
    ./yii server/start
    ```

+ reload服务器
    ```bash
    ./yii server/reload
    ```
    
+ 停止服务器
    ```bash
    ./yii server/stop
    ```
