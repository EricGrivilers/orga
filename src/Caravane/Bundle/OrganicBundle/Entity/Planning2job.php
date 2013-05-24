<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Caravane\Bundle\OrganicBundle\Entity\Planning;

/**
 * Planning2job
 *
 * @ORM\Table(name="planning2job")
 * @ORM\Entity
 */
class Planning2job
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
     * @var string
     *
     * @ORM\Column(name="planningType", type="string", length=50, nullable=false)
     */
    private $planningtype;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetime", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="datetime", nullable=true)
     */
    private $enddate;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=50, nullable=false)
     */
    private $etat;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="Caravane\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userId", referencedColumnName="id")
     * })
     */
    private $userid;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Job", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jobId", referencedColumnName="id")
     * })
     */
    private $jobid;


     public function __toString() {
        return $this->planningtype;
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
     * Set planningtype
     *
     * @param string $planningtype
     * @return Planning2job
     */
    public function setPlanningtype($planningtype)
    {
        $this->planningtype = $planningtype;
    
        return $this;
    }

    /**
     * Get planningtype
     *
     * @return string 
     */
    public function getPlanningtype()
    {
        return $this->planningtype;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return Planning2job
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;
    
        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     * @return Planning2job
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;
    
        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime 
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Planning2job
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
     * Set userid
     *
     * @param \Caravane\UserBundle\Entity\User $userid
     * @return Planning2job
     */
    public function setUserid(\Caravane\UserBundle\Entity\User $userid = null)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return \Caravane\UserBundle\Entity\User 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set jobid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Job $jobid
     * @return Planning2job
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
