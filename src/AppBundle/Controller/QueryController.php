<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Player;

class QueryController extends Controller
{
    /**
     * @Route("/player-list", name="player-list")
     * @Template()
     * @return Player
     */
    public function queryAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Player');

        $query = $repository->createQueryBuilder('p')
            ->where('p.age > :age')
            ->setParameter('age', '30')
            ->orderBy('p.name', 'ASC')
            ->getQuery();

        $list = $query->getResult();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $list, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return ['pagination' => $pagination];
    }
    /**
     * @Route("/infinity-scroll", name="infinity-scroll")
     */
    public function fffAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Player');

        $query = $repository->createQueryBuilder('p')
            ->where('p.age > :age')
            ->setParameter('age', '30')
            ->orderBy('p.name', 'ASC')
            ->getQuery();

        $list = $query->getResult();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $list, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return new JsonResponse(['players' => $pagination->getItems()]);
    }
}
