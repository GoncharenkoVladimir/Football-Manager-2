<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Team;

class MainController extends Controller
{
    /**
     * @Route("/", name="/")
     * @Template()
     */
    public function homeAction()
    {
        $teames = $this->generateTeam();
        return ['teames' => $teames];
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
        $team4->setIdTrainer(2);
        $team4->setIdTeam(4);

        $team5 = new Team();
        $team5->setNameTeam('Казахстан');
        $team5->setIdTrainer(2);
        $team5->setIdTeam(5);

        $team6 = new Team();
        $team6->setNameTeam('Латвия');
        $team6->setIdTrainer(3);
        $team6->setIdTeam(6);

        return [$team, $team2, $team3, $team4, $team5, $team6];
    }
}
