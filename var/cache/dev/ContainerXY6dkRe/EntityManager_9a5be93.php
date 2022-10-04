<?php

namespace ContainerXY6dkRe;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf8a7b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4c1b3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9e04e = [
        
    ];

    public function getConnection()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'getConnection', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'getMetadataFactory', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'getExpressionBuilder', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'beginTransaction', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'getCache', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'transactional', array('func' => $func), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'commit', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->commit();
    }

    public function rollback()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'rollback', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'getClassMetadata', array('className' => $className), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'createQuery', array('dql' => $dql), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'createNamedQuery', array('name' => $name), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'createQueryBuilder', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'flush', array('entity' => $entity), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'clear', array('entityName' => $entityName), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->clear($entityName);
    }

    public function close()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'close', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->close();
    }

    public function persist($entity)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'persist', array('entity' => $entity), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'remove', array('entity' => $entity), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'refresh', array('entity' => $entity), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'detach', array('entity' => $entity), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'merge', array('entity' => $entity), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'contains', array('entity' => $entity), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'getEventManager', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'getConfiguration', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'isOpen', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'getUnitOfWork', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'getProxyFactory', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'initializeObject', array('obj' => $obj), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'getFilters', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'isFiltersStateClean', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'hasFilters', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return $this->valueHolderf8a7b->hasFilters();
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

        $instance->initializer4c1b3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf8a7b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf8a7b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf8a7b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, '__get', ['name' => $name], $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        if (isset(self::$publicProperties9e04e[$name])) {
            return $this->valueHolderf8a7b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8a7b;

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

        $targetObject = $this->valueHolderf8a7b;
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
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8a7b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf8a7b;
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
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, '__isset', array('name' => $name), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8a7b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf8a7b;
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
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, '__unset', array('name' => $name), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8a7b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf8a7b;
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
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, '__clone', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        $this->valueHolderf8a7b = clone $this->valueHolderf8a7b;
    }

    public function __sleep()
    {
        $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, '__sleep', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;

        return array('valueHolderf8a7b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4c1b3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4c1b3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4c1b3 && ($this->initializer4c1b3->__invoke($valueHolderf8a7b, $this, 'initializeProxy', array(), $this->initializer4c1b3) || 1) && $this->valueHolderf8a7b = $valueHolderf8a7b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf8a7b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf8a7b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
