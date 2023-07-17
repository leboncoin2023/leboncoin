<?php

namespace MongoDBODMProxies\__PM__\App\Document\Auctions;

class Generatedf0576a23eef7b907d851098a6db7e45b extends \App\Document\Auctions implements \ProxyManager\Proxy\GhostObjectInterface
{
    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer22cc9 = null;

    /**
     * @var bool tracks initialization status - true while the object is initializing
     */
    private $initializationTracker67e73 = false;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6ebdd = [
        
    ];

    /**
     * @var array[][] visibility and default value of defined properties, indexed by
     * property name and class name
     */
    private static $privatePropertiesb3619 = [
        'title' => [
            'App\\Document\\Auctions' => true,
        ],
        'category' => [
            'App\\Document\\Auctions' => true,
        ],
        'description' => [
            'App\\Document\\Auctions' => true,
        ],
        'subcategory' => [
            'App\\Document\\Auctions' => true,
        ],
        'start_price' => [
            'App\\Document\\Auctions' => true,
        ],
        'sold_price' => [
            'App\\Document\\Auctions' => true,
        ],
        'reserve_price' => [
            'App\\Document\\Auctions' => true,
        ],
        'start_date' => [
            'App\\Document\\Auctions' => true,
        ],
        'duration' => [
            'App\\Document\\Auctions' => true,
        ],
        'delivery_mode' => [
            'App\\Document\\Auctions' => true,
        ],
        'picture' => [
            'App\\Document\\Auctions' => true,
        ],
        'video' => [
            'App\\Document\\Auctions' => true,
        ],
        'localisation' => [
            'App\\Document\\Auctions' => true,
        ],
        'seller_id' => [
            'App\\Document\\Auctions' => true,
        ],
        'buyer_id' => [
            'App\\Document\\Auctions' => true,
        ],
    ];

    /**
     * @var string[][] declaring class name of defined protected properties, indexed by
     * property name
     */
    private static $protectedPropertiesc15b2 = [
        
    ];

    private static $signaturef0576a23eef7b907d851098a6db7e45b = 'YTo0OntzOjk6ImNsYXNzTmFtZSI7czoyMToiQXBwXERvY3VtZW50XEF1Y3Rpb25zIjtzOjc6ImZhY3RvcnkiO3M6NDQ6IlByb3h5TWFuYWdlclxGYWN0b3J5XExhenlMb2FkaW5nR2hvc3RGYWN0b3J5IjtzOjE5OiJwcm94eU1hbmFnZXJWZXJzaW9uIjtzOjQ4OiJ2MS4wLjE2QGVjYWRiZGM5MDUyZTRhZDA4YzYwYzhhMDIyNjg3MTJlNTA0MjdmN2MiO3M6MTI6InByb3h5T3B0aW9ucyI7YToxOntzOjE3OiJza2lwcGVkUHJvcGVydGllcyI7YToxOntpOjA7czoyNToiAEFwcFxEb2N1bWVudFxBdWN0aW9ucwBpZCI7fX19';

