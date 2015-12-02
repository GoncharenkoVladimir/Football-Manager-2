<?php

namespace AppBundle\Controller\Team;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Team;
use AppBundle\Entity\Players;
use AppBundle\Entity\Trainers;


class TeamController extends Controller
{
    /**
     * @Route("/team/{id}", name="team")
     * @Template()
     * @param Int $id
     * @return array
     */
    public function teamAction($id)
    {
        $teams = $this->generateTeam();
        $players = $this->generatePlayers();
        $trainers = $this->generateTrainers();
        $res1 = null;
        $res2 = [];
        $res3 = null;
        foreach ($teams as $value)
        {
            /**
             * @var Team $value
             */
            if ($value->getIdTeam() == $id)
            {
                $res1 = $value;
            }
        }
        foreach ($trainers as $value)
        {
            /**
             * @var Trainers $value
             */
            if ($value->getIdTeam() == $id)
            {
                $res3 = $value;
            }
        }
        foreach ($players as $value)
        {
            /**
             * @var Players $value
             */
            if ($value->getCommand() == $id)
            {
                $res2[] = $value;
            }
        }

        return ['team' => $res1, 'players' => $res2, 'trainers' => $res3];
    }

    public function generateTeam()
    {
        $team = new Team();
        $team->setNameTeam('Чехия');
        $team->setIdTrainer(1);
        $team->setIdTeam(1);

        $team2 = new Team();
        $team2->setNameTeam('Исландия');
        $team2->setIdTrainer(2);
        $team2->setIdTeam(2);

        $team3 = new Team();
        $team3->setNameTeam('Турция');
        $team3->setIdTrainer(3);
        $team3->setIdTeam(3);

        $team4 = new Team();
        $team4->setNameTeam('Нидерланды');
        $team4->setIdTrainer(4);
        $team4->setIdTeam(4);

        $team5 = new Team();
        $team5->setNameTeam('Казахстан');
        $team5->setIdTrainer(5);
        $team5->setIdTeam(5);

        $team6 = new Team();
        $team6->setNameTeam('Латвия');
        $team6->setIdTrainer(6);
        $team6->setIdTeam(6);

        return [$team, $team2, $team3, $team4, $team5, $team6];
    }
    public function generatePlayers()
    {
        $player = new Players();
        $player->setId(1);
        $player->setName('Vasiliy');
        $player->setSecondName('Pupkin');
        $player->setAge(26);
        $player->setCountry('Ukraine');
        $player->setCommand(1);
        $player->setNumber(7);

        $player2 = new Players();
        $player2->setId(2);
        $player2->setName('Vasiliy2');
        $player2->setSecondName('Pupkin');
        $player2->setAge(26);
        $player2->setCountry('Ukraine');
        $player2->setCommand(1);
        $player2->setNumber(1);

        $player3 = new Players();
        $player3->setId(3);
        $player3->setName('Vasiliy3');
        $player3->setSecondName('Pupkin');
        $player3->setAge(26);
        $player3->setCountry('Ukraine');
        $player3->setCommand(1);
        $player3->setNumber(2);

        $player4 = new Players();
        $player4->setId(4);
        $player4->setName('Vasiliy4');
        $player4->setSecondName('Pupkin');
        $player4->setAge(26);
        $player4->setCountry('Ukraine');
        $player4->setCommand(1);
        $player4->setNumber(4);

        $player5 = new Players();
        $player5->setId(5);
        $player5->setName('Vasiliy5');
        $player5->setSecondName('Pupkin');
        $player5->setAge(26);
        $player5->setCountry('Ukraine');
        $player5->setCommand(1);
        $player5->setNumber(17);

        return [$player, $player2, $player3, $player4, $player5];
    }
    public function generateTrainers()
    {
        $trainer = new Trainers();
        $trainer->setId(1);
        $trainer->setName('Ivan');
        $trainer->setSecondName('Ivanov');
        $trainer->setAge(46);
        $trainer->setIdTeam(1);

        $trainer2 = new Trainers();
        $trainer2->setId(2);
        $trainer2->setName('Ivan2');
        $trainer2->setSecondName('Ivanov2');
        $trainer2->setAge(46);
        $trainer2->setIdTeam(2);

        $trainer3 = new Trainers();
        $trainer3->setId(3);
        $trainer3->setName('Ivan3');
        $trainer3->setSecondName('Ivanov3');
        $trainer3->setAge(46);
        $trainer3->setIdTeam(3);

        return [$trainer, $trainer2, $trainer3];
    }
}