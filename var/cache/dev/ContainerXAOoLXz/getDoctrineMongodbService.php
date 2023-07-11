<?php

namespace ContainerXAOoLXz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'doctrine_mongodb' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\ManagerRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ConnectionRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ManagerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/AbstractManagerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/ManagerRegistry.php';

        return $container->services['doctrine_mongodb'] = new \Doctrine\Bundle\MongoDBBundle\ManagerRegistry('MongoDB', $container->parameters['doctrine_mongodb.odm.connections'], $container->parameters['doctrine_mongodb.odm.document_managers'], 'default', 'default', 'ProxyManager\\Proxy\\GhostObjectInterface', $container);
    }
}
