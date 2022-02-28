<?php

namespace ContainerMgDmBlN;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder80565 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerccc9d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56e43 = [
        
    ];

    public function getConnection()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'getConnection', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'getMetadataFactory', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'getExpressionBuilder', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'beginTransaction', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'getCache', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->getCache();
    }

    public function transactional($func)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'transactional', array('func' => $func), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'wrapInTransaction', array('func' => $func), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'commit', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->commit();
    }

    public function rollback()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'rollback', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'getClassMetadata', array('className' => $className), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'createQuery', array('dql' => $dql), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'createNamedQuery', array('name' => $name), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'createQueryBuilder', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'flush', array('entity' => $entity), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'clear', array('entityName' => $entityName), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->clear($entityName);
    }

    public function close()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'close', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->close();
    }

    public function persist($entity)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'persist', array('entity' => $entity), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'remove', array('entity' => $entity), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'refresh', array('entity' => $entity), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'detach', array('entity' => $entity), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'merge', array('entity' => $entity), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'getRepository', array('entityName' => $entityName), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'contains', array('entity' => $entity), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'getEventManager', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'getConfiguration', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'isOpen', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'getUnitOfWork', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'getProxyFactory', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'initializeObject', array('obj' => $obj), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'getFilters', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'isFiltersStateClean', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'hasFilters', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return $this->valueHolder80565->hasFilters();
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

        $instance->initializerccc9d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder80565) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder80565 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder80565->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, '__get', ['name' => $name], $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        if (isset(self::$publicProperties56e43[$name])) {
            return $this->valueHolder80565->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder80565;

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

        $targetObject = $this->valueHolder80565;
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
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder80565;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder80565;
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
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, '__isset', array('name' => $name), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder80565;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder80565;
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
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, '__unset', array('name' => $name), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder80565;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder80565;
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
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, '__clone', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        $this->valueHolder80565 = clone $this->valueHolder80565;
    }

    public function __sleep()
    {
        $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, '__sleep', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;

        return array('valueHolder80565');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerccc9d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerccc9d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerccc9d && ($this->initializerccc9d->__invoke($valueHolder80565, $this, 'initializeProxy', array(), $this->initializerccc9d) || 1) && $this->valueHolder80565 = $valueHolder80565;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder80565;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder80565;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
