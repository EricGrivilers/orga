<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Slice2job
 *
 * @ORM\Table(name="slice2job")
 * @ORM\Entity
 */
class Slice2job
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
     * @var \Invoice
     *
     * @ORM\ManyToOne(targetEntity="Invoice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="invoiceId", referencedColumnName="id")
     * })
     */
    private $invoiceid;

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
     * @var \Job
     *
     * @ORM\ManyToOne(targetEntity="Job")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jobId", referencedColumnName="id")
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
     * Set sliceid
     *
     * @param integer $sliceid
     * @return Slice2job
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
     * @return Slice2job
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
     * @return Slice2job
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
     * @return Slice2job
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
     * @return Slice2job
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
     * Set invoiceid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Invoice $invoiceid
     * @return Slice2job
     */
    public function setInvoiceid(\Caravane\Bundle\OrganicBundle\Entity\Invoice $invoiceid = null)
    {
        $this->invoiceid = $invoiceid;
    
        return $this;
    }

    /**
     * Get invoiceid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\Invoice 
     */
    public function getInvoiceid()
    {
        return $this->invoiceid;
    }

    /**
     * Set offreid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Offre $offreid
     * @return Slice2job
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
     * Set jobid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Job $jobid
     * @return Slice2job
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
}