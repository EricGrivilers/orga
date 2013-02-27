<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity
 */
class Document
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
     * @ORM\Column(name="linkTo", type="string", length=20, nullable=false)
     */
    private $linkto;

    /**
     * @var integer
     *
     * @ORM\Column(name="linkId", type="integer", nullable=false)
     */
    private $linkid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=7, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;



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
     * Set linkto
     *
     * @param string $linkto
     * @return Document
     */
    public function setLinkto($linkto)
    {
        $this->linkto = $linkto;

        return $this;
    }

    /**
     * Get linkto
     *
     * @return string
     */
    public function getLinkto()
    {
        return $this->linkto;
    }

    /**
     * Set linkid
     *
     * @param integer $linkid
     * @return Document
     */
    public function setLinkid($linkid)
    {
        $this->linkid = $linkid;

        return $this;
    }

    /**
     * Get linkid
     *
     * @return integer
     */
    public function getLinkid()
    {
        return $this->linkid;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Document
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Document
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
