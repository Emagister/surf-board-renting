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
     * @ORM\ManyToOne(targetEntity="Surf\Bundle\DomainBundle\Entity\Spot", inversedBy="riders")
     *
     * @var \Surf\Bundle\DomainBundle\Entity\Spot
     */
    private $spot;


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
     * Set spot
     *
     * @param \Surf\Bundle\DomainBundle\Entity\Spot $spot
     * @return Rider
     */
    public function setSpot(\Surf\Bundle\DomainBundle\Entity\Spot $spot = null)
    {
        $this->spot = $spot;
    
        return $this;
    }

    /**
     * Get spot
     *
     * @return \Surf\Bundle\DomainBundle\Entity\Spot 
     */
    public function getSpot()
    {
        return $this->spot;
    }
}