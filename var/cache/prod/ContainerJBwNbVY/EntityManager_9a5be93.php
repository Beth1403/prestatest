<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5dcb5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer28ee0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb511a = [
        
    ];

    public function getConnection()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'getConnection', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'getMetadataFactory', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'getExpressionBuilder', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'beginTransaction', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'getCache', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->getCache();
    }

    public function transactional($func)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'transactional', array('func' => $func), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'wrapInTransaction', array('func' => $func), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'commit', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->commit();
    }

    public function rollback()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'rollback', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'getClassMetadata', array('className' => $className), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'createQuery', array('dql' => $dql), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'createNamedQuery', array('name' => $name), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'createQueryBuilder', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'flush', array('entity' => $entity), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'clear', array('entityName' => $entityName), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->clear($entityName);
    }

    public function close()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'close', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->close();
    }

    public function persist($entity)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'persist', array('entity' => $entity), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'remove', array('entity' => $entity), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'refresh', array('entity' => $entity), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'detach', array('entity' => $entity), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'merge', array('entity' => $entity), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'getRepository', array('entityName' => $entityName), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'contains', array('entity' => $entity), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'getEventManager', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'getConfiguration', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'isOpen', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'getUnitOfWork', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'getProxyFactory', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'initializeObject', array('obj' => $obj), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'getFilters', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'isFiltersStateClean', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'hasFilters', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return $this->valueHolder5dcb5->hasFilters();
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

        $instance->initializer28ee0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5dcb5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5dcb5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5dcb5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, '__get', ['name' => $name], $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        if (isset(self::$publicPropertiesb511a[$name])) {
            return $this->valueHolder5dcb5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5dcb5;

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

        $targetObject = $this->valueHolder5dcb5;
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
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5dcb5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5dcb5;
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
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, '__isset', array('name' => $name), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5dcb5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5dcb5;
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
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, '__unset', array('name' => $name), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5dcb5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5dcb5;
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
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, '__clone', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        $this->valueHolder5dcb5 = clone $this->valueHolder5dcb5;
    }

    public function __sleep()
    {
        $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, '__sleep', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;

        return array('valueHolder5dcb5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer28ee0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer28ee0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer28ee0 && ($this->initializer28ee0->__invoke($valueHolder5dcb5, $this, 'initializeProxy', array(), $this->initializer28ee0) || 1) && $this->valueHolder5dcb5 = $valueHolder5dcb5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5dcb5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5dcb5;
    }
}
