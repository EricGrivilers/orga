<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tent
 *
 * @ORM\Table(name="tent")
 * @ORM\Entity(repositoryClass="Caravane\Bundle\OrganicBundle\Entity\TentRepository")
 */
class Tent
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
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=64, nullable=false)
     */
    private $reference;

    /**
     * @var boolean
     *
     * @ORM\Column(name="kit", type="boolean", nullable=true)
     */
    private $kit;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=100, nullable=true)
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=50, nullable=true)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="length", type="decimal",  scale=2, nullable=true)
     */
    private $length;

    /**
     * @var string
     *
     * @ORM\Column(name="width", type="decimal",  scale=2,  nullable=true)
     */
    private $width;

    /**
     * @var string
     *
     * @ORM\Column(name="m2", type="decimal",  scale=2,  nullable=true)
     */
    private $m2;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal",  scale=2, nullable=true)
     */
    private $weight;

    /**
     * @var height
     *
     * @ORM\Column(name="height", type="decimal",  scale=2, nullable=true)
     */
    private $height;

    /**
     * @var integer
     *
     * @ORM\Column(name="piquets", type="integer", nullable=true)
     */
    private $piquets;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=50, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=50, nullable=true)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", nullable=true)
     */
    private $comments;

    /**
     * @var boolean
     *
     * @ORM\Column(name="winter", type="boolean", nullable=true)
     */
    private $winter;

    /**
     * @var integer
     *
     * @ORM\Column(name="issue", type="integer", nullable=true)
     */
    private $issue;

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
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="winterOffreId", referencedColumnName="id")
     * })
     */
    private $winteroffreid;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client",inversedBy="tents")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ownerId", referencedColumnName="id")
     * })
     */
    private $ownerid;


    /**
     * @var \tents2job
     *
     * @ORM\OneToMany(targetEntity="Tent2job", mappedBy="tentid")
     * 
     */
    private $tents2job;


    /**
     * @var \tents2offre
     *
     * @ORM\OneToMany(targetEntity="Tent2offre", mappedBy="tentid")
     * 
     */
    private $tents2offre;

    /**
     * @var \tents2offre
     *
     * @ORM\ManyToOne(targetEntity="ProductCategory")
     * 
     */
    private $productCategory;


    /**
     * @var \offres
     *
     * @ORM\OneToMany(targetEntity="Product2offre", mappedBy="tentid")
     * 
     */
    private $offres;

    /**
     * @var \jobs
     *
     * @ORM\OneToMany(targetEntity="Product2job", mappedBy="tentid")
     * 
     */
    private $jobs;
    

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
     * Set name
     *
     * @param string $name
     * @return Tent
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
     * Set reference
     *
     * @param string $reference
     * @return Tent
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
     * Set kit
     *
     * @param boolean $kit
     * @return Tent
     */
    public function setKit($kit)
    {
        $this->kit = $kit;
    
        return $this;
    }

    /**
     * Get kit
     *
     * @return boolean 
     */
    public function getKit()
    {
        return $this->kit;
    }

    /**
     * Set owner
     *
     * @param string $owner
     * @return Tent
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    
        return $this;
    }

    /**
     * Get owner
     *
     * @return string 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return Tent
     */
    public function setColor($color)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set length
     *
     * @param string $length
     * @return Tent
     */
    public function setLength($length)
    {
        $this->length = $length;
    
        return $this;
    }

    /**
     * Get length
     *
     * @return string 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set width
     *
     * @param string $width
     * @return Tent
     */
    public function setWidth($width)
    {
        $this->width = $width;
    
        return $this;
    }

    /**
     * Get width
     *
     * @return string 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set m2
     *
     * @param string $m2
     * @return Tent
     */
    public function setM2($m2)
    {
        $this->m2 = $m2;
    
        return $this;
    }

    /**
     * Get m2
     *
     * @return string 
     */
    public function getM2()
    {
        return $this->m2;
    }

    /**
     * Set weight
     *
     * @param string $weight
     * @return Tent
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    
        return $this;
    }

    /**
     * Get weight
     *
     * @return string 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set piquets
     *
     * @param integer $piquets
     * @return Tent
     */
    public function setPiquets($piquets)
    {
        $this->piquets = $piquets;
    
        return $this;
    }

    /**
     * Get piquets
     *
     * @return integer 
     */
    public function getPiquets()
    {
        return $this->piquets;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Tent
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
     * Set etat
     *
     * @param string $etat
     * @return Tent
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Tent
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
     * Set winter
     *
     * @param boolean $winter
     * @return Tent
     */
    public function setWinter($winter)
    {
        $this->winter = $winter;
    
        return $this;
    }

    /**
     * Get winter
     *
     * @return boolean 
     */
    public function getWinter()
    {
        return $this->winter;
    }

    /**
     * Set issue
     *
     * @param integer $issue
     * @return Tent
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;
    
        return $this;
    }

    /**
     * Get issue
     *
     * @return integer 
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * Set insertdate
     *
     * @param \DateTime $insertdate
     * @return Tent
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
     * @return Tent
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
     * @return Tent
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
     * Set winteroffreid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Offre $winteroffreid
     * @return Tent
     */
    public function setWinteroffreid(\Caravane\Bundle\OrganicBundle\Entity\Offre $winteroffreid = null)
    {
        $this->winteroffreid = $winteroffreid;
    
        return $this;
    }

    /**
     * Get winteroffreid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\Offre 
     */
    public function getWinteroffreid()
    {
        return $this->winteroffreid;
    }

    /**
     * Set ownerid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Client $ownerid
     * @return Tent
     */
    public function setOwnerid(\Caravane\Bundle\OrganicBundle\Entity\Client $ownerid = null)
    {
        $this->ownerid = $ownerid;
    
        return $this;
    }

    /**
     * Get ownerid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\Client 
     */
    public function getOwnerid()
    {
        return $this->ownerid;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tents2job = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add tents2job
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Tent2Job $tents2job
     * @return Tent
     */
    public function addTents2job(\Caravane\Bundle\OrganicBundle\Entity\Tent2Job $tents2job)
    {
        $this->tents2job[] = $tents2job;
    
        return $this;
    }

    /**
     * Remove tents2job
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Tent2Job $tents2job
     */
    public function removeTents2job(\Caravane\Bundle\OrganicBundle\Entity\Tent2Job $tents2job)
    {
        $this->tents2job->removeElement($tents2job);
    }

    /**
     * Get tents2job
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTents2job()
    {
        return $this->tents2job;
    }

    /**
     * Add tents2offre
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Tent2Offre $tents2offre
     * @return Tent
     */
    public function addTents2offre(\Caravane\Bundle\OrganicBundle\Entity\Tent2Offre $tents2offre)
    {
        $this->tents2offre[] = $tents2offre;
    
        return $this;
    }

    /**
     * Remove tents2offre
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Tent2Offre $tents2offre
     */
    public function removeTents2offre(\Caravane\Bundle\OrganicBundle\Entity\Tent2Offre $tents2offre)
    {
        $this->tents2offre->removeElement($tents2offre);
    }

    /**
     * Get tents2offre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTents2offre()
    {
        return $this->tents2offre;
    }

    /**
     * Set height
     *
     * @param string $height
     * @return Tent
     */
    public function setHeight($height)
    {
        $this->height = $height;
    
        return $this;
    }

    /**
     * Get height
     *
     * @return string 
     */
    public function getHeight()
    {
        return $this->height;
    }


    public function getFormField() {
        return $this;
    }

    /**
     * Set productCategory
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\ProductCategory $productCategory
     * @return Tent
     */
    public function setProductCategory(\Caravane\Bundle\OrganicBundle\Entity\ProductCategory $productCategory = null)
    {
        $this->productCategory = $productCategory;
    
        return $this;
    }

    /**
     * Get productCategory
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\ProductCategory 
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * Add offres
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Product2Offre $offres
     * @return Tent
     */
    public function addOffre(\Caravane\Bundle\OrganicBundle\Entity\Product2Offre $offres)
    {
        $this->offres[] = $offres;
    
        return $this;
    }

    /**
     * Remove offres
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Product2Offre $offres
     */
    public function removeOffre(\Caravane\Bundle\OrganicBundle\Entity\Product2Offre $offres)
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
     * Add jobs
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Product2Job $jobs
     * @return Tent
     */
    public function addJob(\Caravane\Bundle\OrganicBundle\Entity\Product2Job $jobs)
    {
        $this->jobs[] = $jobs;
    
        return $this;
    }

    /**
     * Remove jobs
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Product2Job $jobs
     */
    public function removeJob(\Caravane\Bundle\OrganicBundle\Entity\Product2Job $jobs)
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
}
