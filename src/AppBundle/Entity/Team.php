<?php

namespace AppBundle\Entity;

class Team
{
    protected $nameTeam;
    protected $teamPlayer;
    protected $idTrainer;
    protected $idTeam;

    /**
     * @return mixed
     */
    public function getNameTeam()
    {
        return $this->nameTeam;
    }

    /**
     * @param mixed $nameTeam
     */
    public function setNameTeam($nameTeam)
    {
        $this->nameTeam = $nameTeam;
    }

    /**
     * @param mixed $teamPlayer
     */
    public function setTeamPlayer($teamPlayer)
    {
        $this->teamPlayer = $teamPlayer;
    }

    /**
     * @return mixed
     */
    public function getIdTrainer()
    {
        return $this->idTrainer;
    }

    /**
     * @param mixed $idTrainer
     */
    public function setIdTrainer($idTrainer)
    {
        $this->idTrainer = $idTrainer;
    }

    /**
     * @return mixed
     */
    public function getIdTeam()
    {
        return $this->idTeam;
    }

    /**
     * @param mixed $idTeam
     */
    public function setIdTeam($idTeam)
    {
        $this->idTeam = $idTeam;
    }

    /**
     * @return array
     */
    public function getTeamPlayer()
    {
        return $this->teamPlayer;
    }

}