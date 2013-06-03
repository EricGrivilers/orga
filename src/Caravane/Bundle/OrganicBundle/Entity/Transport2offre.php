<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transport2offre
* @ORM\Table(name="transport2offre")
 * @ORM\Entity
 */
class Transport2offre
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
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="offreId", referencedColumnName="id")
     * })
     */
    private $offreid;




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
     * @return Transport2offre
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
     * @return Transport2offre
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
     * Set offreid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Offre $offreid
     * @return Transport2offre
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
