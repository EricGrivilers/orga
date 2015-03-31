<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Caravane\Bundle\OrganicBundle\Entity\Planning;

/**
 * Planning2offre
 *
 * @ORM\Table(name="planning2offre")
 * @ORM\Entity(repositoryClass="Caravane\Bundle\OrganicBundle\Entity\Planning2OffreRepository")
 */
class Planning2offre
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
     * @ORM\Column(name="etat", type="string", length=50, nullable=true)
     */
    private $etat;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="Caravane\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userId", referencedColumnName="id")
     * })
     * @ORM\OrderBy({"firstname" = "ASC", "lastname" = "ASC"})
     */
    private $userid;


    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="offreId", referencedColumnName="id")
     * })
     */
    private $offreid;


    public function __toString() {
        return $this->planningtype;
    }
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
     * Set planningtype
     *
     * @param string $planningtype
     * @return Planning2offre
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
     * @return Planning2offre
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
     * @return Planning2offre
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
     * @return Planning2offre
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
     * @return Planning2offre
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
     * Set offreid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Offre $offreid
     * @return Planning2offre
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
