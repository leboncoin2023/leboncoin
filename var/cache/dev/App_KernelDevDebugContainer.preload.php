<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerXAOoLXz\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerXAOoLXz/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerXAOoLXz/getTwigService.php';
require __DIR__.'/ContainerXAOoLXz/getSession_FactoryService.php';
require __DIR__.'/ContainerXAOoLXz/getServicesResetterService.php';
require __DIR__.'/ContainerXAOoLXz/getSecrets_VaultService.php';
require __DIR__.'/ContainerXAOoLXz/getRouting_LoaderService.php';
require __DIR__.'/ContainerXAOoLXz/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerXAOoLXz/getErrorControllerService.php';
require __DIR__.'/ContainerXAOoLXz/getDoctrineMongodb_Odm_StopwatchCommandLoggerService.php';
require __DIR__.'/ContainerXAOoLXz/getDoctrineMongodb_Odm_PsrCommandLoggerService.php';
require __DIR__.'/ContainerXAOoLXz/getDoctrineMongodb_Odm_DefaultDocumentManagerService.php';
require __DIR__.'/ContainerXAOoLXz/getDoctrineMongodb_Odm_DefaultConnectionService.php';
require __DIR__.'/ContainerXAOoLXz/getDoctrineMongodb_Odm_CommandLoggerRegistryService.php';
require __DIR__.'/ContainerXAOoLXz/getDoctrineMongodbService.php';
require __DIR__.'/ContainerXAOoLXz/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerXAOoLXz/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerXAOoLXz/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerXAOoLXz/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerXAOoLXz/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerXAOoLXz/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerXAOoLXz/getDoctrine_Dbal_DefaultConnection_EventManagerService.php';
require __DIR__.'/ContainerXAOoLXz/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerXAOoLXz/getDoctrineService.php';
require __DIR__.'/ContainerXAOoLXz/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerXAOoLXz/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerXAOoLXz/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerXAOoLXz/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerXAOoLXz/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerXAOoLXz/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerXAOoLXz/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerXAOoLXz/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerXAOoLXz/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerXAOoLXz/getCache_SystemClearerService.php';
require __DIR__.'/ContainerXAOoLXz/getCache_SystemService.php';
require __DIR__.'/ContainerXAOoLXz/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerXAOoLXz/getCache_AppClearerService.php';
require __DIR__.'/ContainerXAOoLXz/getCache_AppService.php';
require __DIR__.'/ContainerXAOoLXz/getAnnotations_ReaderService.php';
require __DIR__.'/ContainerXAOoLXz/getAnnotations_CachedReaderService.php';
require __DIR__.'/ContainerXAOoLXz/getTemplateControllerService.php';
require __DIR__.'/ContainerXAOoLXz/getRedirectControllerService.php';
require __DIR__.'/ContainerXAOoLXz/getHomeControllerService.php';
require __DIR__.'/ContainerXAOoLXz/get_ServiceLocator_MGHEj8dService.php';
require __DIR__.'/ContainerXAOoLXz/get_ServiceLocator_KfbR3DYService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\DoctrineMongoDBBundle';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\HomeController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\ManagerRegistry';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\APM\CommandLoggerRegistry';
$classes[] = 'Doctrine\ODM\MongoDB\APM\CommandLogger';
$classes[] = 'MongoDB\Client';
$classes[] = 'Doctrine\ODM\MongoDB\DocumentManager';
$classes[] = 'Doctrine\ODM\MongoDB\Configuration';
$classes[] = 'Doctrine\ODM\MongoDB\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\ManagerConfigurator';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\APM\PSRCommandLogger';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\APM\StopwatchCommandLogger';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

$preloaded = Preloader::preload($classes);
require_once __DIR__.'/twig/e0/e0d9eeed430da1f4f64e6389d2622ec3db0d5f8ad8d1ba29d1a2654dd9e6ba5a.php';
require_once __DIR__.'/twig/cb/cbe4d79f2cfe56a70ae799399a03bffb4f5c1532e3e0fbdfb47391d5ce2de3ec.php';
require_once __DIR__.'/twig/63/63e333a614fdbd5af4566a4a2ec96d408c96bb3e88aa1712dcfd6cc78656d58e.php';
require_once __DIR__.'/twig/ad/adba19621958c367b37ea877b8297394ba49e1ecc31d80e9306795e4f75731e7.php';
require_once __DIR__.'/twig/bd/bdf381ba4b905f514e70150940c61062b419a92e64e2f4085e5d26aca4b89d91.php';
require_once __DIR__.'/twig/b2/b295f352264e93441c14b4d5588288ac7de1bee63761caa3ff1bbaa24e7bc21e.php';
require_once __DIR__.'/twig/5f/5ffe4138c0efc444f4748dfb4c92d74f877cf9080568903d7dc3c9ae3dc219e0.php';
require_once __DIR__.'/twig/04/0439d796f528db30c9acc7eefc0e9fd51898081a8e2b45b401bd5e841ad06061.php';

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$preloaded = Preloader::preload($classes, $preloaded);
