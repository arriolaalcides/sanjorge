<?php

namespace Proxies\__CG__\SanJorge\SanJorgeBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Items extends \SanJorge\SanJorgeBundle\Entity\Items implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setIdfactura($idfactura)
    {
        $this->__load();
        return parent::setIdfactura($idfactura);
    }

    public function getIdfactura()
    {
        $this->__load();
        return parent::getIdfactura();
    }

    public function setProducto($producto)
    {
        $this->__load();
        return parent::setProducto($producto);
    }

    public function getProducto()
    {
        $this->__load();
        return parent::getProducto();
    }

    public function setCantidad($cantidad)
    {
        $this->__load();
        return parent::setCantidad($cantidad);
    }

    public function getCantidad()
    {
        $this->__load();
        return parent::getCantidad();
    }

    public function setCostoUnitario($costoUnitario)
    {
        $this->__load();
        return parent::setCostoUnitario($costoUnitario);
    }

    public function getCostoUnitario()
    {
        $this->__load();
        return parent::getCostoUnitario();
    }

    public function setImpuestos($impuestos)
    {
        $this->__load();
        return parent::setImpuestos($impuestos);
    }

    public function getImpuestos()
    {
        $this->__load();
        return parent::getImpuestos();
    }

    public function setCostoTotal($costoTotal)
    {
        $this->__load();
        return parent::setCostoTotal($costoTotal);
    }

    public function getCostoTotal()
    {
        $this->__load();
        return parent::getCostoTotal();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'idfactura', 'producto', 'cantidad', 'costoUnitario', 'impuestos', 'costoTotal');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}