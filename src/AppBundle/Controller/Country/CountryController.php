<?php

namespace AppBundle\Controller\Country;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Controller\Country;

class CountryController extends Controller
{
    /**
     * @Route("/country", name="country")
     * @Template()
     */
    public function countryAction()
    {

    }
}