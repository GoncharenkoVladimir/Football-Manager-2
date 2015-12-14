<?php
namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Controller\Player;

class PlayerControllerTest extends TestBaseWeb
{
    public function testShow()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/players/1');
        $this->assertContains('Player1:', $crawler->filter('.baner h3')->text());

    }
}