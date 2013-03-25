<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chat
 *
 * @ORM\Table(name="chat")
 * @ORM\Entity
 */
class Chat
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
     * @var \DateTime
     *
     * @ORM\Column(name="messageDate", type="datetime", nullable=false)
     */
    private $messagedate;

    /**
     * @var string
     *
     * @ORM\Column(name="messageType", type="string", length=15, nullable=false)
     */
    private $messagetype;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="Caravane\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userId", referencedColumnName="id")
     * })
     */
    private $userid;

     /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="Caravane\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="target", referencedColumnName="id")
     * })
     */
    private $target;



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
     * Set messagedate
     *
     * @param \DateTime $messagedate
     * @return Chat
     */
    public function setMessagedate($messagedate)
    {
        $this->messagedate = $messagedate;

        return $this;
    }

    /**
     * Get messagedate
     *
     * @return \DateTime
     */
    public function getMessagedate()
    {
        return $this->messagedate;
    }

    /**
     * Set messagetype
     *
     * @param string $messagetype
     * @return Chat
     */
    public function setMessagetype($messagetype)
    {
        $this->messagetype = $messagetype;

        return $this;
    }

    /**
     * Get messagetype
     *
     * @return string
     */
    public function getMessagetype()
    {
        return $this->messagetype;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Chat
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set userid
     *
     * @param \Caravane\UserBundle\Entity\User $userid
     * @return Chat
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
     * Set target
     *
     * @param \Caravane\UserBundle\Entity\User $target
     * @return Chat
     */
    public function setTarget(\Caravane\UserBundle\Entity\User $target = null)
    {
        $this->target = $target;
    
        return $this;
    }

    /**
     * Get target
     *
     * @return \Caravane\UserBundle\Entity\User 
     */
    public function getTarget()
    {
        return $this->target;
    }
}