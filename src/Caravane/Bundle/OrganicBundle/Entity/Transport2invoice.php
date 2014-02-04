<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * transport2invoice
 *
 * @ORM\Table(name="transport2invoice")
 * @ORM\Entity
 */
class Transport2invoice
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
     * @var \Invoice
     *
     * @ORM\ManyToOne(targetEntity="Invoice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="invoiceId", referencedColumnName="id")
     * })
     */
    private $invoiceid;

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
     * @return Transport2invoice
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
     * @return Transport2invoice
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
     * Set invoiceid
     *
     * @param \Caravane\Bundle\OrganicBundle\Entity\Invoice $invoiceid
     * @return Transport2invoice
     */
    public function setInvoiceid(\Caravane\Bundle\OrganicBundle\Entity\Invoice $invoiceid = null)
    {
        $this->invoiceid = $invoiceid;

        return $this;
    }

    /**
     * Get invoiceid
     *
     * @return \Caravane\Bundle\OrganicBundle\Entity\Invoice
     */
    public function getInvoiceid()
    {
        return $this->invoiceid;
    }
}
