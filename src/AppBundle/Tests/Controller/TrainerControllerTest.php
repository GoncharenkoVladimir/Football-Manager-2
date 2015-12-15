<?php
namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Controller\Trainer;

class TrainerControllerTest extends TestBaseWeb
{
    public function testIndex()
    {
        $this->setUp();

        $em = $this->client->getContainer()->get('doctrine.orm.entity_manager');
        $trainer = $em->getRepository('AppBundle:Trainer')->find(1);
        $this->assertContains('Trainer1', $trainer->getName());

        $this->tearDown();
    }
}