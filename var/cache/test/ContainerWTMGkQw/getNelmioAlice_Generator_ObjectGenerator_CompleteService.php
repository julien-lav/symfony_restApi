<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.generator.object_generator.complete' shared service.

return $this->privates['nelmio_alice.generator.object_generator.complete'] = new \Nelmio\Alice\Generator\ObjectGenerator\CompleteObjectGenerator(($this->privates['nelmio_alice.generator.object_generator.simple'] ?? $this->load('getNelmioAlice_Generator_ObjectGenerator_SimpleService.php')));
