<?php
/**
 * easyphp, easy php framework
 * (c) 2015 YanYuMiao
 *
 */

//
define('PATH_SYS', './sys/');
define('PATH_APP', './app/');
define('PATH_MODEL', PATH_APP.'model/');
define('PATH_CTRL', PATH_APP.'ctrl/');

//
define('CURRENT_TIME', time());

//
require PATH_APP.'config.php';
require PATH_SYS.'app.php';
require PATH_SYS.'function.php';
require PATH_SYS.'ctrl.php';
require PATH_SYS.'db.php';

//
spl_autoload_register('autoload');

//
App::run();

