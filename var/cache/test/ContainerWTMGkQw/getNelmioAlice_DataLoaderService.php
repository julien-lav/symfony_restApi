<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'nelmio_alice.data_loader' shared service.

return $this->services['nelmio_alice.data_loader'] = new \Nelmio\Alice\Loader\SimpleDataLoader(($this->privates['nelmio_alice.fixture_builder.simple'] ?? $this->load('getNelmioAlice_FixtureBuilder_SimpleService.php')), ($this->privates['nelmio_alice.generator.double_pass'] ?? $this->load('getNelmioAlice_Generator_DoublePassService.php')));
