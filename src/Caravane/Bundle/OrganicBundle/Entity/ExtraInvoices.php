<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtraInvoices
 *
 * @ORM\Table(name="extra_invoices")
 * @ORM\Entity
 */
class ExtraInvoices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="invoiceId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $invoiceid;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=20, nullable=true)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=4, nullable=false)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="offreType", type="string", length=10, nullable=false)
     */
    private $offretype;

    /**
     * @var boolean
     *
     * @ORM\Column(name="slice", type="boolean", nullable=false)
     */
    private $slice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cSlice", type="boolean", nullable=false)
     */
    private $cslice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="nbSlices", type="boolean", nullable=false)
     */
    private $nbslices;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="insertDate", type="date", nullable=false)
     */
    private $insertdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="paymentDate", type="date", nullable=false)
     */
    private $paymentdate;

    /**
     * @var float
     *
     * @ORM\Column(name="priceHT", type="float", nullable=false)
     */
    private $priceht;

    /**
     * @var string
     *
     * @ORM\Column(name="priceType", type="string", length=10, nullable=false)
     */
    private $pricetype;

    /**
     * @var string
     *
     * @ORM\Column(name="creditNote", type="string", length=120, nullable=false)
     */
    private $creditnote;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", nullable=false)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="conditions", type="text", nullable=false)
     */
    private $conditions;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conditions1", type="boolean", nullable=false)
     */
    private $conditions1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conditions2", type="boolean", nullable=false)
     */
    private $conditions2;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="cieType", type="string", length=15, nullable=false)
     */
    private $cietype;

    /**
     * @var string
     *
     * @ORM\Column(name="clientType", type="string", length=5, nullable=false)
     */
    private $clienttype;

    /**
     * @var string
     *
     * @ORM\Column(name="clientTitle", type="string", length=5, nullable=false)
     */
    private $clienttitle;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="vat", type="string", length=30, nullable=false)
     */
    private $vat;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=20, nullable=false)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=20, nullable=false)
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
     * @ORM\Column(name="status", type="string", length=10, nullable=false)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="r1", type="boolean", nullable=false)
     */
    private $r1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="r1Date", type="date", nullable=false)
     */
    private $r1date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="r2", type="boolean", nullable=false)
     */
    private $r2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="r2Date", type="date", nullable=false)
     */
    private $r2date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="med", type="boolean", nullable=false)
     */
    private $med;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="medDate", type="date", nullable=false)
     */
    private $meddate;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=2, nullable=false)
     */
    private $language;

    /**
     * @var \ExtraClients
     *
     * @ORM\ManyToOne(targetEntity="ExtraClients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clientId", referencedColumnName="clientId")
     * })
     */
    private $clientid;

    /**
     * @var \ExtraJobs
     *
     * @ORM\ManyToOne(targetEntity="ExtraJobs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jobId", referencedColumnName="jobId")
     * })
     */
    private $jobid;



    /**
     * Get invoiceid
     *
     * @return integer 
     */
    public function getInvoiceid()
    {
        return $this->invoiceid;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return ExtraInvoices
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
     * Set year
     *
     * @param string $year
     * @return ExtraInvoices
     */
    public function setYear($year)
    {
        $this->year = $year;
    
        return $this;
    }

    /**
     * Get year
     *
     * @return string 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set offretype
     *
     * @param string $offretype
     * @return ExtraInvoices
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
     * Set slice
     *
     * @param boolean $slice
     * @return ExtraInvoices
     */
    public function setSlice($slice)
    {
        $this->slice = $slice;
    
        return $this;
    }

    /**
     * Get slice
     *
     * @return boolean 
     */
    public function getSlice()
    {
        return $this->slice;
    }

    /**
     * Set cslice
     *
     * @param boolean $cslice
     * @return ExtraInvoices
     */
    public function setCslice($cslice)
    {
        $this->cslice = $cslice;
    
        return $this;
    }

    /**
     * Get cslice
     *
     * @return boolean 
     */
    public function getCslice()
    {
        return $this->cslice;
    }

    /**
     * Set nbslices
     *
     * @param boolean $nbslices
     * @return ExtraInvoices
     */
    public function setNbslices($nbslices)
    {
        $this->nbslices = $nbslices;
    
        return $this;
    }

    /**
     * Get nbslices
     *
     * @return boolean 
     */
    public function getNbslices()
    {
        return $this->nbslices;
    }

    /**
     * Set insertdate
     *
     * @param \DateTime $insertdate
     * @return ExtraInvoices
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
     * Set paymentdate
     *
     * @param \DateTime $paymentdate
     * @return ExtraInvoices
     */
    public function setPaymentdate($paymentdate)
    {
        $this->paymentdate = $paymentdate;
    
        return $this;
    }

    /**
     * Get paymentdate
     *
     * @return \DateTime 
     */
    public function getPaymentdate()
    {
        return $this->paymentdate;
    }

    /**
     * Set priceht
     *
     * @param float $priceht
     * @return ExtraInvoices
     */
    public function setPriceht($priceht)
    {
        $this->priceht = $priceht;
    
        return $this;
    }

    /**
     * Get priceht
     *
     * @return float 
     */
    public function getPriceht()
    {
        return $this->priceht;
    }

    /**
     * Set pricetype
     *
     * @param string $pricetype
     * @return ExtraInvoices
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
     * Set creditnote
     *
     * @param string $creditnote
     * @return ExtraInvoices
     */
    public function setCreditnote($creditnote)
    {
        $this->creditnote = $creditnote;
    
        return $this;
    }

    /**
     * Get creditnote
     *
     * @return string 
     */
    public function getCreditnote()
    {
        return $this->creditnote;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return ExtraInvoices
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
     * Set conditions
     *
     * @param string $conditions
     * @return ExtraInvoices
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
     * Set conditions1
     *
     * @param boolean $conditions1
     * @return ExtraInvoices
     */
    public function setConditions1($conditions1)
    {
        $this->conditions1 = $conditions1;
    
        return $this;
    }

    /**
     * Get conditions1
     *
     * @return boolean 
     */
    public function getConditions1()
    {
        return $this->conditions1;
    }

    /**
     * Set conditions2
     *
     * @param boolean $conditions2
     * @return ExtraInvoices
     */
    public function setConditions2($conditions2)
    {
        $this->conditions2 = $conditions2;
    
        return $this;
    }

    /**
     * Get conditions2
     *
     * @return boolean 
     */
    public function getConditions2()
    {
        return $this->conditions2;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return ExtraInvoices
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set cietype
     *
     * @param string $cietype
     * @return ExtraInvoices
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
     * Set clienttype
     *
     * @param string $clienttype
     * @return ExtraInvoices
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
     * Set clienttitle
     *
     * @param string $clienttitle
     * @return ExtraInvoices
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
     * Set name
     *
     * @param string $name
     * @return ExtraInvoices
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
        return $this->name;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return ExtraInvoices
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
     * Set firstname
     *
     * @param string $firstname
     * @return ExtraInvoices
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
     * Set vat
     *
     * @param string $vat
     * @return ExtraInvoices
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
     * @return ExtraInvoices
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
     * @return ExtraInvoices
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
     * @return ExtraInvoices
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
     * @return ExtraInvoices
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
     * @return ExtraInvoices
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
     * Set status
     *
     * @param string $status
     * @return ExtraInvoices
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
     * Set r1
     *
     * @param boolean $r1
     * @return ExtraInvoices
     */
    public function setR1($r1)
    {
        $this->r1 = $r1;
    
        return $this;
    }

    /**
     * Get r1
     *
     * @return boolean 
     */
    public function getR1()
    {
        return $this->r1;
    }

    /**
     * Set r1date
     *
     * @param \DateTime $r1date
     * @return ExtraInvoices
     */
    public function setR1date($r1date)
    {
        $this->r1date = $r1date;
    
        return $this;
    }

    /**
     * Get r1date
     *
     * @return \DateTime 
     */
    public function getR1date()
    {
        return $this->r1date;
    }

    /**
     * Set r2
     *
     * @param boolean $r2
     * @return ExtraInvoices
     */
    public function setR2($r2)
    {
        $this->r2 = $r2;
    
        return $this;
    }

    /**
     * Get r2
     *
     * @return boolean 
     */
    public function getR2()
    {
        return $this->r2;
    }

    /**
     * Set r2date
     *
     * @param \DateTime $r2date
     * @return ExtraInvoices
     */
    public function setR2date($r2date)
    {
        $this->r2date = $r2date;
    
        return $this;
    }

    /**
     * Get r2date
     *
     * @return \DateTime 
     */
    public function getR2date()
    {
        return $this->r2date;
    }

    /**
     * Set med
     *
     * @param boolean $med
     * @return ExtraInvoices
     */
    public function setMed($med)
    {
        $this->med = $med;
    
        return $this;
    }

    /**
     * Get med
     *
     * @return boolean 
     */
    public function getMed()
    {
        return $this->med;
    }

    /**
     * Set meddate
     *
     * @param \DateTime $meddate
     * @return ExtraInvoices
     */
    public function setMeddate($meddate)
    {
        $this->meddate = $meddate;
    
        return $this;
    }

    /**
     * Get meddate
     *
     * @return \DateTime 
     */
    public function getMeddate()
    {
        return $this->meddate;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return ExtraInvoices
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
     * Set clientid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\ExtraClients $clientid
     * @return ExtraInvoices
     */
    public function setClientid(\Caravane\Bundle\OrganicBundle\Entity\ExtraClients $clientid = null)
    {
        $this->clientid = $clientid;
    
        return $this;
    }

    /**
     * Get clientid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\ExtraClients 
     */
    public function getClientid()
    {
        return $this->clientid;
    }

    /**
     * Set jobid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\ExtraJobs $jobid
     * @return ExtraInvoices
     */
    public function setJobid(\Caravane\Bundle\OrganicBundle\Entity\ExtraJobs $jobid = null)
    {
        $this->jobid = $jobid;
    
        return $this;
    }

    /**
     * Get jobid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\ExtraJobs 
     */
    public function getJobid()
    {
        return $this->jobid;
    }
}