<?php

namespace Proxies\__CG__\Caravane\Bundle\OrganicBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Planning extends \Caravane\Bundle\OrganicBundle\Entity\Planning implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'planningtype', 'startdate', 'enddate', 'etat', 'userid', 'jobid', 'offreid');
        }

        return array('__isInitialized__', 'id', 'planningtype', 'startdate', 'enddate', 'etat', 'userid', 'jobid', 'offreid');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Planning $proxy) {
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
    public function setPlanningtype($planningtype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlanningtype', array($planningtype));

        return parent::setPlanningtype($planningtype);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlanningtype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlanningtype', array());

        return parent::getPlanningtype();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartdate($startdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartdate', array($startdate));

        return parent::setStartdate($startdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartdate', array());

        return parent::getStartdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnddate($enddate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnddate', array($enddate));

        return parent::setEnddate($enddate);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnddate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnddate', array());

        return parent::getEnddate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', array($etat));

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', array());

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserid(\Caravane\UserBundle\Entity\User $userid = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserid', array($userid));

        return parent::setUserid($userid);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserid', array());

        return parent::getUserid();
    }

    /**
     * {@inheritDoc}
     */
    public function setJobid(\Caravane\Bundle\OrganicBundle\Entity\Job $jobid = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJobid', array($jobid));

        return parent::setJobid($jobid);
    }

    /**
     * {@inheritDoc}
     */
    public function getJobid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJobid', array());

        return parent::getJobid();
    }

    /**
     * {@inheritDoc}
     */
    public function setOffreid(\Caravane\Bundle\OrganicBundle\Entity\Offre $offreid = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOffreid', array($offreid));

        return parent::setOffreid($offreid);
    }

    /**
     * {@inheritDoc}
     */
    public function getOffreid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOffreid', array());

        return parent::getOffreid();
    }

}
