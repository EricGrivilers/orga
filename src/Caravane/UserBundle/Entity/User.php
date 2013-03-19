<?php
namespace Caravane\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

use Caravane\CrmBundle\Entity\Contact;

/**
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Caravane\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;



   /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=120, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=120, nullable=true)
     */
    private $lastname;


    /**
     * @var string
     *
     * @ORM\Column(name="iso", type="string", length=3, nullable=true)
     */
    private $iso;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=10, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=100, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=30, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="phone2", type="string", length=30, nullable=true)
     */
    private $phone2;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=30, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=30, nullable=true)
     */
    private $fax;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastLog", type="datetime", nullable=true)
     */
    private $lastlog;

    /**
     * @var string
     *
     * @ORM\Column(name="browser", type="text", nullable=true)
     */
    private $browser;



    public function __construct()
    {
        parent::__construct();
    }



    public function __toString() {
        return $this->firstname." ".$this->lastname;
    }


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
     * Set firstname
     *
     * @param string $firstname
     * @return User
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
     * @return User
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
     * Set iso
     *
     * @param string $iso
     * @return User
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

        if($this->iso=='') {
            $this->iso='TMP';
        }
        return $this->iso;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * Set lastlog
     *
     * @param \DateTime $lastlog
     * @return User
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
     * @return User
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
