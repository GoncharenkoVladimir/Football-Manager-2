<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="team")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TeamRepository")
 */
class Team
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idTrainer", type="integer", unique=true)
     */
    private $idTrainer;

    /**
     * @var int
     *
     * @ORM\Column(name="idCountry", type="integer", unique=true)
     */
    private $idCountry;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTrainer
     *
     * @param integer $idTrainer
     *
     * @return Team
     */
    public function setIdTrainer($idTrainer)
    {
        $this->idTrainer = $idTrainer;

        return $this;
    }

    /**
     * Get idTrainer
     *
     * @return int
     */
    public function getIdTrainer()
    {
        return $this->idTrainer;
    }

    /**
     * Set idCountry
     *
     * @param integer $idCountry
     *
     * @return Team
     */
    public function setIdCountry($idCountry)
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    /**
     * Get idCountry
     *
     * @return int
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }
}

