<?php

namespace AppBundle\Controller\Team;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Team;


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
        $team = $this->getDoctrine()->getRepository('AppBundle:Team')->find($id);

        return ['team' => $team];
    }

}