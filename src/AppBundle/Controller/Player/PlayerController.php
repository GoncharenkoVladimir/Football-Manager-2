<?php

namespace AppBundle\Controller\Player;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Player;

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
        $player = $this->getDoctrine()->getRepository('AppBundle:Player')->find($id);
        return ['player' => $player];
    }

}