<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product2job
 *
 * @ORM\Table(name="product2job")
 * @ORM\Entity
 */
class Product2job
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
     * @var \Job
     *
     * @ORM\ManyToOne(targetEntity="Job")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jobId", referencedColumnName="id")
     * })
     */
    private $jobid;

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
     * @return Product2job
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
     * @return Product2job
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
     * @return Product2job
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
     * @return Product2job
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
     * @return Product2job
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
     * @return Product2job
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
     * @return Product2job
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
     * @return Product2job
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
     * Set jobid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Job $jobid
     * @return Product2job
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
     * Set offreid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Offre $offreid
     * @return Product2job
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
}