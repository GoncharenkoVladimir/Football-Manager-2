<?php

namespace AppBundle\Controller\Trainer;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Trainers;

class TrainerController extends Controller
{
    /**
     * @Route("/trainer/{id}", name="trainer")
     * @Template()
     * @param Int $id
     * @return array
     */
    public function trainerAction($id)
    {
        $trainer = $this->getDoctrine()->getRepository('AppBundle:Trainers')->find($id);

        return ['trainer' => $trainer];
    }
}