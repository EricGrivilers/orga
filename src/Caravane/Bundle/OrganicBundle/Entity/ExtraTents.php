<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtraTents
 *
 * @ORM\Table(name="extra_tents")
 * @ORM\Entity
 */
class ExtraTents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tentId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tentid;

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
     * @ORM\Column(name="kit", type="boolean", nullable=false)
     */
    private $kit;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=100, nullable=false)
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=50, nullable=false)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="length", type="string", length=10, nullable=false)
     */
    private $length;

    /**
     * @var string
     *
     * @ORM\Column(name="width", type="string", length=10, nullable=false)
     */
    private $width;

    /**
     * @var string
     *
     * @ORM\Column(name="m2", type="string", length=15, nullable=false)
     */
    private $m2;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="string", length=50, nullable=false)
     */
    private $weight;

    /**
     * @var integer
     *
     * @ORM\Column(name="piquets", type="integer", nullable=false)
     */
    private $piquets;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=50, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=50, nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", nullable=false)
     */
    private $comments;

    /**
     * @var boolean
     *
     * @ORM\Column(name="winter", type="boolean", nullable=false)
     */
    private $winter;

    /**
     * @var integer
     *
     * @ORM\Column(name="issue", type="integer", nullable=false)
     */
    private $issue;

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
     * @var boolean
     *
     * @ORM\Column(name="public", type="boolean", nullable=false)
     */
    private $public;

    /**
     * @var \ExtraOffres
     *
     * @ORM\ManyToOne(targetEntity="ExtraOffres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="winterOffreId", referencedColumnName="offreId")
     * })
     */
    private $winteroffreid;

    /**
     * @var \ExtraClients
     *
     * @ORM\ManyToOne(targetEntity="ExtraClients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ownerId", referencedColumnName="clientId")
     * })
     */
    private $ownerid;



    /**
     * Get tentid
     *
     * @return integer 
     */
    public function getTentid()
    {
        return $this->tentid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return ExtraTents
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
     * @return ExtraTents
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
     * @return ExtraTents
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
     * @return ExtraTents
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
     * @return ExtraTents
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
     * @return ExtraTents
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
     * @return ExtraTents
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
     * @return ExtraTents
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
     * @return ExtraTents
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
     * @return ExtraTents
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
     * @return ExtraTents
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
     * @return ExtraTents
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
     * @return ExtraTents
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
     * @return ExtraTents
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
     * @return ExtraTents
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
     * @return ExtraTents
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
     * @return ExtraTents
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
     * @return ExtraTents
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
     * @param \Caravane\Bundle\OrganicBundle\Entity\ExtraOffres $winteroffreid
     * @return ExtraTents
     */
    public function setWinteroffreid(\Caravane\Bundle\OrganicBundle\Entity\ExtraOffres $winteroffreid = null)
    {
        $this->winteroffreid = $winteroffreid;
    
        return $this;
    }

    /**
     * Get winteroffreid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\ExtraOffres 
     */
    public function getWinteroffreid()
    {
        return $this->winteroffreid;
    }

    /**
     * Set ownerid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\ExtraClients $ownerid
     * @return ExtraTents
     */
    public function setOwnerid(\Caravane\Bundle\OrganicBundle\Entity\ExtraClients $ownerid = null)
    {
        $this->ownerid = $ownerid;
    
        return $this;
    }

    /**
     * Get ownerid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\ExtraClients 
     */
    public function getOwnerid()
    {
        return $this->ownerid;
    }
}