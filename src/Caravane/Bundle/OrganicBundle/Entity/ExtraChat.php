<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtraChat
 *
 * @ORM\Table(name="extra_chat")
 * @ORM\Entity
 */
class ExtraChat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="chatId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $chatid;

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
     * @var integer
     *
     * @ORM\Column(name="userId", type="integer", nullable=false)
     */
    private $userid;



    /**
     * Get chatid
     *
     * @return integer 
     */
    public function getChatid()
    {
        return $this->chatid;
    }

    /**
     * Set messagedate
     *
     * @param \DateTime $messagedate
     * @return ExtraChat
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
     * @return ExtraChat
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
     * @return ExtraChat
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
     * @param integer $userid
     * @return ExtraChat
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }
}