<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.generator.caller.simple' shared service.

return $this->privates['nelmio_alice.generator.caller.simple'] = new \Nelmio\Alice\Generator\Caller\SimpleCaller(($this->privates['nelmio_alice.generator.caller.registry'] ?? $this->load('getNelmioAlice_Generator_Caller_RegistryService.php')), ($this->privates['nelmio_alice.generator.resolver.value.registry'] ?? $this->load('getNelmioAlice_Generator_Resolver_Value_RegistryService.php')));
