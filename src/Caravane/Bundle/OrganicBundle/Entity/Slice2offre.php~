<?php

namespace Caravane\Bundle\OrganicBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\ExecutionContext;

use Doctrine\ORM\Mapping as ORM;

/**
 * Slice2offre
 *
 * @ORM\Table(name="slice2offre")
 * @ORM\Entity
 */
class Slice2offre
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
     * @ORM\Column(name="sliceId", type="integer", nullable=true)
     */
    private $sliceid;

    /**
     * @var float
     *
     * @ORM\Column(name="slice", type="decimal", nullable=true, scale=2)
     */
    private $slice;

    /**
     * @var float
     *
     * @ORM\Column(name="priceHT", type="decimal", nullable=true, scale=2)
     */
    private $priceht;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", nullable=true)
     * @Assert\NotBlank()
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;


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
     * Set sliceid
     *
     * @param integer $sliceid
     * @return Slice2offre
     */
    public function setSliceid($sliceid)
    {
        $this->sliceid = $sliceid;
    
        return $this;
    }

    /**
     * Get sliceid
     *
     * @return integer 
     */
    public function getSliceid()
    {
        return $this->sliceid;
    }

    /**
     * Set slice
     *
     * @param float $slice
     * @return Slice2offre
     */
    public function setSlice($slice)
    {
        $this->slice = $slice;
    
        return $this;
    }

    /**
     * Get slice
     *
     * @return float 
     */
    public function getSlice()
    {
        return $this->slice;
    }

    /**
     * Set priceht
     *
     * @param float $priceht
     * @return Slice2offre
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
     * Set comments
     *
     * @param string $comments
     * @return Slice2offre
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
     * Set status
     *
     * @param string $status
     * @return Slice2offre
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
     * Set offreid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Offre $offreid
     * @return Slice2offre
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