<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Form\AddCountry;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Country;

class AddCountryController extends Controller
{
    /**
     * @Route("/add-country", name="add-country")
     * @Template()
     */
    public function addCountryAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $country = new Country();
        $form = $this->createForm(AddCountry::class, $country);
        $form->handleRequest($request);

        if($request->getMethod() == Request::METHOD_POST){
            if ($form->isValid()) {
                $em->persist($country);
                $em->flush();
            }
        }
        return ['form' => $form->createView()];
    }
}
