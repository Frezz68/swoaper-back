<?php

namespace Container4U5iGAO;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera2458 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8ef79 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc2fd8 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'getConnection', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'getMetadataFactory', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'getExpressionBuilder', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'beginTransaction', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'getCache', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'transactional', array('func' => $func), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'commit', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->commit();
    }

    public function rollback()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'rollback', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'getClassMetadata', array('className' => $className), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'createQuery', array('dql' => $dql), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'createNamedQuery', array('name' => $name), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'createQueryBuilder', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'flush', array('entity' => $entity), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'clear', array('entityName' => $entityName), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->clear($entityName);
    }

    public function close()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'close', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->close();
    }

    public function persist($entity)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'persist', array('entity' => $entity), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'remove', array('entity' => $entity), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'refresh', array('entity' => $entity), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'detach', array('entity' => $entity), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'merge', array('entity' => $entity), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'contains', array('entity' => $entity), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'getEventManager', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'getConfiguration', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'isOpen', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'getUnitOfWork', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'getProxyFactory', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'initializeObject', array('obj' => $obj), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'getFilters', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'isFiltersStateClean', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'hasFilters', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return $this->valueHoldera2458->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer8ef79 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldera2458) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera2458 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera2458->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, '__get', ['name' => $name], $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        if (isset(self::$publicPropertiesc2fd8[$name])) {
            return $this->valueHoldera2458->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2458;

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

        $targetObject = $this->valueHoldera2458;
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
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2458;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera2458;
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
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, '__isset', array('name' => $name), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2458;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera2458;
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
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, '__unset', array('name' => $name), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2458;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera2458;
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
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, '__clone', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        $this->valueHoldera2458 = clone $this->valueHoldera2458;
    }

    public function __sleep()
    {
        $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, '__sleep', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;

        return array('valueHoldera2458');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8ef79 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8ef79;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8ef79 && ($this->initializer8ef79->__invoke($valueHoldera2458, $this, 'initializeProxy', array(), $this->initializer8ef79) || 1) && $this->valueHoldera2458 = $valueHoldera2458;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera2458;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera2458;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
