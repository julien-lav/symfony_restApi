<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hautelook_alice.resolver.bundle.simple_resolver' shared service.

return $this->privates['hautelook_alice.resolver.bundle.simple_resolver'] = new \Hautelook\AliceBundle\Resolver\Bundle\SimpleBundleResolver(($this->services['kernel'] ?? $this->get('kernel', 1)));
