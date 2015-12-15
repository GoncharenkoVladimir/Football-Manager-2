<?php
namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Controller\Team;

class TeamControllerTest extends TestBaseWeb
{
    public function testIndex()
    {
        $this->setUp();

        $em = $this->client->getContainer()->get('doctrine.orm.entity_manager');
        $team = $em->getRepository('AppBundle:Team')->find(1);
        $this->assertContains('Country1', $team->getCountry()->getName());

        $this->tearDown();
    }
}