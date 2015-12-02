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
        $trainers = $this->generateTrainers();
        foreach ($trainers as $value)
        {
            /**
             * @var Trainers $value
             */
            if ($value->getId() == $id)
            {
                return ['trainer' => $value];
            }
        }
    }
    public function generateTrainers()
    {
        $trainer = new Trainers();
        $trainer->setId(1);
        $trainer->setName('Ivan');
        $trainer->setSecondName('Ivanov');
        $trainer->setAge(46);

        $trainer2 = new Trainers();
        $trainer2->setId(2);
        $trainer2->setName('Ivan2');
        $trainer2->setSecondName('Ivanov2');
        $trainer2->setAge(46);

        $trainer3 = new Trainers();
        $trainer3->setId(3);
        $trainer3->setName('Ivan3');
        $trainer3->setSecondName('Ivanov3');
        $trainer3->setAge(46);

        return [$trainer, $trainer2, $trainer3];
    }
}