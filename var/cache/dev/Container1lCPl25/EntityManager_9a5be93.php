<?php

namespace Container1lCPl25;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb1377 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2462c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9abbc = [
        
    ];

    public function getConnection()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'getConnection', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'getMetadataFactory', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'getExpressionBuilder', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'beginTransaction', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'getCache', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'transactional', array('func' => $func), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'commit', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->commit();
    }

    public function rollback()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'rollback', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'getClassMetadata', array('className' => $className), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'createQuery', array('dql' => $dql), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'createNamedQuery', array('name' => $name), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'createQueryBuilder', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'flush', array('entity' => $entity), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'clear', array('entityName' => $entityName), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->clear($entityName);
    }

    public function close()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'close', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->close();
    }

    public function persist($entity)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'persist', array('entity' => $entity), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'remove', array('entity' => $entity), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'refresh', array('entity' => $entity), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'detach', array('entity' => $entity), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'merge', array('entity' => $entity), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'contains', array('entity' => $entity), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'getEventManager', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'getConfiguration', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'isOpen', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'getUnitOfWork', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'getProxyFactory', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'initializeObject', array('obj' => $obj), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'getFilters', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'isFiltersStateClean', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'hasFilters', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return $this->valueHolderb1377->hasFilters();
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

        $instance->initializer2462c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb1377) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb1377 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb1377->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, '__get', ['name' => $name], $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        if (isset(self::$publicProperties9abbc[$name])) {
            return $this->valueHolderb1377->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb1377;

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

        $targetObject = $this->valueHolderb1377;
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
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb1377;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb1377;
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
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, '__isset', array('name' => $name), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb1377;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb1377;
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
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, '__unset', array('name' => $name), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb1377;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb1377;
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
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, '__clone', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        $this->valueHolderb1377 = clone $this->valueHolderb1377;
    }

    public function __sleep()
    {
        $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, '__sleep', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;

        return array('valueHolderb1377');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2462c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2462c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2462c && ($this->initializer2462c->__invoke($valueHolderb1377, $this, 'initializeProxy', array(), $this->initializer2462c) || 1) && $this->valueHolderb1377 = $valueHolderb1377;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb1377;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb1377;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
