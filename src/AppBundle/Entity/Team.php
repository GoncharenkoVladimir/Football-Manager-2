<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Trainers", mappedBy="team")
     */
    private $trainer;

    /**
     * @ORM\OneToOne(targetEntity="Countries", mappedBy="team")
     */
    private $country;


    /**
     * @ORM\OneToMany(targetEntity="Players", mappedBy="team")
     */
    private $players;

    public function __construct()
    {
        $this->players = new ArrayCollection();
    }

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
     * Set country
     *
     * @param Countries $country
     *
     * @return Team
     */
    public function setCountry(Countries $country)
    {

        $this->country = $country;
        if ($country) {
            $country->setTeam($this);
        }

        return $this;
    }

    /**
     * Get country
     *
     * @return Countries
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set trainers
     *
     * @param Trainers $trainer
     *
     * @return Team
     */
    public function setTrainer($trainer)
    {

        $this->trainer = $trainer;
        if ($trainer) {
            $trainer->setTeam($this);
        }

        return $this;
    }

    /**
     * Get trainer
     *
     * @return Trainers
     */
    public function getTrainer()
    {
        return $this->trainer;
    }

    /**
     * Set players
     *
     * @param Players $players
     *
     * @return Team
     */
    public function setPlayers($players)
    {

        $this->country = $players;
        if ($players) {
            $players->setTeam($this);
        }

        return $this;
    }

    /**
     * Get players
     *
     * @return Players
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Add player
     *
     * @param Players $player
     *
     * @return Team
     */
    public function addPlayer(Players $player)
    {
        $this->players[] = $player;
        if ($player) {
            $player->setTeam($this);
        }

        return $this;
    }

    /**
     * Remove player
     *
     * @param Players $player
     */
    public function removePlayer(Players $player)
    {
        $this->players->removeElement($player);
    }
}
