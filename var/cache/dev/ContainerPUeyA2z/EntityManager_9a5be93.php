<?php

namespace ContainerPUeyA2z;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd836f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereb882 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesef0d9 = [
        
    ];

    public function getConnection()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'getConnection', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'getMetadataFactory', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'getExpressionBuilder', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'beginTransaction', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'getCache', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->getCache();
    }

    public function transactional($func)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'transactional', array('func' => $func), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'wrapInTransaction', array('func' => $func), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'commit', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->commit();
    }

    public function rollback()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'rollback', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'getClassMetadata', array('className' => $className), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'createQuery', array('dql' => $dql), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'createNamedQuery', array('name' => $name), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'createQueryBuilder', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'flush', array('entity' => $entity), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'clear', array('entityName' => $entityName), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->clear($entityName);
    }

    public function close()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'close', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->close();
    }

    public function persist($entity)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'persist', array('entity' => $entity), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'remove', array('entity' => $entity), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'refresh', array('entity' => $entity), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'detach', array('entity' => $entity), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'merge', array('entity' => $entity), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'getRepository', array('entityName' => $entityName), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'contains', array('entity' => $entity), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'getEventManager', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'getConfiguration', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'isOpen', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'getUnitOfWork', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'getProxyFactory', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'initializeObject', array('obj' => $obj), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'getFilters', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'isFiltersStateClean', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'hasFilters', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return $this->valueHolderd836f->hasFilters();
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

        $instance->initializereb882 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderd836f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd836f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd836f->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, '__get', ['name' => $name], $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        if (isset(self::$publicPropertiesef0d9[$name])) {
            return $this->valueHolderd836f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd836f;

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

        $targetObject = $this->valueHolderd836f;
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
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd836f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd836f;
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
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, '__isset', array('name' => $name), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd836f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd836f;
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
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, '__unset', array('name' => $name), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd836f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd836f;
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
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, '__clone', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        $this->valueHolderd836f = clone $this->valueHolderd836f;
    }

    public function __sleep()
    {
        $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, '__sleep', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;

        return array('valueHolderd836f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializereb882 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializereb882;
    }

    public function initializeProxy() : bool
    {
        return $this->initializereb882 && ($this->initializereb882->__invoke($valueHolderd836f, $this, 'initializeProxy', array(), $this->initializereb882) || 1) && $this->valueHolderd836f = $valueHolderd836f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd836f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd836f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
