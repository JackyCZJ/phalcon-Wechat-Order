# Phalcon-WeChat-Order

基于Phalcon 4.x ,文档与3.x通用




然后根据[Phaclon](https://phalconphp.com/zh/) 官网教程安装Phaclon
[这里](http://docs.iphalcon.cn/)是phalcon爱好者翻译的中文文档内容翻译的也差不多了，如果看不懂官网的英文的话可以用这个网站学习。

安装好```Phaclon devtool```后

```bash
~git clone git@github.com:JackyCZJ/phalcon-Wechat-Order.git
~cd  phalcon-Wechat-Order
~composer install
```
这里引用了phalcon论坛大佬的autoload代码 如下

``` php
<?php
//app/config/loader.php

$loader = new \Phalcon\Loader();

$namespace = [

];
/**
 * We're a registering a set of directories taken from the configuration file
 */

$map = require $config->application->vendorDir.'composer/autoload_namespaces.php';

foreach ($map as $k => $values) {
    $k = trim($k, '\\');
    if (!isset($namespaces[$k])) {
        $dir = '/' . str_replace('\\', '/', $k) . '/';
        $namespaces[$k] = implode($dir . ';', $values) . $dir;
    }
}

$loader->registerNamespaces($namespaces);

$classMap = require $config->application->vendorDir . 'composer/autoload_classmap.php';

$loader->registerClasses($classMap);

$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir
    ]
);

$loader->register();

```
特此感谢

然后找到```app/config/config.php ```修改数据库信息

```bash
~phalcon migration run #迁移数据库
```

然后就可以跑起来了

顺便一提，最好在nts版本的php7.2.8以及加载了mod_cgi的apache或者开启php-fpm的Nginx服务器上跑，不然的话在进行Ajax操作时整个框架会发生崩溃。
