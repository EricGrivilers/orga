<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product2offre
 *
 * @ORM\Table(name="product2offre")
 * @ORM\Entity
 */
class Product2offre
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
     * @ORM\Column(name="productId", type="integer", nullable=true)
     */
    private $productId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", nullable=true)
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="insertDate", type="datetime", nullable=true)
     */
    private $insertdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateDate", type="datetime", nullable=true)
     */
    private $updatedate;

    /**
     * @var integer
     *
     * @ORM\Column(name="rank", type="smallint", nullable=true)
     */
    private $rank;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isOption", type="boolean", nullable=true)
     */
    private $isoption;

    /**
     * @var string
     *
     * @ORM\Column(name="datas", type="text", nullable=true)
     */
    private $datas;


    private $datasAsObject;

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
     * @var \Tent
     *
     * @ORM\ManyToOne(targetEntity="Tent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tentId", referencedColumnName="id")
     * })
     */
    private $tentid;

     /**
     * @var \Transport
     *
     * @ORM\ManyToOne(targetEntity="Transport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="transportid", referencedColumnName="id")
     * })
     */
    private $transportid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="toremove", type="boolean", nullable=true)
     */
    private $toremove;



    public function __toString() {
        return $this->getId()."_".$this->getProductId();
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
     * Set productId
     *
     * @param integer $productId
     * @return Product2offre
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product2offre
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
     * @return Product2offre
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
     * @return Product2offre
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
     * @return Product2offre
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
     * @return Product2offre
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
     * @return Product2offre
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
     * Set offreid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Offre $offreid
     * @return Product2offre
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
     * Set datas
     *
     * @param string $datas
     * @return Product2offre
     */
    public function setDatas($datas)
    {
        $this->datas = $datas;

        return $this;
    }

    /**
     * Get datas
     *
     * @return string
     */
    public function getDatas()
    {

        return $this->datas;
    }

    public function getDatasAsObject()
    {

        $default=array('plancher'=>0,'surfaceplancher'=>'','sol'=>'','canalisation'=>0,'other'=>'');
        if($array=json_decode($this->datas)) {
            foreach($default as $k=>$v) {
                if(!isset($array->$k)) {
                   $array->$k=$v;
                }
            }
            return $array;
        }
        return $default;
    }

    /**
     * Set tentid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Tent $tentid
     * @return Product2offre
     */
    public function setTentid(\Caravane\Bundle\OrganicBundle\Entity\Tent $tentid = null)
    {
        $this->tentid = $tentid;

        return $this;
    }

    /**
     * Get tentid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\Tent
     */
    public function getTentid()
    {
        return $this->tentid;
    }

    /**
     * Set toremove
     *
     * @param boolean $toremove
     * @return Product2offre
     */
    public function setToremove($toremove)
    {
        $this->toremove = $toremove;

        return $this;
    }

    /**
     * Get toremove
     *
     * @return boolean
     */
    public function getToremove()
    {
        return $this->toremove;
    }

    /**
     * Set transportid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Transport $transportid
     * @return Product2offre
     */
    public function setTransportid(\Caravane\Bundle\OrganicBundle\Entity\Transport $transportid = null)
    {
        $this->transportid = $transportid;

        return $this;
    }

    /**
     * Get transportid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\Transport
     */
    public function getTransportid()
    {
        return $this->transportid;
    }
}
