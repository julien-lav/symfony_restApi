<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'hautelook_alice.locator' shared service.

return $this->services['hautelook_alice.locator'] = new \Hautelook\AliceBundle\Locator\EnvironmentlessFilesLocator(new \Hautelook\AliceBundle\Locator\EnvDirectoryLocator('Resources/fixtures', $this->parameters['hautelook_alice.root_dirs']));