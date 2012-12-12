<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Cabinet extends \Entities\Cabinet implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setColocation($colocation)
    {
        $this->__load();
        return parent::setColocation($colocation);
    }

    public function getColocation()
    {
        $this->__load();
        return parent::getColocation();
    }

    public function setHeight($height)
    {
        $this->__load();
        return parent::setHeight($height);
    }

    public function getHeight()
    {
        $this->__load();
        return parent::getHeight();
    }

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function setNotes($notes)
    {
        $this->__load();
        return parent::setNotes($notes);
    }

    public function getNotes()
    {
        $this->__load();
        return parent::getNotes();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function addSwitche(\Entities\Switcher $switches)
    {
        $this->__load();
        return parent::addSwitche($switches);
    }

    public function removeSwitche(\Entities\Switcher $switches)
    {
        $this->__load();
        return parent::removeSwitche($switches);
    }

    public function getSwitches()
    {
        $this->__load();
        return parent::getSwitches();
    }

    public function addCustomerEquipment(\Entities\CustomerEquipment $customerEquipment)
    {
        $this->__load();
        return parent::addCustomerEquipment($customerEquipment);
    }

    public function removeCustomerEquipment(\Entities\CustomerEquipment $customerEquipment)
    {
        $this->__load();
        return parent::removeCustomerEquipment($customerEquipment);
    }

    public function getCustomerEquipment()
    {
        $this->__load();
        return parent::getCustomerEquipment();
    }

    public function setLocation(\Entities\Location $location = NULL)
    {
        $this->__load();
        return parent::setLocation($location);
    }

    public function getLocation()
    {
        $this->__load();
        return parent::getLocation();
    }

    public function setCololocation($cololocation)
    {
        $this->__load();
        return parent::setCololocation($cololocation);
    }

    public function getCololocation()
    {
        $this->__load();
        return parent::getCololocation();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'name', 'cololocation', 'height', 'type', 'notes', 'id', 'Switches', 'CustomerEquipment', 'Location');
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