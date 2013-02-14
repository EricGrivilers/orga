<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtraTent2offre
 *
 * @ORM\Table(name="extra_tent2offre")
 * @ORM\Entity
 */
class ExtraTent2offre
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
     * @var \ExtraOffres
     *
     * @ORM\ManyToOne(targetEntity="ExtraOffres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="offreId", referencedColumnName="offreId")
     * })
     */
    private $offreid;

    /**
     * @var \ExtraTents
     *
     * @ORM\ManyToOne(targetEntity="ExtraTents")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tentId", referencedColumnName="tentId")
     * })
     */
    private $tentid;

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
     * @return ExtraTent2offre
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
     * @return ExtraTent2offre
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
     * @return ExtraTent2offre
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
     * @return ExtraTent2offre
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
     * @return ExtraTent2offre
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
     * @return ExtraTent2offre
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
     * Set offreid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\ExtraOffres $offreid
     * @return ExtraTent2offre
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

    /**
     * Set tentid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\ExtraTents $tentid
     * @return ExtraTent2offre
     */
    public function setTentid(\Caravane\Bundle\OrganicBundle\Entity\ExtraTents $tentid = null)
    {
        $this->tentid = $tentid;
    
        return $this;
    }

    /**
     * Get tentid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\ExtraTents 
     */
    public function getTentid()
    {
        return $this->tentid;
    }

    /**
     * Set jobid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\ExtraJobs $jobid
     * @return ExtraTent2offre
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
}