<?php

namespace Surf\Bundle\DomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Spot
 *
 * @ORM\Table(name="spots")
 * @ORM\Entity
 */
class Spot
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="difficulty", type="smallint")
     */
    private $difficulty;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="decimal", scale=10, precision=6)
     */
    private $longitude;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="decimal", scale=10, precision=6)
     */
    private $latitude;


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
     * Set name
     *
     * @param string $name
     * @return Spot
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set difficulty
     *
     * @param integer $difficulty
     * @return Spot
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;
    
        return $this;
    }

    /**
     * Get difficulty
     *
     * @return integer 
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Spot
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    
        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Spot
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    
        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
}
