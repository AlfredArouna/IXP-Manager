<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Vlan extends \Entities\Vlan implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'name', 'number', 'rcvrfname', 'notes', 'id', 'VlanInterfaces', 'IPv4Addresses', 'IPv6Addresses', 'NetworkInfo', 'NetInfo', '' . "\0" . 'Entities\\Vlan' . "\0" . 'Infrastructure', 'private');
        }

        return array('__isInitialized__', 'name', 'number', 'rcvrfname', 'notes', 'id', 'VlanInterfaces', 'IPv4Addresses', 'IPv6Addresses', 'NetworkInfo', 'NetInfo', '' . "\0" . 'Entities\\Vlan' . "\0" . 'Infrastructure', 'private');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Vlan $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumber($number)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumber', array($number));

        return parent::setNumber($number);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumber', array());

        return parent::getNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setRcvrfname($rcvrfname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRcvrfname', array($rcvrfname));

        return parent::setRcvrfname($rcvrfname);
    }

    /**
     * {@inheritDoc}
     */
    public function getRcvrfname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRcvrfname', array());

        return parent::getRcvrfname();
    }

    /**
     * {@inheritDoc}
     */
    public function setNotes($notes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotes', array($notes));

        return parent::setNotes($notes);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotes', array());

        return parent::getNotes();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function addVlanInterface(\Entities\VlanInterface $vlanInterfaces)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVlanInterface', array($vlanInterfaces));

        return parent::addVlanInterface($vlanInterfaces);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVlanInterface(\Entities\VlanInterface $vlanInterfaces)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVlanInterface', array($vlanInterfaces));

        return parent::removeVlanInterface($vlanInterfaces);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlanInterfaces()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlanInterfaces', array());

        return parent::getVlanInterfaces();
    }

    /**
     * {@inheritDoc}
     */
    public function addIPv4Addresses(\Entities\IPv4Address $iPv4Addresses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIPv4Addresses', array($iPv4Addresses));

        return parent::addIPv4Addresses($iPv4Addresses);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIPv4Addresses(\Entities\IPv4Address $iPv4Addresses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIPv4Addresses', array($iPv4Addresses));

        return parent::removeIPv4Addresses($iPv4Addresses);
    }

    /**
     * {@inheritDoc}
     */
    public function getIPv4Addresses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIPv4Addresses', array());

        return parent::getIPv4Addresses();
    }

    /**
     * {@inheritDoc}
     */
    public function addIPv6Addresses(\Entities\IPv6Address $iPv6Addresses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIPv6Addresses', array($iPv6Addresses));

        return parent::addIPv6Addresses($iPv6Addresses);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIPv6Addresses(\Entities\IPv6Address $iPv6Addresses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIPv6Addresses', array($iPv6Addresses));

        return parent::removeIPv6Addresses($iPv6Addresses);
    }

    /**
     * {@inheritDoc}
     */
    public function getIPv6Addresses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIPv6Addresses', array());

        return parent::getIPv6Addresses();
    }

    /**
     * {@inheritDoc}
     */
    public function addNetworkInfo(\Entities\NetworkInfo $networkInfo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNetworkInfo', array($networkInfo));

        return parent::addNetworkInfo($networkInfo);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNetworkInfo(\Entities\NetworkInfo $networkInfo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNetworkInfo', array($networkInfo));

        return parent::removeNetworkInfo($networkInfo);
    }

    /**
     * {@inheritDoc}
     */
    public function getNetworkInfo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNetworkInfo', array());

        return parent::getNetworkInfo();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrivate($private)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrivate', array($private));

        return parent::setPrivate($private);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrivate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrivate', array());

        return parent::getPrivate();
    }

    /**
     * {@inheritDoc}
     */
    public function addNetInfo(\Entities\NetInfo $netInfo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNetInfo', array($netInfo));

        return parent::addNetInfo($netInfo);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNetInfo(\Entities\NetInfo $netInfo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNetInfo', array($netInfo));

        return parent::removeNetInfo($netInfo);
    }

    /**
     * {@inheritDoc}
     */
    public function getNetInfos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNetInfos', array());

        return parent::getNetInfos();
    }

    /**
     * {@inheritDoc}
     */
    public function getSubnetSize($protocol)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubnetSize', array($protocol));

        return parent::getSubnetSize($protocol);
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteServers($protocol)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRouteServers', array($protocol));

        return parent::getRouteServers($protocol);
    }

    /**
     * {@inheritDoc}
     */
    public function getDnsFile($protocol)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDnsFile', array($protocol));

        return parent::getDnsFile($protocol);
    }

    /**
     * {@inheritDoc}
     */
    public function getAS112Servers($protocol)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAS112Servers', array($protocol));

        return parent::getAS112Servers($protocol);
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteCollectors($protocol)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRouteCollectors', array($protocol));

        return parent::getRouteCollectors($protocol);
    }

    /**
     * {@inheritDoc}
     */
    public function getPingBeacons($protocol)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPingBeacons', array($protocol));

        return parent::getPingBeacons($protocol);
    }

    /**
     * {@inheritDoc}
     */
    public function loadNetInfo($property, $protocol, $index = 0)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'loadNetInfo', array($property, $protocol, $index));

        return parent::loadNetInfo($property, $protocol, $index);
    }

    /**
     * {@inheritDoc}
     */
    public function deleteNetInfo($property, $protocol, $index = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'deleteNetInfo', array($property, $protocol, $index));

        return parent::deleteNetInfo($property, $protocol, $index);
    }

    /**
     * {@inheritDoc}
     */
    public function hasNetInfo($property, $protocol, $index = 0)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasNetInfo', array($property, $protocol, $index));

        return parent::hasNetInfo($property, $protocol, $index);
    }

    /**
     * {@inheritDoc}
     */
    public function getNetInfo($property, $protocol, $index = 0)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNetInfo', array($property, $protocol, $index));

        return parent::getNetInfo($property, $protocol, $index);
    }

    /**
     * {@inheritDoc}
     */
    public function getIndexedNetInfo($property, $protocol, $withIndex = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIndexedNetInfo', array($property, $protocol, $withIndex));

        return parent::getIndexedNetInfo($property, $protocol, $withIndex);
    }

    /**
     * {@inheritDoc}
     */
    public function setNetInfo($property, $value, $protocol, $index = 0)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNetInfo', array($property, $value, $protocol, $index));

        return parent::setNetInfo($property, $value, $protocol, $index);
    }

    /**
     * {@inheritDoc}
     */
    public function addIndexedNetInfo($property, $value, $protocol)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIndexedNetInfo', array($property, $value, $protocol));

        return parent::addIndexedNetInfo($property, $value, $protocol);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssocNetInfo($property, $protocol, $index = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssocNetInfo', array($property, $protocol, $index));

        return parent::getAssocNetInfo($property, $protocol, $index);
    }

    /**
     * {@inheritDoc}
     */
    public function deleteAssocNetInfo($property, $protocol, $index = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'deleteAssocNetInfo', array($property, $protocol, $index));

        return parent::deleteAssocNetInfo($property, $protocol, $index);
    }

    /**
     * {@inheritDoc}
     */
    public function setInfrastructure(\Entities\Infrastructure $infrastructure = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInfrastructure', array($infrastructure));

        return parent::setInfrastructure($infrastructure);
    }

    /**
     * {@inheritDoc}
     */
    public function getInfrastructure()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInfrastructure', array());

        return parent::getInfrastructure();
    }

    /**
     * {@inheritDoc}
     */
    public function addIPv4Addresse(\Entities\IPv4Address $iPv4Addresses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIPv4Addresse', array($iPv4Addresses));

        return parent::addIPv4Addresse($iPv4Addresses);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIPv4Addresse(\Entities\IPv4Address $iPv4Addresses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIPv4Addresse', array($iPv4Addresses));

        return parent::removeIPv4Addresse($iPv4Addresses);
    }

    /**
     * {@inheritDoc}
     */
    public function addIPv6Addresse(\Entities\IPv6Address $iPv6Addresses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIPv6Addresse', array($iPv6Addresses));

        return parent::addIPv6Addresse($iPv6Addresses);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIPv6Addresse(\Entities\IPv6Address $iPv6Addresses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIPv6Addresse', array($iPv6Addresses));

        return parent::removeIPv6Addresse($iPv6Addresses);
    }

}
