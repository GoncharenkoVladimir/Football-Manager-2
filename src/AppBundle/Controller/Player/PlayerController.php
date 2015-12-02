<?php

namespace AppBundle\Controller\Player;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Players;


class PlayerController extends Controller
{
    /**
     * @Route("/player/{id}", name="player")
     * @Template()
     * @param Int $id
     * @return array
     */
    public function playerAction($id)
    {
        $players = $this->generatePlayers();
        foreach ($players as $value)
        {
            /**
             * @var Players $value
             */
            if ($value->getId() == $id)
            {
                return ['player' => $value];
            }
        }
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
}