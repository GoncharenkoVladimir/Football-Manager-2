<?php

namespace AppBundle\Controller\Country;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Country;

class CountryController extends Controller
{
    /**
     * @Route("/country/{id}", name="country")
     * @Template()
     * @param Int $id
     * @return array
     */
    public function countryAction($id)
    {
        $country = $this->getDoctrine()->getRepository('AppBundle:Country')->find($id);
        return ['country' => $country];
    }
}