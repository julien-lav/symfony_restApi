<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.file_parser.chainable.yaml' shared service.

return $this->privates['nelmio_alice.file_parser.chainable.yaml'] = new \Nelmio\Alice\Parser\Chainable\YamlParser(($this->privates['nelmio_alice.file_parser.symfony_yaml'] ?? $this->privates['nelmio_alice.file_parser.symfony_yaml'] = new \Symfony\Component\Yaml\Parser()));
