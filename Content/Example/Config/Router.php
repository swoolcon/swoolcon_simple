<?php
/**
 * @brief
 * Created by PhpStorm.
 * User: zy&cs
 * Date: 17-3-29
 * Time: 下午4:18
 */

/** @var \Phalcon\Mvc\Router $router */
$router = new \Phalcon\Mvc\Router();
$router->removeExtraSlashes(true);

$frontend = new \Phalcon\Mvc\Router\Group([
    'module'     => 'frontend',
    'namespace'  => 'App\\Modules\\Frontend\\Controllers',
    'controller' => 'index',
    'action'     => 'index',
]);
$frontend->setPrefix('');

$frontend->add('[/]?', [
    'action' => 'index',
]);
$frontend->add('/:controller[/]?', [
    'controller' => 1,
]);
$frontend->add('/:controller/:action[/]?', [
    'controller' => 1,
    'action'     => 2,
]);

$router->mount($frontend);


return $router;


