<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtraProduct2job
 *
 * @ORM\Table(name="extra_product2job")
 * @ORM\Entity
 */
class ExtraProduct2job
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
     * @var integer
     *
     * @ORM\Column(name="productId", type="integer", nullable=false)
     */
    private $productid;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", nullable=false)
     */
    private $price;

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
     * @var integer
     *
     * @ORM\Column(name="rank", type="smallint", nullable=false)
     */
    private $rank;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isOption", type="boolean", nullable=false)
     */
    private $isoption;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isFromOffre", type="boolean", nullable=false)
     */
    private $isfromoffre;

    /**
     * @var \ExtraOffres
     *
     * @ORM\ManyToOne(targetEntity="ExtraOffres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="offreId", referencedColumnName="offreId")
     * })
     */
    private $offreid;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set productid
     *
     * @param integer $productid
     * @return ExtraProduct2job
     */
    public function setProductid($productid)
    {
        $this->productid = $productid;
    
        return $this;
    }

    /**
     * Get productid
     *
     * @return integer 
     */
    public function getProductid()
    {
        return $this->productid;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return ExtraProduct2job
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return ExtraProduct2job
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set insertdate
     *
     * @param \DateTime $insertdate
     * @return ExtraProduct2job
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
     * @return ExtraProduct2job
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
     * Set rank
     *
     * @param integer $rank
     * @return ExtraProduct2job
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    
        return $this;
    }

    /**
     * Get rank
     *
     * @return integer 
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set isoption
     *
     * @param boolean $isoption
     * @return ExtraProduct2job
     */
    public function setIsoption($isoption)
    {
        $this->isoption = $isoption;
    
        return $this;
    }

    /**
     * Get isoption
     *
     * @return boolean 
     */
    public function getIsoption()
    {
        return $this->isoption;
    }

    /**
     * Set isfromoffre
     *
     * @param boolean $isfromoffre
     * @return ExtraProduct2job
     */
    public function setIsfromoffre($isfromoffre)
    {
        $this->isfromoffre = $isfromoffre;
    
        return $this;
    }

    /**
     * Get isfromoffre
     *
     * @return boolean 
     */
    public function getIsfromoffre()
    {
        return $this->isfromoffre;
    }

    /**
     * Set offreid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\ExtraOffres $offreid
     * @return ExtraProduct2job
     */
    public function setOffreid(\Caravane\Bundle\OrganicBundle\Entity\ExtraOffres $offreid = null)
    {
        $this->offreid = $offreid;
    
        return $this;
    }

    /**
     * Get offreid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\ExtraOffres 
     */
    public function getOffreid()
    {
        return $this->offreid;
    }

    /**
     * Set jobid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\ExtraJobs $jobid
     * @return ExtraProduct2job
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