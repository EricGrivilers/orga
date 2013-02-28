<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="Caravane\Bundle\OrganicBundle\Entity\ClientRepository")
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=50, nullable=false)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="clientType", type="string", length=20, nullable=false)
     */
    private $clienttype="cie";

    /**
     * @var boolean
     *
     * @ORM\Column(name="isOwner", type="boolean", nullable=true)
     */
    private $isowner;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=50, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=50, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="clientTitle", type="string", length=20, nullable=true)
     */
    private $clienttitle;

    /**
     * @var string
     *
     * @ORM\Column(name="cieType", type="string", length=10, nullable=true)
     */
    private $cietype;

    /**
     * @var string
     *
     * @ORM\Column(name="vat", type="string", length=50, nullable=true)
     */
    private $vat;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=10, nullable=true)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=10, nullable=true)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=120, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=120, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=30, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="phone2", type="string", length=30, nullable=true)
     */
    private $phone2;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=30, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=30, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=120, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=2, nullable=true)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="origin", type="string", length=255, nullable=true)
     */
    private $origin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="insertDate", type="datetime", nullable=true)
     */
    private $insertdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateDate", type="datetime", nullable=false)
     */
    private $updatedate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="public", type="boolean", nullable=true)
     */
    private $public;

    /**
     * @var \Job
     *
     * @ORM\ManyToOne(targetEntity="Job")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jobId", referencedColumnName="id")
     * })
     */
    private $jobid;



    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userId", referencedColumnName="id")
     * })
     */
    private $userid;

    /**
    * @ORM\OneToMany(targetEntity="tent", mappedBy="ownerid")
    *
    */
    private $tents;

    /**
    * @ORM\OneToMany(targetEntity="job", mappedBy="clientid")
    *
    */
     private $jobs;

    /**
    * @ORM\OneToMany(targetEntity="offre", mappedBy="clientid")
    *
    */
     private $offres;

    /**
    * @ORM\OneToMany(targetEntity="invoice", mappedBy="clientid")
    *
    */
     private $invoices;


    public function __toString() {
        return $this->getName();
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Client
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set clienttype
     *
     * @param string $clienttype
     * @return Client
     */
    public function setClienttype($clienttype)
    {
        $this->clienttype = $clienttype;

        return $this;
    }

    /**
     * Get clienttype
     *
     * @return string
     */
    public function getClienttype()
    {
        return $this->clienttype;
    }

    /**
     * Set isowner
     *
     * @param boolean $isowner
     * @return Client
     */
    public function setIsowner($isowner)
    {
        $this->isowner = $isowner;

        return $this;
    }

    /**
     * Get isowner
     *
     * @return boolean
     */
    public function getIsowner()
    {
        return $this->isowner;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Client
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        if($this->clienttype=='part') {
            return $this->lastname." ".$this->firstname;
        }
        return $this->name;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Client
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Client
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set clienttitle
     *
     * @param string $clienttitle
     * @return Client
     */
    public function setClienttitle($clienttitle)
    {
        $this->clienttitle = $clienttitle;

        return $this;
    }

    /**
     * Get clienttitle
     *
     * @return string
     */
    public function getClienttitle()
    {
        return $this->clienttitle;
    }

    /**
     * Set cietype
     *
     * @param string $cietype
     * @return Client
     */
    public function setCietype($cietype)
    {
        $this->cietype = $cietype;

        return $this;
    }

    /**
     * Get cietype
     *
     * @return string
     */
    public function getCietype()
    {
        return $this->cietype;
    }

    /**
     * Set vat
     *
     * @param string $vat
     * @return Client
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return string
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Client
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return Client
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set zip
     *
     * @param string $zip
     * @return Client
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Client
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Client
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Client
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phone2
     *
     * @param string $phone2
     * @return Client
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * Get phone2
     *
     * @return string
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Client
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Client
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Client
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Client
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set origin
     *
     * @param string $origin
     * @return Client
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set insertdate
     *
     * @param \DateTime $insertdate
     * @return Client
     */
    public function setInsertdate($insertdate)
    {
        $this->insertdate = $insertdate;

        return $this;
    }

    /**
     * Get insertdate
     *
     * @return \DateTime
     */
    public function getInsertdate()
    {
        return $this->insertdate;
    }

    /**
     * Set updatedate
     *
     * @param \DateTime $updatedate
     * @return Client
     */
    public function setUpdatedate($updatedate)
    {
        $this->updatedate = $updatedate;

        return $this;
    }

    /**
     * Get updatedate
     *
     * @return \DateTime
     */
    public function getUpdatedate()
    {
        return $this->updatedate;
    }

    /**
     * Set public
     *
     * @param boolean $public
     * @return Client
     */
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    /**
     * Get public
     *
     * @return boolean
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set jobid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Job $jobid
     * @return Client
     */
    public function setJobid(\Caravane\Bundle\OrganicBundle\Entity\Job $jobid = null)
    {
        $this->jobid = $jobid;

        return $this;
    }

    /**
     * Get jobid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\Job
     */
    public function getJobid()
    {
        return $this->jobid;
    }

    /**
     * Set userid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\User $userid
     * @return Client
     */
    public function setUserid(\Caravane\Bundle\OrganicBundle\Entity\User $userid = null)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\User
     */
    public function getUserid()
    {
        return $this->userid;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tents = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tents
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\tent $tents
     * @return Client
     */
    public function addTent(\Caravane\Bundle\OrganicBundle\Entity\tent $tents)
    {
        $this->tents[] = $tents;

        return $this;
    }

    /**
     * Remove tents
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\tent $tents
     */
    public function removeTent(\Caravane\Bundle\OrganicBundle\Entity\tent $tents)
    {
        $this->tents->removeElement($tents);
    }

    /**
     * Get tents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTents()
    {
        return $this->tents;
    }

    /**
     * Add jobs
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\job $jobs
     * @return Client
     */
    public function addJob(\Caravane\Bundle\OrganicBundle\Entity\job $jobs)
    {
        $this->jobs[] = $jobs;

        return $this;
    }

    /**
     * Remove jobs
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\job $jobs
     */
    public function removeJob(\Caravane\Bundle\OrganicBundle\Entity\job $jobs)
    {
        $this->jobs->removeElement($jobs);
    }

    /**
     * Get jobs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * Add offres
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\offre $offres
     * @return Client
     */
    public function addOffre(\Caravane\Bundle\OrganicBundle\Entity\offre $offres)
    {
        $this->offres[] = $offres;

        return $this;
    }

    /**
     * Remove offres
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\offre $offres
     */
    public function removeOffre(\Caravane\Bundle\OrganicBundle\Entity\offre $offres)
    {
        $this->offres->removeElement($offres);
    }

    /**
     * Get offres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOffres()
    {
        return $this->offres;
    }

    /**
     * Add invoices
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\invoice $invoices
     * @return Client
     */
    public function addInvoice(\Caravane\Bundle\OrganicBundle\Entity\invoice $invoices)
    {
        $this->invoices[] = $invoices;

        return $this;
    }

    /**
     * Remove invoices
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\invoice $invoices
     */
    public function removeInvoice(\Caravane\Bundle\OrganicBundle\Entity\invoice $invoices)
    {
        $this->invoices->removeElement($invoices);
    }

    /**
     * Get invoices
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInvoices()
    {
        return $this->invoices;
    }
}