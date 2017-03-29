<?php
/**
 * @brief
 * Created by PhpStorm.
 * User: zy&cs
 * Date: 17-3-29
 * Time: 下午1:49
 */

define('BASE_PATH', dirname(dirname(__FILE__)));

require BASE_PATH . '/Bootstrap/Autoloader.php';


$di = new Phalcon\Di();


try {

    //service
    require app_path('Register/Service.php');


    //application
    $app     = new \Phalcon\Mvc\Application($di);
    $modules = require app_path('Register/Modules.php');


    $app->registerModules($modules);
    $response = $app->handle();

    echo $response->getContent();

} catch (Exception $ex) {
    echo $ex->getTraceAsString();
}
