<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.function_token_parser' shared service.

return $this->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.function_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FunctionTokenParser(($this->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.argument_escaper'] ?? $this->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.argument_escaper'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\ArgumentEscaper()));