<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.expression_language.lexer.reference_escaper_lexer' shared service.

return $this->privates['nelmio_alice.fixture_builder.expression_language.lexer.reference_escaper_lexer'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\ReferenceEscaperLexer(($this->privates['nelmio_alice.fixture_builder.expression_language.lexer.globals_patterns_lexer'] ?? $this->load('getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_GlobalsPatternsLexerService.php')));
