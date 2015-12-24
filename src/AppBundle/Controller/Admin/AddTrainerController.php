<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Form\AddTrainer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Trainer;

class AddTrainerController extends Controller
{
    /**
     * @Route("/add-trainer", name="add-trainer")
     * @Template()
     */
    public function addTrainerAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $trainer = new Trainer();
        $form = $this->createForm(AddTrainer::class, $trainer);
        $form->handleRequest($request);

        if($request->getMethod() == Request::METHOD_POST){
            if ($form->isValid()) {
                $em->persist($trainer);
                $em->flush();
            }
        }
        return ['form' => $form->createView()];
    }
}
