<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.generator.resolver.parameter_bag.simple' shared service.

return $this->privates['nelmio_alice.generator.resolver.parameter_bag.simple'] = new \Nelmio\Alice\Generator\Resolver\Parameter\SimpleParameterBagResolver(($this->privates['nelmio_alice.generator.resolver.parameter.registry'] ?? $this->load('getNelmioAlice_Generator_Resolver_Parameter_RegistryService.php')));
