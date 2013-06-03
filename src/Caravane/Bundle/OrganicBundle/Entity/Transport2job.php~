<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * transport2job
 *
 * @ORM\Table(name="transport2job")
 * @ORM\Entity
 */
class Transport2job
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
     * @var float
     * @ORM\Column(name="quantity", type="decimal", nullable=true)
     */
    private $quantity;

    /**
     * @var float
     * @ORM\Column(name="priceht", type="decimal", nullable=true)
     */
    private $priceht;


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
     * Set quantity
     *
     * @param float $quantity
     * @return Transport2job
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set priceht
     *
     * @param float $priceht
     * @return Transport2job
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
     * Set jobid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Job $jobid
     * @return Transport2job
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
