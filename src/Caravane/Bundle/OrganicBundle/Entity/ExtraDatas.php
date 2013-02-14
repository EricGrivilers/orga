<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtraDatas
 *
 * @ORM\Table(name="extra_datas")
 * @ORM\Entity
 */
class ExtraDatas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dataId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dataid;

    /**
     * @var integer
     *
     * @ORM\Column(name="parentId", type="integer", nullable=false)
     */
    private $parentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="rank", type="integer", nullable=false)
     */
    private $rank;

    /**
     * @var integer
     *
     * @ORM\Column(name="subRank", type="integer", nullable=false)
     */
    private $subrank;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="thumbUrl", type="string", length=255, nullable=false)
     */
    private $thumburl;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=120, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="shortDescription", type="string", length=255, nullable=false)
     */
    private $shortdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="longDescription", type="text", nullable=false)
     */
    private $longdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="info1", type="text", nullable=false)
     */
    private $info1;

    /**
     * @var string
     *
     * @ORM\Column(name="info2", type="text", nullable=false)
     */
    private $info2;

    /**
     * @var string
     *
     * @ORM\Column(name="info3", type="text", nullable=false)
     */
    private $info3;

    /**
     * @var integer
     *
     * @ORM\Column(name="categoryId", type="integer", nullable=false)
     */
    private $categoryid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="insertDate", type="datetime", nullable=false)
     */
    private $insertdate;



    /**
     * Get dataid
     *
     * @return integer 
     */
    public function getDataid()
    {
        return $this->dataid;
    }

    /**
     * Set parentid
     *
     * @param integer $parentid
     * @return ExtraDatas
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;
    
        return $this;
    }

    /**
     * Get parentid
     *
     * @return integer 
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     * @return ExtraDatas
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
     * Set subrank
     *
     * @param integer $subrank
     * @return ExtraDatas
     */
    public function setSubrank($subrank)
    {
        $this->subrank = $subrank;
    
        return $this;
    }

    /**
     * Get subrank
     *
     * @return integer 
     */
    public function getSubrank()
    {
        return $this->subrank;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return ExtraDatas
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return ExtraDatas
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
     * Set thumburl
     *
     * @param string $thumburl
     * @return ExtraDatas
     */
    public function setThumburl($thumburl)
    {
        $this->thumburl = $thumburl;
    
        return $this;
    }

    /**
     * Get thumburl
     *
     * @return string 
     */
    public function getThumburl()
    {
        return $this->thumburl;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return ExtraDatas
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set shortdescription
     *
     * @param string $shortdescription
     * @return ExtraDatas
     */
    public function setShortdescription($shortdescription)
    {
        $this->shortdescription = $shortdescription;
    
        return $this;
    }

    /**
     * Get shortdescription
     *
     * @return string 
     */
    public function getShortdescription()
    {
        return $this->shortdescription;
    }

    /**
     * Set longdescription
     *
     * @param string $longdescription
     * @return ExtraDatas
     */
    public function setLongdescription($longdescription)
    {
        $this->longdescription = $longdescription;
    
        return $this;
    }

    /**
     * Get longdescription
     *
     * @return string 
     */
    public function getLongdescription()
    {
        return $this->longdescription;
    }

    /**
     * Set info1
     *
     * @param string $info1
     * @return ExtraDatas
     */
    public function setInfo1($info1)
    {
        $this->info1 = $info1;
    
        return $this;
    }

    /**
     * Get info1
     *
     * @return string 
     */
    public function getInfo1()
    {
        return $this->info1;
    }

    /**
     * Set info2
     *
     * @param string $info2
     * @return ExtraDatas
     */
    public function setInfo2($info2)
    {
        $this->info2 = $info2;
    
        return $this;
    }

    /**
     * Get info2
     *
     * @return string 
     */
    public function getInfo2()
    {
        return $this->info2;
    }

    /**
     * Set info3
     *
     * @param string $info3
     * @return ExtraDatas
     */
    public function setInfo3($info3)
    {
        $this->info3 = $info3;
    
        return $this;
    }

    /**
     * Get info3
     *
     * @return string 
     */
    public function getInfo3()
    {
        return $this->info3;
    }

    /**
     * Set categoryid
     *
     * @param integer $categoryid
     * @return ExtraDatas
     */
    public function setCategoryid($categoryid)
    {
        $this->categoryid = $categoryid;
    
        return $this;
    }

    /**
     * Get categoryid
     *
     * @return integer 
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }

    /**
     * Set insertdate
     *
     * @param \DateTime $insertdate
     * @return ExtraDatas
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
}