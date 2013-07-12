<?php

namespace Surf\Bundle\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rider
 *
 * @ORM\Table(name="riders")
 * @ORM\Entity
 */
class Rider
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity="Surf\Bundle\DomainBundle\Entity\Board", mappedBy="rider")
     **/
    private $boards;


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
     * Set firstName
     *
     * @param string $firstName
     * @return Rider
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Rider
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Rider
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
     * Constructor
     */
    public function __construct()
    {
        $this->boards = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add boards
     *
     * @param \Surf\Bundle\DomainBundle\Entity\Board $boards
     * @return Rider
     */
    public function addBoard(\Surf\Bundle\DomainBundle\Entity\Board $boards)
    {
        $this->boards[] = $boards;
    
        return $this;
    }

    /**
     * Remove boards
     *
     * @param \Surf\Bundle\DomainBundle\Entity\Board $boards
     */
    public function removeBoard(\Surf\Bundle\DomainBundle\Entity\Board $boards)
    {
        $this->boards->removeElement($boards);
    }

    /**
     * Get boards
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBoards()
    {
        return $this->boards;
    }
}