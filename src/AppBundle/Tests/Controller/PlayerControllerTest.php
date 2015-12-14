<?php

namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Controller\Player;

class PlayerControllerTest extends TestBaseWeb
{
    public function testShow()
    {
        $client = static::createClient();
        $em = $client->getContainer()->get('doctrine.orm.entity_manager');
        $player = $em->getRepository('AppBundle:Player')->find(1);
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Player1', $player->getName());
    }
}