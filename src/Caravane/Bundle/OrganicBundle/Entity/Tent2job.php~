<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tent2job
 *
 * @ORM\Table(name="tent2job")
 * @ORM\Entity
 */
class Tent2job
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
     * @ORM\Column(name="etat", type="string", length=100, nullable=false)
     */
    private $etat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plancher", type="boolean", nullable=false)
     */
    private $plancher;

    /**
     * @var string
     *
     * @ORM\Column(name="surfacePlancher", type="string", length=255, nullable=false)
     */
    private $surfaceplancher;

    /**
     * @var string
     *
     * @ORM\Column(name="sol", type="string", length=255, nullable=false)
     */
    private $sol;

    /**
     * @var boolean
     *
     * @ORM\Column(name="canalisation", type="boolean", nullable=false)
     */
    private $canalisation;

    /**
     * @var string
     *
     * @ORM\Column(name="other", type="text", nullable=false)
     */
    private $other;

    /**
     * @var \Job
     *
     * @ORM\ManyToOne(targetEntity="Job",inversedBy="tents2job")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jobId", referencedColumnName="id")
     * })
     */
    private $jobid;

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
     * @ORM\ManyToOne(targetEntity="Tent",inversedBy="tents2job")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tentId", referencedColumnName="id")
     * })
     */
    private $tentid;



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
     * Set etat
     *
     * @param string $etat
     * @return Tent2job
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
     * Set plancher
     *
     * @param boolean $plancher
     * @return Tent2job
     */
    public function setPlancher($plancher)
    {
        $this->plancher = $plancher;
    
        return $this;
    }

    /**
     * Get plancher
     *
     * @return boolean 
     */
    public function getPlancher()
    {
        return $this->plancher;
    }

    /**
     * Set surfaceplancher
     *
     * @param string $surfaceplancher
     * @return Tent2job
     */
    public function setSurfaceplancher($surfaceplancher)
    {
        $this->surfaceplancher = $surfaceplancher;
    
        return $this;
    }

    /**
     * Get surfaceplancher
     *
     * @return string 
     */
    public function getSurfaceplancher()
    {
        return $this->surfaceplancher;
    }

    /**
     * Set sol
     *
     * @param string $sol
     * @return Tent2job
     */
    public function setSol($sol)
    {
        $this->sol = $sol;
    
        return $this;
    }

    /**
     * Get sol
     *
     * @return string 
     */
    public function getSol()
    {
        return $this->sol;
    }

    /**
     * Set canalisation
     *
     * @param boolean $canalisation
     * @return Tent2job
     */
    public function setCanalisation($canalisation)
    {
        $this->canalisation = $canalisation;
    
        return $this;
    }

    /**
     * Get canalisation
     *
     * @return boolean 
     */
    public function getCanalisation()
    {
        return $this->canalisation;
    }

    /**
     * Set other
     *
     * @param string $other
     * @return Tent2job
     */
    public function setOther($other)
    {
        $this->other = $other;
    
        return $this;
    }

    /**
     * Get other
     *
     * @return string 
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Set jobid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Job $jobid
     * @return Tent2job
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

    /**
     * Set offreid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Offre $offreid
     * @return Tent2job
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
     * Set tentid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Tent $tentid
     * @return Tent2job
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
}