<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'hautelook_alice.resolver.bundle' shared service.

return $this->services['hautelook_alice.resolver.bundle'] = new \Hautelook\AliceBundle\Resolver\Bundle\NoBundleResolver(($this->privates['hautelook_alice.resolver.bundle.simple_resolver'] ?? $this->privates['hautelook_alice.resolver.bundle.simple_resolver'] = new \Hautelook\AliceBundle\Resolver\Bundle\SimpleBundleResolver(($this->services['kernel'] ?? $this->get('kernel', 1)))));