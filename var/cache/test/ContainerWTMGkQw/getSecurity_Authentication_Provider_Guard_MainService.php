<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.guard.main' shared service.

return $this->privates['security.authentication.provider.guard.main'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
    yield 0 => ($this->privates['App\Security\TokenAuthenticator'] ?? $this->privates['App\Security\TokenAuthenticator'] = new \App\Security\TokenAuthenticator());
}, 1), ($this->privates['security.user.provider.concrete.your_db_provider'] ?? $this->load('getSecurity_User_Provider_Concrete_YourDbProviderService.php')), 'main', ($this->privates['security.user_checker'] ?? $this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker()));