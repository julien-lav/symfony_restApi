<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.orm.default_configuration' shared service.

$this->privates['doctrine.orm.default_configuration'] = $instance = new \Doctrine\ORM\Configuration();

$instance->setEntityNamespaces(array('App' => 'App\\Entity'));
$instance->setMetadataCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php')));
$instance->setQueryCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php')));
$instance->setResultCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php')));
$instance->setMetadataDriverImpl(($this->privates['doctrine.orm.default_metadata_driver'] ?? $this->load('getDoctrine_Orm_DefaultMetadataDriverService.php')));
$instance->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$instance->setProxyNamespace('Proxies');
$instance->setAutoGenerateProxyClasses(true);
$instance->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$instance->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$instance->setNamingStrategy(($this->privates['doctrine.orm.naming_strategy.underscore'] ?? $this->privates['doctrine.orm.naming_strategy.underscore'] = new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy()));
$instance->setQuoteStrategy(($this->privates['doctrine.orm.quote_strategy.default'] ?? $this->privates['doctrine.orm.quote_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultQuoteStrategy()));
$instance->setEntityListenerResolver(($this->privates['doctrine.orm.default_entity_listener_resolver'] ?? $this->privates['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this)));
$instance->setRepositoryFactory(($this->privates['doctrine.orm.container_repository_factory'] ?? $this->load('getDoctrine_Orm_ContainerRepositoryFactoryService.php')));

return $instance;
