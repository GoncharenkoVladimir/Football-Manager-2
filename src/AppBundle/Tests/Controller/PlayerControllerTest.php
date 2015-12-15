<?php

namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Controller\Player;

class PlayerControllerTest extends TestBaseWeb
{
    public function testShow()
    {
        $this->setUp();
        $this->tearDown();

        $em = $this->client->getContainer()->get('doctrine.orm.entity_manager');
        $player = $em->getRepository('AppBundle:Player')->find(1);
        $this->assertContains('Player1', $player->getName());
    }
}