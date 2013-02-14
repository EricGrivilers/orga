<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtraPlanning2offre
 *
 * @ORM\Table(name="extra_planning2offre")
 * @ORM\Entity
 */
class ExtraPlanning2offre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="planningId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $planningid;

    /**
     * @var string
     *
     * @ORM\Column(name="planningType", type="string", length=50, nullable=false)
     */
    private $planningtype;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetime", nullable=false)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="datetime", nullable=false)
     */
    private $enddate;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=50, nullable=false)
     */
    private $etat;

    /**
     * @var \ExtraUsers
     *
     * @ORM\ManyToOne(targetEntity="ExtraUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userId", referencedColumnName="userId")
     * })
     */
    private $userid;

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
     * @var \ExtraOffres
     *
     * @ORM\ManyToOne(targetEntity="ExtraOffres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="offreId", referencedColumnName="offreId")
     * })
     */
    private $offreid;



    /**
     * Get planningid
     *
     * @return integer 
     */
    public function getPlanningid()
    {
        return $this->planningid;
    }

    /**
     * Set planningtype
     *
     * @param string $planningtype
     * @return ExtraPlanning2offre
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
     * @return ExtraPlanning2offre
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
     * @return ExtraPlanning2offre
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
     * @return ExtraPlanning2offre
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
     * @param \Caravane\Bundle\OrganicBundle\Entity\ExtraUsers $userid
     * @return ExtraPlanning2offre
     */
    public function setUserid(\Caravane\Bundle\OrganicBundle\Entity\ExtraUsers $userid = null)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\ExtraUsers 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set jobid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\ExtraJobs $jobid
     * @return ExtraPlanning2offre
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

    /**
     * Set offreid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\ExtraOffres $offreid
     * @return ExtraPlanning2offre
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
}