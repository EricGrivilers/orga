<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtraSlice2job
 *
 * @ORM\Table(name="extra_slice2job")
 * @ORM\Entity
 */
class ExtraSlice2job
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
     * @ORM\Column(name="offreId", type="integer", nullable=true)
     */
    private $offreid;

    /**
     * @var integer
     *
     * @ORM\Column(name="jobId", type="integer", nullable=true)
     */
    private $jobid;

    /**
     * @var integer
     *
     * @ORM\Column(name="invoiceId", type="integer", nullable=true)
     */
    private $invoiceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="sliceId", type="integer", nullable=true)
     */
    private $sliceid;

    /**
     * @var float
     *
     * @ORM\Column(name="slice", type="float", nullable=false)
     */
    private $slice;

    /**
     * @var float
     *
     * @ORM\Column(name="priceHT", type="float", nullable=false)
     */
    private $priceht;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", nullable=false)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;



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
     * Set offreid
     *
     * @param integer $offreid
     * @return ExtraSlice2job
     */
    public function setOffreid($offreid)
    {
        $this->offreid = $offreid;
    
        return $this;
    }

    /**
     * Get offreid
     *
     * @return integer 
     */
    public function getOffreid()
    {
        return $this->offreid;
    }

    /**
     * Set jobid
     *
     * @param integer $jobid
     * @return ExtraSlice2job
     */
    public function setJobid($jobid)
    {
        $this->jobid = $jobid;
    
        return $this;
    }

    /**
     * Get jobid
     *
     * @return integer 
     */
    public function getJobid()
    {
        return $this->jobid;
    }

    /**
     * Set invoiceid
     *
     * @param integer $invoiceid
     * @return ExtraSlice2job
     */
    public function setInvoiceid($invoiceid)
    {
        $this->invoiceid = $invoiceid;
    
        return $this;
    }

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
     * Set sliceid
     *
     * @param integer $sliceid
     * @return ExtraSlice2job
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
     * @return ExtraSlice2job
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
     * @return ExtraSlice2job
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
     * @return ExtraSlice2job
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
     * @return ExtraSlice2job
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
}