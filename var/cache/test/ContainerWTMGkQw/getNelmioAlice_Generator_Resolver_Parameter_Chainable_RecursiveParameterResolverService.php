<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.generator.resolver.parameter.chainable.recursive_parameter_resolver' shared service.

return $this->privates['nelmio_alice.generator.resolver.parameter.chainable.recursive_parameter_resolver'] = new \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\RecursiveParameterResolver(($this->privates['nelmio_alice.generator.resolver.parameter.chainable.string_parameter_resolver'] ?? $this->privates['nelmio_alice.generator.resolver.parameter.chainable.string_parameter_resolver'] = new \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\StringParameterResolver()), 5);
