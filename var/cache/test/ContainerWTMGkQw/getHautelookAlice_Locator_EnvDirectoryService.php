<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hautelook_alice.locator.env_directory' shared service.

return $this->privates['hautelook_alice.locator.env_directory'] = new \Hautelook\AliceBundle\Locator\EnvDirectoryLocator('Resources/fixtures', $this->parameters['hautelook_alice.root_dirs']);
