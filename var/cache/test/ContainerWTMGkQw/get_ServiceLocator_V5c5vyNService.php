<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.V5c5vyN' shared service.

return $this->privates['.service_locator.V5c5vyN'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\ArticlesController::postArticlesAction' => function () {
    return ($this->privates['.service_locator.zv3hrPg'] ?? $this->load('get_ServiceLocator_Zv3hrPgService.php'));
}, 'App\\Controller\\ArticlesController::setViewHandler' => function () {
    return ($this->privates['.service_locator.0igcDxJ'] ?? $this->load('get_ServiceLocator_0igcDxJService.php'));
}, 'App\\Controller\\UsersController::postUsersAction' => function () {
    return ($this->privates['.service_locator.RWA3FG5'] ?? $this->load('get_ServiceLocator_RWA3FG5Service.php'));
}, 'App\\Controller\\UsersController::setViewHandler' => function () {
    return ($this->privates['.service_locator.0igcDxJ'] ?? $this->load('get_ServiceLocator_0igcDxJService.php'));
}, 'App\\Controller\\ArticlesController:postArticlesAction' => function () {
    return ($this->privates['.service_locator.zv3hrPg'] ?? $this->load('get_ServiceLocator_Zv3hrPgService.php'));
}, 'App\\Controller\\ArticlesController:setViewHandler' => function () {
    return ($this->privates['.service_locator.0igcDxJ'] ?? $this->load('get_ServiceLocator_0igcDxJService.php'));
}, 'App\\Controller\\UsersController:postUsersAction' => function () {
    return ($this->privates['.service_locator.RWA3FG5'] ?? $this->load('get_ServiceLocator_RWA3FG5Service.php'));
}, 'App\\Controller\\UsersController:setViewHandler' => function () {
    return ($this->privates['.service_locator.0igcDxJ'] ?? $this->load('get_ServiceLocator_0igcDxJService.php'));
}));
