<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Team;
use AppBundle\Entity\Players;
use AppBundle\Entity\Countries;
use AppBundle\Entity\Trainers;

class GenerateController extends Controller
{
    /**
     * @Route("/generate", name="generate")
     */
    public function generateAction()
    {
        $countries = new Countries();
        $countries -> setName('Украина');
        $countries -> setCapital('Киев');
        $countries -> setPopulation(46589048);

        $countries2 = new Countries();
        $countries2 -> setName('Украина');
        $countries2 -> setCapital('Киев');
        $countries2 -> setPopulation(46589048);
    }
}
