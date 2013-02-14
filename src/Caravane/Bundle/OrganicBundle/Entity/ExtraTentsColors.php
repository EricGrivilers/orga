<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtraTentsColors
 *
 * @ORM\Table(name="extra_tents_colors")
 * @ORM\Entity
 */
class ExtraTentsColors
{
    /**
     * @var integer
     *
     * @ORM\Column(name="colorId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $colorid;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=20, nullable=false)
     */
    private $color;



    /**
     * Get colorid
     *
     * @return integer 
     */
    public function getColorid()
    {
        return $this->colorid;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return ExtraTentsColors
     */
    public function setColor($color)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }
}