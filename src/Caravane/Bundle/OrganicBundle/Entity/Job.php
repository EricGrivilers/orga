<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Job
 *
 * @ORM\Table(name="job")
 * @ORM\Entity(repositoryClass="Caravane\Bundle\OrganicBundle\Entity\JobRepository"))
 */
class Job
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
     * @var \DateTime
     *
     * @ORM\Column(name="insertDate", type="datetime", nullable=false)
     */
    private $insertdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateDate", type="datetime", nullable=false)
     */
    private $updatedate;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=50, nullable=false)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="offreType", type="string", length=10, nullable=false)
     */
    private $offretype;

    /**
     * @var string
     *
     * @ORM\Column(name="planningComments", type="text", nullable=false)
     */
    private $planningcomments;

    /**
     * @var string
     *
     * @ORM\Column(name="offreComments", type="text", nullable=false)
     */
    private $offrecomments;

    /**
     * @var string
     *
     * @ORM\Column(name="surface", type="string", length=100, nullable=false)
     */
    private $surface;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startBuild", type="datetime", nullable=false)
     */
    private $startbuild;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endBuild", type="datetime", nullable=false)
     */
    private $endbuild;

    /**
     * @var string
     *
     * @ORM\Column(name="buildNotes", type="text", nullable=false)
     */
    private $buildnotes;

    /**
     * @var string
     *
     * @ORM\Column(name="unbuildNotes", type="text", nullable=false)
     */
    private $unbuildnotes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="requestDate", type="datetime", nullable=false)
     */
    private $requestdate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=30, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="priceType", type="string", length=11, nullable=true)
     */
    private $pricetype;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", length=50, nullable=false, scale=2 )
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="priceComments", type="text", nullable=false)
     */
    private $pricecomments;

    /**
     * @var string
     *
     * @ORM\Column(name="conditions", type="text", nullable=false)
     */
    private $conditions;

    /**
     * @var string
     *
     * @ORM\Column(name="conditionsSlices", type="text", nullable=false)
     */
    private $conditionsslices;

    /**
     * @var string
     *
     * @ORM\Column(name="tents", type="string", length=255, nullable=false)
     */
    private $tents;

    /**
     * @var string
     *
     * @ORM\Column(name="tentsComments", type="text", nullable=false)
     */
    private $tentscomments;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=10, nullable=false)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=10, nullable=false)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=120, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=120, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255, nullable=false)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="phone2", type="string", length=20, nullable=false)
     */
    private $phone2;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=20, nullable=false)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=20, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=120, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", nullable=false)
     */
    private $comments;

    /**
     * @var boolean
     *
     * @ORM\Column(name="public", type="boolean", nullable=false)
     */
    private $public;

    /**
     * @var boolean
     *
     * @ORM\Column(name="issue", type="boolean", nullable=false)
     */
    private $issue;

    /**
     * @var string
     *
     * @ORM\Column(name="jobReference", type="string", length=20, nullable=false)
     */
    private $jobreference;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=2, nullable=false)
     */
    private $language;

    /**
     * @var boolean
     *
     * @ORM\Column(name="copyId", type="boolean", nullable=false)
     */
    private $copyid;

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
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="offreId", referencedColumnName="id")
     * })
     */
    private $offreid;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clientId", referencedColumnName="id")
     * })
     */
    private $clientid;

    /**
     * @var \Invoice
     *
     * @ORM\OneToMany(targetEntity="Invoice", mappedBy="jobid")
     * })
     */
    private $invoiceid;




    public function __toString() {
        return $this->reference;
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
     * Set insertdate
     *
     * @param \DateTime $insertdate
     * @return Job
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
     * @return Job
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
     * Set reference
     *
     * @param string $reference
     * @return Job
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
     * Set offretype
     *
     * @param string $offretype
     * @return Job
     */
    public function setOffretype($offretype)
    {
        $this->offretype = $offretype;

        return $this;
    }

    /**
     * Get offretype
     *
     * @return string
     */
    public function getOffretype()
    {
        return $this->offretype;
    }

    /**
     * Set planningcomments
     *
     * @param string $planningcomments
     * @return Job
     */
    public function setPlanningcomments($planningcomments)
    {
        $this->planningcomments = $planningcomments;

        return $this;
    }

    /**
     * Get planningcomments
     *
     * @return string
     */
    public function getPlanningcomments()
    {
        return $this->planningcomments;
    }

    /**
     * Set offrecomments
     *
     * @param string $offrecomments
     * @return Job
     */
    public function setOffrecomments($offrecomments)
    {
        $this->offrecomments = $offrecomments;

        return $this;
    }

    /**
     * Get offrecomments
     *
     * @return string
     */
    public function getOffrecomments()
    {
        return $this->offrecomments;
    }

    /**
     * Set surface
     *
     * @param string $surface
     * @return Job
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return string
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set startbuild
     *
     * @param \DateTime $startbuild
     * @return Job
     */
    public function setStartbuild($startbuild)
    {
        $this->startbuild = $startbuild;

        return $this;
    }

    /**
     * Get startbuild
     *
     * @return \DateTime
     */
    public function getStartbuild()
    {
        return $this->startbuild;
    }

    /**
     * Set endbuild
     *
     * @param \DateTime $endbuild
     * @return Job
     */
    public function setEndbuild($endbuild)
    {
        $this->endbuild = $endbuild;

        return $this;
    }

    /**
     * Get endbuild
     *
     * @return \DateTime
     */
    public function getEndbuild()
    {
        return $this->endbuild;
    }

    /**
     * Set buildnotes
     *
     * @param string $buildnotes
     * @return Job
     */
    public function setBuildnotes($buildnotes)
    {
        $this->buildnotes = $buildnotes;

        return $this;
    }

    /**
     * Get buildnotes
     *
     * @return string
     */
    public function getBuildnotes()
    {
        return $this->buildnotes;
    }

    /**
     * Set unbuildnotes
     *
     * @param string $unbuildnotes
     * @return Job
     */
    public function setUnbuildnotes($unbuildnotes)
    {
        $this->unbuildnotes = $unbuildnotes;

        return $this;
    }

    /**
     * Get unbuildnotes
     *
     * @return string
     */
    public function getUnbuildnotes()
    {
        return $this->unbuildnotes;
    }

    /**
     * Set requestdate
     *
     * @param \DateTime $requestdate
     * @return Job
     */
    public function setRequestdate($requestdate)
    {
        $this->requestdate = $requestdate;

        return $this;
    }

    /**
     * Get requestdate
     *
     * @return \DateTime
     */
    public function getRequestdate()
    {
        return $this->requestdate;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Job
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set pricetype
     *
     * @param string $pricetype
     * @return Job
     */
    public function setPricetype($pricetype)
    {
        $this->pricetype = $pricetype;

        return $this;
    }

    /**
     * Get pricetype
     *
     * @return string
     */
    public function getPricetype()
    {
        return $this->pricetype;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Job
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set pricecomments
     *
     * @param string $pricecomments
     * @return Job
     */
    public function setPricecomments($pricecomments)
    {
        $this->pricecomments = $pricecomments;

        return $this;
    }

    /**
     * Get pricecomments
     *
     * @return string
     */
    public function getPricecomments()
    {
        return $this->pricecomments;
    }

    /**
     * Set conditions
     *
     * @param string $conditions
     * @return Job
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * Get conditions
     *
     * @return string
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Set conditionsslices
     *
     * @param string $conditionsslices
     * @return Job
     */
    public function setConditionsslices($conditionsslices)
    {
        $this->conditionsslices = $conditionsslices;

        return $this;
    }

    /**
     * Get conditionsslices
     *
     * @return string
     */
    public function getConditionsslices()
    {
        return $this->conditionsslices;
    }

    /**
     * Set tents
     *
     * @param string $tents
     * @return Job
     */
    public function setTents($tents)
    {
        $this->tents = $tents;

        return $this;
    }

    /**
     * Get tents
     *
     * @return string
     */
    public function getTents()
    {
        return $this->tents;
    }

    /**
     * Set tentscomments
     *
     * @param string $tentscomments
     * @return Job
     */
    public function setTentscomments($tentscomments)
    {
        $this->tentscomments = $tentscomments;

        return $this;
    }

    /**
     * Get tentscomments
     *
     * @return string
     */
    public function getTentscomments()
    {
        return $this->tentscomments;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Job
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
     * @return Job
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
     * @return Job
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
     * @return Job
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
     * @return Job
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
     * Set contact
     *
     * @param string $contact
     * @return Job
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Job
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
     * @return Job
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
     * @return Job
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
     * @return Job
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
     * @return Job
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
     * @return Job
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
     * Set comments
     *
     * @param string $comments
     * @return Job
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set public
     *
     * @param boolean $public
     * @return Job
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
     * Set issue
     *
     * @param boolean $issue
     * @return Job
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;

        return $this;
    }

    /**
     * Get issue
     *
     * @return boolean
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * Set jobreference
     *
     * @param string $jobreference
     * @return Job
     */
    public function setJobreference($jobreference)
    {
        $this->jobreference = $jobreference;

        return $this;
    }

    /**
     * Get jobreference
     *
     * @return string
     */
    public function getJobreference()
    {
        return $this->jobreference;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Job
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
     * Set copyid
     *
     * @param boolean $copyid
     * @return Job
     */
    public function setCopyid($copyid)
    {
        $this->copyid = $copyid;

        return $this;
    }

    /**
     * Get copyid
     *
     * @return boolean
     */
    public function getCopyid()
    {
        return $this->copyid;
    }

    /**
     * Set userid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\User $userid
     * @return Job
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
     * Set offreid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Offre $offreid
     * @return Job
     */
    public function setOffreid(\Caravane\Bundle\OrganicBundle\Entity\Offre $offreid = null)
    {
        $this->offreid = $offreid;

        return $this;
    }

    /**
     * Get offreid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\Offre
     */
    public function getOffreid()
    {
        return $this->offreid;
    }

    /**
     * Set clientid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Client $clientid
     * @return Job
     */
    public function setClientid(\Caravane\Bundle\OrganicBundle\Entity\Client $clientid = null)
    {
        $this->clientid = $clientid;

        return $this;
    }

    /**
     * Get clientid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\Client
     */
    public function getClientid()
    {
        return $this->clientid;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->invoiceid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add invoiceid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Invoice $invoiceid
     * @return Job
     */
    public function addInvoiceid(\Caravane\Bundle\OrganicBundle\Entity\Invoice $invoiceid)
    {
        $this->invoiceid[] = $invoiceid;

        return $this;
    }

    /**
     * Remove invoiceid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Invoice $invoiceid
     */
    public function removeInvoiceid(\Caravane\Bundle\OrganicBundle\Entity\Invoice $invoiceid)
    {
        $this->invoiceid->removeElement($invoiceid);
    }

    /**
     * Get invoiceid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInvoiceid()
    {
        return $this->invoiceid;
    }
}