    /**
     * Triggers initialization logic for this ghost object
     *
     * @param string  $methodName
     * @param mixed[] $parameters
     *
     * @return mixed
     */
    private function callInitializer6c7a1($methodName, array $parameters)
    {
        if ($this->initializationTracker67e73 || ! $this->initializer22cc9) {
            return;
        }

        $this->initializationTracker67e73 = true;




        $nonReferenceableProperties = new class() {
            public ?string $title_on_App_Document_Auctions;
            public ?string $category_on_App_Document_Auctions;
            public ?string $description_on_App_Document_Auctions;
            public ?string $subcategory_on_App_Document_Auctions;
            public ?string $start_price_on_App_Document_Auctions;
            public ?string $sold_price_on_App_Document_Auctions;
            public ?string $reserve_price_on_App_Document_Auctions;
            public ?string $start_date_on_App_Document_Auctions;
            public ?string $duration_on_App_Document_Auctions;
            public ?string $delivery_mode_on_App_Document_Auctions;
            public ?string $picture_on_App_Document_Auctions;
            public ?string $video_on_App_Document_Auctions;
            public ?string $localisation_on_App_Document_Auctions;
            public ?string $seller_id_on_App_Document_Auctions;
            public ?string $buyer_id_on_App_Document_Auctions;
        };
        $properties = [
            '' . "\0" . 'App\\Document\\Auctions' . "\0" . 'title' => & $nonReferenceableProperties->title_on_App_Document_Auctions,
            '' . "\0" . 'App\\Document\\Auctions' . "\0" . 'category' => & $nonReferenceableProperties->category_on_App_Document_Auctions,
            '' . "\0" . 'App\\Document\\Auctions' . "\0" . 'description' => & $nonReferenceableProperties->description_on_App_Document_Auctions,
            '' . "\0" . 'App\\Document\\Auctions' . "\0" . 'subcategory' => & $nonReferenceableProperties->subcategory_on_App_Document_Auctions,
            '' . "\0" . 'App\\Document\\Auctions' . "\0" . 'start_price' => & $nonReferenceableProperties->start_price_on_App_Document_Auctions,
            '' . "\0" . 'App\\Document\\Auctions' . "\0" . 'sold_price' => & $nonReferenceableProperties->sold_price_on_App_Document_Auctions,
            '' . "\0" . 'App\\Document\\Auctions' . "\0" . 'reserve_price' => & $nonReferenceableProperties->reserve_price_on_App_Document_Auctions,
            '' . "\0" . 'App\\Document\\Auctions' . "\0" . 'start_date' => & $nonReferenceableProperties->start_date_on_App_Document_Auctions,
            '' . "\0" . 'App\\Document\\Auctions' . "\0" . 'duration' => & $nonReferenceableProperties->duration_on_App_Document_Auctions,
            '' . "\0" . 'App\\Document\\Auctions' . "\0" . 'delivery_mode' => & $nonReferenceableProperties->delivery_mode_on_App_Document_Auctions,
            '' . "\0" . 'App\\Document\\Auctions' . "\0" . 'picture' => & $nonReferenceableProperties->picture_on_App_Document_Auctions,
            '' . "\0" . 'App\\Document\\Auctions' . "\0" . 'video' => & $nonReferenceableProperties->video_on_App_Document_Auctions,
            '' . "\0" . 'App\\Document\\Auctions' . "\0" . 'localisation' => & $nonReferenceableProperties->localisation_on_App_Document_Auctions,
            '' . "\0" . 'App\\Document\\Auctions' . "\0" . 'seller_id' => & $nonReferenceableProperties->seller_id_on_App_Document_Auctions,
            '' . "\0" . 'App\\Document\\Auctions' . "\0" . 'buyer_id' => & $nonReferenceableProperties->buyer_id_on_App_Document_Auctions,
        ];



        $result = $this->initializer22cc9->__invoke($this, $methodName, $parameters, $this->initializer22cc9, $properties);
        static $cacheAssignApp_Document_Auctions;

        $cacheAssignApp_Document_Auctions ?? $cacheAssignApp_Document_Auctions = \Closure::bind(function ($instance, $nonReferenceableProperties) {
            isset($nonReferenceableProperties->title_on_App_Document_Auctions) && $instance->title = $nonReferenceableProperties->title_on_App_Document_Auctions;
            isset($nonReferenceableProperties->category_on_App_Document_Auctions) && $instance->category = $nonReferenceableProperties->category_on_App_Document_Auctions;
            isset($nonReferenceableProperties->description_on_App_Document_Auctions) && $instance->description = $nonReferenceableProperties->description_on_App_Document_Auctions;
            isset($nonReferenceableProperties->subcategory_on_App_Document_Auctions) && $instance->subcategory = $nonReferenceableProperties->subcategory_on_App_Document_Auctions;
            isset($nonReferenceableProperties->start_price_on_App_Document_Auctions) && $instance->start_price = $nonReferenceableProperties->start_price_on_App_Document_Auctions;
            isset($nonReferenceableProperties->sold_price_on_App_Document_Auctions) && $instance->sold_price = $nonReferenceableProperties->sold_price_on_App_Document_Auctions;
            isset($nonReferenceableProperties->reserve_price_on_App_Document_Auctions) && $instance->reserve_price = $nonReferenceableProperties->reserve_price_on_App_Document_Auctions;
            isset($nonReferenceableProperties->start_date_on_App_Document_Auctions) && $instance->start_date = $nonReferenceableProperties->start_date_on_App_Document_Auctions;
            isset($nonReferenceableProperties->duration_on_App_Document_Auctions) && $instance->duration = $nonReferenceableProperties->duration_on_App_Document_Auctions;
            isset($nonReferenceableProperties->delivery_mode_on_App_Document_Auctions) && $instance->delivery_mode = $nonReferenceableProperties->delivery_mode_on_App_Document_Auctions;
            isset($nonReferenceableProperties->picture_on_App_Document_Auctions) && $instance->picture = $nonReferenceableProperties->picture_on_App_Document_Auctions;
            isset($nonReferenceableProperties->video_on_App_Document_Auctions) && $instance->video = $nonReferenceableProperties->video_on_App_Document_Auctions;
            isset($nonReferenceableProperties->localisation_on_App_Document_Auctions) && $instance->localisation = $nonReferenceableProperties->localisation_on_App_Document_Auctions;
            isset($nonReferenceableProperties->seller_id_on_App_Document_Auctions) && $instance->seller_id = $nonReferenceableProperties->seller_id_on_App_Document_Auctions;
            isset($nonReferenceableProperties->buyer_id_on_App_Document_Auctions) && $instance->buyer_id = $nonReferenceableProperties->buyer_id_on_App_Document_Auctions;
        }, null, 'App\\Document\\Auctions');

        $cacheAssignApp_Document_Auctions($this, $nonReferenceableProperties);
        $this->initializationTracker67e73 = false;

        return $result;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\App\Document\Auctions $instance) {
            unset($instance->title, $instance->category, $instance->description, $instance->subcategory, $instance->start_price, $instance->sold_price, $instance->reserve_price, $instance->start_date, $instance->duration, $instance->delivery_mode, $instance->picture, $instance->video, $instance->localisation, $instance->seller_id, $instance->buyer_id);
        }, $instance, 'App\\Document\\Auctions')->__invoke($instance);

        $instance->initializer22cc9 = $initializer;

        return $instance;
    }

    public function & __get($name)
    {
        $this->initializer22cc9 && ! $this->initializationTracker67e73 && $this->callInitializer6c7a1('__get', array('name' => $name));

        if (isset(self::$publicProperties6ebdd[$name])) {
            return $this->$name;
        }

        if (isset(self::$protectedPropertiesc15b2[$name])) {
            if ($this->initializationTracker67e73) {
                return $this->$name;
            }

            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesc15b2[$name];

            if ($object instanceof $expectedType) {
                return $this->$name;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return $this->$name;
            }
        } elseif (isset(self::$privatePropertiesb3619[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiesb3619[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $class);

                return $accessor($this);
            }

            if ($this->initializationTracker67e73 || 'ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiesb3619[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer22cc9 && $this->callInitializer6c7a1('__set', array('name' => $name, 'value' => $value));

        if (isset(self::$publicProperties6ebdd[$name])) {
            return ($this->$name = $value);
        }

        if (isset(self::$protectedPropertiesc15b2[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesc15b2[$name];

            if ($object instanceof $expectedType) {
                return ($this->$name = $value);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return ($this->$name = $value);
            }
        } elseif (isset(self::$privatePropertiesb3619[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiesb3619[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $class);

                return $accessor($this, $value);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiesb3619[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $tmpClass);

                return $accessor($this, $value);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer22cc9 && $this->callInitializer6c7a1('__isset', array('name' => $name));

        if (isset(self::$publicProperties6ebdd[$name])) {
            return isset($this->$name);
        }

        if (isset(self::$protectedPropertiesc15b2[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesc15b2[$name];

            if ($object instanceof $expectedType) {
                return isset($this->$name);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType)) {
                return isset($this->$name);
            }
        } else {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiesb3619[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiesb3619[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            return isset($targetObject->$name);
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer22cc9 && $this->callInitializer6c7a1('__unset', array('name' => $name));

        if (isset(self::$publicProperties6ebdd[$name])) {
            unset($this->$name);

            return;
        }

        if (isset(self::$protectedPropertiesc15b2[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesc15b2[$name];

            if ($object instanceof $expectedType) {
                unset($this->$name);

                return;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                unset($this->$name);

                return;
            }
        } elseif (isset(self::$privatePropertiesb3619[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiesb3619[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiesb3619[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer22cc9 && $this->callInitializer6c7a1('__clone', []);
    }

    public function __sleep()
    {
        $this->initializer22cc9 && $this->callInitializer6c7a1('__sleep', []);

        return array_keys((array) $this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer22cc9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer22cc9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer22cc9 && $this->callInitializer6c7a1('initializeProxy', []);
    }

    public function isProxyInitialized() : bool
    {
        return ! $this->initializer22cc9;
    }
}
