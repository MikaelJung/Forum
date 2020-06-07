<?php

namespace App;

require_once "app/Autoloader.php";
Autoloader::register();

use App\Router;
use App\Session;

define('DS', DIRECTORY_SEPARATOR);
define('ROOT_DIR', '.'.DS);
define('PUBLIC_PATH', ROOT_DIR.'public'.DS);
define('CSS_PATH', PUBLIC_PATH.'css'.DS );
define('JS_PATH', PUBLIC_PATH.'js'.DS );
define('IMG_PATH', PUBLIC_PATH.'img'.DS);

define('VIEW_PATH', ROOT_DIR.'view'.DS);
define('CTRL_PATH', ROOT_DIR.'controller'.DS);
define('SERVICE_PATH', ROOT_DIR.'app'.DS);


$result = Router::handlerequest($_GET);



include VIEW_PATH."layout.php";