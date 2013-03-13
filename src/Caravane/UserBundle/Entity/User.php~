<?php
namespace Caravane\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

use Caravane\CrmBundle\Entity\Contact;

/**
 * @ORM\Entity
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
     * @ORM\OneToOne(targetEntity="Caravane\CrmBundle\Entity\Contact", mappedBy="user")
     */
    private $contact;

    private $lastname;
    private $firstname;
    private $newsletter;
    private $event;

   
    

    public function __construct()
    {
        parent::__construct();
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




    public function getFirstname() {
        return $this->firstname;
    }

    public function setFirstname($firstname) {
        $this->firstname=$firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        $this->lastname=$lastname;
    }

    public function getNewsletter() {
        return $this->newsletter;
    }

    public function setNewsletter($newsletter) {
        $this->newsletter=$newsletter;
    }

    public function setEvent($event) {
        $this->event=$event;
    }

    public function getEvent() {
        return $this->event;
    }







    /**
     * Set contact
     *
     * @param Caravane\CrmBundle\Entity\Contact $contact
     */
    public function setContact(\Caravane\CrmBundle\Entity\Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get contact
     *
     * @return Caravane\CrmBundle\Entity\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Add working_groups
     *
     * @param \Caravane\CmsBundle\Entity\WorkingGroup $workingGroups
     * @return User
     */
    public function addWorkingGroup(\Caravane\CmsBundle\Entity\WorkingGroup $workingGroups)
    {
        $this->working_groups[] = $workingGroups;
    
        return $this;
    }


}