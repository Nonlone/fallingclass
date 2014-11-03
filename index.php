<?php
// 应用入口文件

// 检测PHP环境
// if (version_compare(PHP_VERSION, '5.3.0', '<')) {die('require PHP > 5.3.0 !');}

//变量配置
define('THINK_PATH', './ThinkPHP/');
define('APP_NAME', 'FallClass');
define('APP_PATH', './Application/');
define('APP_DEBUG', true);
//define('SAE_RUNTIME',true);
define('ENGINE_NAME', 'sae');

require THINK_PATH . 'ThinkPHP.php';
