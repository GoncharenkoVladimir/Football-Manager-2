<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Form\Registration;
use AppBundle\Entity\User;

class SignUpController extends Controller
{
    /**
     * @Route("/registration", name="registration")
     * @Template()
     */
    public function signUpAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $user = new User();
        $form = $this->createForm(Registration::class, $user);
        $form->handleRequest($request);

        if($request->getMethod() == Request::METHOD_POST){
            if ($form->isValid()) {
                $em->persist($user);
                $em->flush();
            }
        }
        return ['form' => $form->createView()];
    }
}
