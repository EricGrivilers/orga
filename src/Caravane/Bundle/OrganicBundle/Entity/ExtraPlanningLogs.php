<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtraPlanningLogs
 *
 * @ORM\Table(name="extra_planning_logs")
 * @ORM\Entity
 */
class ExtraPlanningLogs
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
     * @var integer
     *
     * @ORM\Column(name="jobId", type="integer", nullable=true)
     */
    private $jobid;

    /**
     * @var integer
     *
     * @ORM\Column(name="offreId", type="integer", nullable=true)
     */
    private $offreid;

    /**
     * @var string
     *
     * @ORM\Column(name="planningType", type="string", length=25, nullable=false)
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
     * @var integer
     *
     * @ORM\Column(name="userId", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="insertDate", type="datetime", nullable=false)
     */
    private $insertdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="updateBy", type="integer", nullable=false)
     */
    private $updateby;



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
     * Set jobid
     *
     * @param integer $jobid
     * @return ExtraPlanningLogs
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
     * Set offreid
     *
     * @param integer $offreid
     * @return ExtraPlanningLogs
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
     * Set planningtype
     *
     * @param string $planningtype
     * @return ExtraPlanningLogs
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
     * @return ExtraPlanningLogs
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
     * @return ExtraPlanningLogs
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
     * Set userid
     *
     * @param integer $userid
     * @return ExtraPlanningLogs
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set insertdate
     *
     * @param \DateTime $insertdate
     * @return ExtraPlanningLogs
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
     * Set updateby
     *
     * @param integer $updateby
     * @return ExtraPlanningLogs
     */
    public function setUpdateby($updateby)
    {
        $this->updateby = $updateby;
    
        return $this;
    }

    /**
     * Get updateby
     *
     * @return integer 
     */
    public function getUpdateby()
    {
        return $this->updateby;
    }
}