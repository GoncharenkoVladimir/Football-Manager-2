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
     * @ORM\OneToOne(targetEntity="Trainer", mappedBy="team")
     */
    private $trainer;

    /**
     * @ORM\OneToOne(targetEntity="Country", mappedBy="team")
     */
    private $country;


    /**
     * @ORM\OneToMany(targetEntity="Player", mappedBy="team")
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
     * @param Country $country
     *
     * @return Team
     */
    public function setCountry($country)
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
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set trainers
     *
     * @param Trainer $trainer
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
     * @return Trainer
     */
    public function getTrainer()
    {
        return $this->trainer;
    }

    /**
     * Set players
     *
     * @param Player $players
     *
     * @return Team
     */
    public function setPlayers($players)
    {

        $this->players = $players;
        if ($players) {
            $players->setTeam($this);
        }

        return $this;
    }

    /**
     * Get players
     *
     * @return Player
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Add player
     *
     * @param Player $player
     *
     * @return Team
     */
    public function addPlayer($player)
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
     * @param Player $player
     */
    public function removePlayer($player)
    {
        $this->players->removeElement($player);
    }
}
