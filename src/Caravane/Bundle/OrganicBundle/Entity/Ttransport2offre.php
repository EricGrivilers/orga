<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ttransport2offre
 */
class Ttransport2offre
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $quantity;

    /**
     * @var float
     */
    private $priceht;

    /**
     * @var \Caravane\Bundle\OrganicBundle\Entity\Offre
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
     * @return Ttransport2offre
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
     * @return Ttransport2offre
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
     * @return Ttransport2offre
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
