<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.config.main' shared service.

return $this->privates['security.firewall.map.config.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', NULL, true, true, 'security.user.provider.concrete.your_db_provider', NULL, 'App\\Security\\TokenAuthenticator', NULL, NULL, array(0 => 'guard', 1 => 'anonymous'), NULL);
