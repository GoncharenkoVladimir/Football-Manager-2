<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Form\AddTeam;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Team;

class AddTeamController extends Controller
{
    /**
     * @Route("/add-team", name="add-team")
     * @Template()
     */
    public function addTeamAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $team = new Team();
        $form = $this->createForm(AddTeam::class, $team);
        $form->handleRequest($request);

        if($request->getMethod() == Request::METHOD_POST){
            if ($form->isValid()) {
                $em->persist($team);
                $em->flush();
            }
        }
        return ['form' => $form->createView()];
    }
}
