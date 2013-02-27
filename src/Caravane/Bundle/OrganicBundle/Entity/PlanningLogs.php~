<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanningLogs
 *
 * @ORM\Table(name="planning_logs")
 * @ORM\Entity
 */
class PlanningLogs
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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userId", referencedColumnName="id")
     * })
     */
    private $userid;



    /**
     * Get planningid
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set jobid
     *
     * @param integer $jobid
     * @return PlanningLogs
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
     * @return PlanningLogs
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
     * @return PlanningLogs
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
     * @return PlanningLogs
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
     * @return PlanningLogs
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
     * Set insertdate
     *
     * @param \DateTime $insertdate
     * @return PlanningLogs
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
     * @return PlanningLogs
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

    /**
     * Set userid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\User $userid
     * @return PlanningLogs
     */
    public function setUserid(\Caravane\Bundle\OrganicBundle\Entity\User $userid = null)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\User
     */
    public function getUserid()
    {
        return $this->userid;
    }
}
