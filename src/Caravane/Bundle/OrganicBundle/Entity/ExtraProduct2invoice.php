<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtraProduct2invoice
 *
 * @ORM\Table(name="extra_product2invoice")
 * @ORM\Entity
 */
class ExtraProduct2invoice
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
     * @ORM\Column(name="rank", type="integer", nullable=false)
     */
    private $rank;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isFromOffre", type="boolean", nullable=false)
     */
    private $isfromoffre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isFromJob", type="boolean", nullable=false)
     */
    private $isfromjob;

    /**
     * @var \ExtraInvoices
     *
     * @ORM\ManyToOne(targetEntity="ExtraInvoices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="invoiceId", referencedColumnName="invoiceId")
     * })
     */
    private $invoiceid;



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
     * @return ExtraProduct2invoice
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
     * @return ExtraProduct2invoice
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
     * @return ExtraProduct2invoice
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
     * @return ExtraProduct2invoice
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
     * @return ExtraProduct2invoice
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
     * @return ExtraProduct2invoice
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
     * Set isfromoffre
     *
     * @param boolean $isfromoffre
     * @return ExtraProduct2invoice
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
     * Set isfromjob
     *
     * @param boolean $isfromjob
     * @return ExtraProduct2invoice
     */
    public function setIsfromjob($isfromjob)
    {
        $this->isfromjob = $isfromjob;
    
        return $this;
    }

    /**
     * Get isfromjob
     *
     * @return boolean 
     */
    public function getIsfromjob()
    {
        return $this->isfromjob;
    }

    /**
     * Set invoiceid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\ExtraInvoices $invoiceid
     * @return ExtraProduct2invoice
     */
    public function setInvoiceid(\Caravane\Bundle\OrganicBundle\Entity\ExtraInvoices $invoiceid = null)
    {
        $this->invoiceid = $invoiceid;
    
        return $this;
    }

    /**
     * Get invoiceid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\ExtraInvoices 
     */
    public function getInvoiceid()
    {
        return $this->invoiceid;
    }
}