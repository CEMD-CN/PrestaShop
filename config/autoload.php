<?php
// Include some alias functions
require_once(_PS_CONFIG_DIR_.'alias.php');//如何使用别名函数？代理吗？
require_once(_PS_CLASS_DIR_.'PrestaShopAutoload.php');//加载php文件，负载自动加载文件
spl_autoload_register(array(PrestaShopAutoload::getInstance(), 'load'));//注册自动加载函数

