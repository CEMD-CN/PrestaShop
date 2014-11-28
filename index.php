<?php
require(dirname(__FILE__).'/config/config.inc.php'); //从配置起步，加载配置文件。
Dispatcher::getInstance()->dispatch();//获得分发器实例，分发请求。
