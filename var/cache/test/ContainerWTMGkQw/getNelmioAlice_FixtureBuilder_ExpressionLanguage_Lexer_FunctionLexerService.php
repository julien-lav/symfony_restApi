<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.expression_language.lexer.function_lexer' shared service.

return $this->privates['nelmio_alice.fixture_builder.expression_language.lexer.function_lexer'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\FunctionLexer(($this->privates['nelmio_alice.fixture_builder.expression_language.lexer.string_then_reference_lexer'] ?? $this->load('getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_StringThenReferenceLexerService.php')));