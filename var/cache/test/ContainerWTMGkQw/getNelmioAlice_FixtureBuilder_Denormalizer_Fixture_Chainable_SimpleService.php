<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple' shared service.

return $this->privates['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\SimpleDenormalizer(($this->privates['nelmio_alice.fixture_builder.denormalizer.specs.simple'] ?? $this->load('getNelmioAlice_FixtureBuilder_Denormalizer_Specs_SimpleService.php')));
