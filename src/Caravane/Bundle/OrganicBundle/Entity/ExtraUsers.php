<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtraUsers
 *
 * @ORM\Table(name="extra_users")
 * @ORM\Entity
 */
class ExtraUsers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="userId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=120, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=120, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=150, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=128, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="iso", type="string", length=3, nullable=false)
     */
    private $iso;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=10, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=100, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=30, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="phone2", type="string", length=30, nullable=false)
     */
    private $phone2;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=30, nullable=false)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=30, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=50, nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="insertDate", type="datetime", nullable=false)
     */
    private $insertdate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="public", type="boolean", nullable=false)
     */
    private $public;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastLog", type="datetime", nullable=false)
     */
    private $lastlog;

    /**
     * @var string
     *
     * @ORM\Column(name="browser", type="text", nullable=false)
     */
    private $browser;



    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return ExtraUsers
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return ExtraUsers
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return ExtraUsers
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return ExtraUsers
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set iso
     *
     * @param string $iso
     * @return ExtraUsers
     */
    public function setIso($iso)
    {
        $this->iso = $iso;
    
        return $this;
    }

    /**
     * Get iso
     *
     * @return string 
     */
    public function getIso()
    {
        return $this->iso;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return ExtraUsers
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return ExtraUsers
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return ExtraUsers
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phone2
     *
     * @param string $phone2
     * @return ExtraUsers
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;
    
        return $this;
    }

    /**
     * Get phone2
     *
     * @return string 
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return ExtraUsers
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    
        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return ExtraUsers
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return ExtraUsers
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set insertdate
     *
     * @param \DateTime $insertdate
     * @return ExtraUsers
     */
    public function setInsertdate($insertdate)
    {
        $this->insertdate = $insertdate;
    
        return $this;
    }

    /**
     * Get insertdate
     *
     * @return \DateTime 
     */
    public function getInsertdate()
    {
        return $this->insertdate;
    }

    /**
     * Set public
     *
     * @param boolean $public
     * @return ExtraUsers
     */
    public function setPublic($public)
    {
        $this->public = $public;
    
        return $this;
    }

    /**
     * Get public
     *
     * @return boolean 
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set lastlog
     *
     * @param \DateTime $lastlog
     * @return ExtraUsers
     */
    public function setLastlog($lastlog)
    {
        $this->lastlog = $lastlog;
    
        return $this;
    }

    /**
     * Get lastlog
     *
     * @return \DateTime 
     */
    public function getLastlog()
    {
        return $this->lastlog;
    }

    /**
     * Set browser
     *
     * @param string $browser
     * @return ExtraUsers
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;
    
        return $this;
    }

    /**
     * Get browser
     *
     * @return string 
     */
    public function getBrowser()
    {
        return $this->browser;
    }
}