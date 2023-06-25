<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderc7a64 = null;
    private $initializer2591c = null;
    private static $publicProperties5a9ad = [
        
    ];
    public function getConnection()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'getConnection', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'getMetadataFactory', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'getExpressionBuilder', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'beginTransaction', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'getCache', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->getCache();
    }
    public function transactional($func)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'transactional', array('func' => $func), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'commit', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->commit();
    }
    public function rollback()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'rollback', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'getClassMetadata', array('className' => $className), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'createQuery', array('dql' => $dql), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'createNamedQuery', array('name' => $name), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'createQueryBuilder', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'flush', array('entity' => $entity), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'clear', array('entityName' => $entityName), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->clear($entityName);
    }
    public function close()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'close', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->close();
    }
    public function persist($entity)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'persist', array('entity' => $entity), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'remove', array('entity' => $entity), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'refresh', array('entity' => $entity), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'detach', array('entity' => $entity), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'merge', array('entity' => $entity), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'contains', array('entity' => $entity), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'getEventManager', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'getConfiguration', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'isOpen', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'getUnitOfWork', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'getProxyFactory', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'initializeObject', array('obj' => $obj), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'getFilters', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'isFiltersStateClean', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'hasFilters', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return $this->valueHolderc7a64->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer2591c = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderc7a64) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc7a64 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderc7a64->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, '__get', ['name' => $name], $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        if (isset(self::$publicProperties5a9ad[$name])) {
            return $this->valueHolderc7a64->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7a64;
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
        $targetObject = $this->valueHolderc7a64;
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
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7a64;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderc7a64;
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
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, '__isset', array('name' => $name), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7a64;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderc7a64;
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
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, '__unset', array('name' => $name), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7a64;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderc7a64;
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
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, '__clone', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        $this->valueHolderc7a64 = clone $this->valueHolderc7a64;
    }
    public function __sleep()
    {
        $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, '__sleep', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
        return array('valueHolderc7a64');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2591c = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2591c;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer2591c && ($this->initializer2591c->__invoke($valueHolderc7a64, $this, 'initializeProxy', array(), $this->initializer2591c) || 1) && $this->valueHolderc7a64 = $valueHolderc7a64;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc7a64;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc7a64;
    }
}
