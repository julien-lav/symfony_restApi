<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.file_parser.registry' shared service.

return $this->privates['nelmio_alice.file_parser.registry'] = new \Nelmio\Alice\Parser\ParserRegistry(array(0 => ($this->privates['nelmio_alice.file_parser.chainable.yaml'] ?? $this->load('getNelmioAlice_FileParser_Chainable_YamlService.php')), 1 => ($this->privates['nelmio_alice.file_parser.chainable.php'] ?? $this->privates['nelmio_alice.file_parser.chainable.php'] = new \Nelmio\Alice\Parser\Chainable\PhpParser()), 2 => ($this->privates['nelmio_alice.file_parser.chainable.json'] ?? $this->privates['nelmio_alice.file_parser.chainable.json'] = new \Nelmio\Alice\Parser\Chainable\JsonParser())));
