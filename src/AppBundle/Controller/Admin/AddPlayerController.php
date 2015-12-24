<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Form\AddPlayer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Player;

class AddPlayerController extends Controller
{
    /**
     * @Route("/add-player", name="add-player")
     * @Template()
     */
    public function addPlayerAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $player = new Player();
        $form = $this->createForm(AddPlayer::class, $player);
        $form->handleRequest($request);

        if($request->getMethod() == Request::METHOD_POST){
            if ($form->isValid()) {
                $em->persist($player);
                $em->flush();
            }
        }
        return ['form' => $form->createView()];
    }
}
