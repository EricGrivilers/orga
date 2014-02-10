<?php

namespace Proxies\__CG__\Caravane\Bundle\OrganicBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Client extends \Caravane\Bundle\OrganicBundle\Entity\Client implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'reference', 'clienttype', 'isowner', 'name', 'firstname', 'lastname', 'clienttitle', 'cietype', 'vat', 'address', 'number', 'zip', 'city', 'country', 'phone', 'phone2', 'mobile', 'fax', 'email', 'url', 'language', 'origin', 'insertdate', 'updatedate', 'public', 'jobid', 'userid', 'tents', 'jobs', 'offres', 'invoices');
        }

        return array('__isInitialized__', 'id', 'reference', 'clienttype', 'isowner', 'name', 'firstname', 'lastname', 'clienttitle', 'cietype', 'vat', 'address', 'number', 'zip', 'city', 'country', 'phone', 'phone2', 'mobile', 'fax', 'email', 'url', 'language', 'origin', 'insertdate', 'updatedate', 'public', 'jobid', 'userid', 'tents', 'jobs', 'offres', 'invoices');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Client $proxy) {
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
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
    public function setReference($reference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReference', array($reference));

        return parent::setReference($reference);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', array());

        return parent::getReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setClienttype($clienttype = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClienttype', array($clienttype));

        return parent::setClienttype($clienttype);
    }

    /**
     * {@inheritDoc}
     */
    public function getClienttype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClienttype', array());

        return parent::getClienttype();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsowner($isowner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsowner', array($isowner));

        return parent::setIsowner($isowner);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsowner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsowner', array());

        return parent::getIsowner();
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
    public function setFirstname($firstname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', array($firstname));

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', array());

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastname($lastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', array($lastname));

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', array());

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setClienttitle($clienttitle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClienttitle', array($clienttitle));

        return parent::setClienttitle($clienttitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getClienttitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClienttitle', array());

        return parent::getClienttitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setCietype($cietype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCietype', array($cietype));

        return parent::setCietype($cietype);
    }

    /**
     * {@inheritDoc}
     */
    public function getCietype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCietype', array());

        return parent::getCietype();
    }

    /**
     * {@inheritDoc}
     */
    public function setVat($vat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVat', array($vat));

        return parent::setVat($vat);
    }

    /**
     * {@inheritDoc}
     */
    public function getVat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVat', array());

        return parent::getVat();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', array($address));

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', array());

        return parent::getAddress();
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
    public function setZip($zip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZip', array($zip));

        return parent::setZip($zip);
    }

    /**
     * {@inheritDoc}
     */
    public function getZip()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZip', array());

        return parent::getZip();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', array($city));

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', array());

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($country)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', array($country));

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', array());

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', array($phone));

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', array());

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone2($phone2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone2', array($phone2));

        return parent::setPhone2($phone2);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone2', array());

        return parent::getPhone2();
    }

    /**
     * {@inheritDoc}
     */
    public function setMobile($mobile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMobile', array($mobile));

        return parent::setMobile($mobile);
    }

    /**
     * {@inheritDoc}
     */
    public function getMobile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMobile', array());

        return parent::getMobile();
    }

    /**
     * {@inheritDoc}
     */
    public function setFax($fax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFax', array($fax));

        return parent::setFax($fax);
    }

    /**
     * {@inheritDoc}
     */
    public function getFax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFax', array());

        return parent::getFax();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrl', array($url));

        return parent::setUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', array());

        return parent::getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setLanguage($language)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLanguage', array($language));

        return parent::setLanguage($language);
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguage', array());

        return parent::getLanguage();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrigin($origin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrigin', array($origin));

        return parent::setOrigin($origin);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrigin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrigin', array());

        return parent::getOrigin();
    }

    /**
     * {@inheritDoc}
     */
    public function setInsertdate($insertdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInsertdate', array($insertdate));

        return parent::setInsertdate($insertdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getInsertdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInsertdate', array());

        return parent::getInsertdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedate($updatedate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedate', array($updatedate));

        return parent::setUpdatedate($updatedate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedate', array());

        return parent::getUpdatedate();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublic($public)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublic', array($public));

        return parent::setPublic($public);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublic', array());

        return parent::getPublic();
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
    public function addTent(\Caravane\Bundle\OrganicBundle\Entity\Tent $tents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTent', array($tents));

        return parent::addTent($tents);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTent(\Caravane\Bundle\OrganicBundle\Entity\Tent $tents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTent', array($tents));

        return parent::removeTent($tents);
    }

    /**
     * {@inheritDoc}
     */
    public function getTents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTents', array());

        return parent::getTents();
    }

    /**
     * {@inheritDoc}
     */
    public function addJob(\Caravane\Bundle\OrganicBundle\Entity\Job $jobs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addJob', array($jobs));

        return parent::addJob($jobs);
    }

    /**
     * {@inheritDoc}
     */
    public function removeJob(\Caravane\Bundle\OrganicBundle\Entity\Job $jobs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeJob', array($jobs));

        return parent::removeJob($jobs);
    }

    /**
     * {@inheritDoc}
     */
    public function getJobs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJobs', array());

        return parent::getJobs();
    }

    /**
     * {@inheritDoc}
     */
    public function addOffre(\Caravane\Bundle\OrganicBundle\Entity\Offre $offres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOffre', array($offres));

        return parent::addOffre($offres);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOffre(\Caravane\Bundle\OrganicBundle\Entity\Offre $offres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOffre', array($offres));

        return parent::removeOffre($offres);
    }

    /**
     * {@inheritDoc}
     */
    public function getOffres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOffres', array());

        return parent::getOffres();
    }

    /**
     * {@inheritDoc}
     */
    public function addInvoice(\Caravane\Bundle\OrganicBundle\Entity\Invoice $invoices)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addInvoice', array($invoices));

        return parent::addInvoice($invoices);
    }

    /**
     * {@inheritDoc}
     */
    public function removeInvoice(\Caravane\Bundle\OrganicBundle\Entity\Invoice $invoices)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeInvoice', array($invoices));

        return parent::removeInvoice($invoices);
    }

    /**
     * {@inheritDoc}
     */
    public function getInvoices()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInvoices', array());

        return parent::getInvoices();
    }

    /**
     * {@inheritDoc}
     */
    public function validateClientType(\Symfony\Component\Validator\ExecutionContext $ec)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'validateClientType', array($ec));

        return parent::validateClientType($ec);
    }

}
