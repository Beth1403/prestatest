<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf2090 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer310f4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties089d3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'getConnection', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'getMetadataFactory', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'getExpressionBuilder', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'beginTransaction', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'getCache', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->getCache();
    }

    public function transactional($func)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'transactional', array('func' => $func), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'wrapInTransaction', array('func' => $func), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'commit', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->commit();
    }

    public function rollback()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'rollback', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'getClassMetadata', array('className' => $className), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'createQuery', array('dql' => $dql), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'createNamedQuery', array('name' => $name), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'createQueryBuilder', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'flush', array('entity' => $entity), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'clear', array('entityName' => $entityName), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->clear($entityName);
    }

    public function close()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'close', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->close();
    }

    public function persist($entity)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'persist', array('entity' => $entity), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'remove', array('entity' => $entity), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'refresh', array('entity' => $entity), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'detach', array('entity' => $entity), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'merge', array('entity' => $entity), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'getRepository', array('entityName' => $entityName), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'contains', array('entity' => $entity), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'getEventManager', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'getConfiguration', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'isOpen', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'getUnitOfWork', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'getProxyFactory', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'initializeObject', array('obj' => $obj), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'getFilters', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'isFiltersStateClean', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'hasFilters', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return $this->valueHolderf2090->hasFilters();
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

        $instance->initializer310f4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf2090) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf2090 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf2090->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, '__get', ['name' => $name], $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        if (isset(self::$publicProperties089d3[$name])) {
            return $this->valueHolderf2090->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2090;

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

        $targetObject = $this->valueHolderf2090;
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
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2090;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf2090;
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
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, '__isset', array('name' => $name), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2090;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf2090;
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
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, '__unset', array('name' => $name), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2090;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf2090;
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
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, '__clone', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        $this->valueHolderf2090 = clone $this->valueHolderf2090;
    }

    public function __sleep()
    {
        $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, '__sleep', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;

        return array('valueHolderf2090');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer310f4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer310f4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer310f4 && ($this->initializer310f4->__invoke($valueHolderf2090, $this, 'initializeProxy', array(), $this->initializer310f4) || 1) && $this->valueHolderf2090 = $valueHolderf2090;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf2090;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf2090;
    }
}
