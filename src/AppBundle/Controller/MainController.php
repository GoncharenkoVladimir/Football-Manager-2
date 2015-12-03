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
        $team = $this->getDoctrine();
        $teams = $team->getRepository('AppBundle:Team')->findAll();

        return ['teams' => $teams];
    }
}
