<?php
namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PlayerControllerTest extends TestBaseWeb
{
    public function testIndex()
    {
        $this->tearDown();
        $this->setUp();
        $client = static::createClient();
        $crawler = $client->request('GET', '/player/1');
        $this->assertContains('Player1', $crawler->filter('.baner h3')->text());
    }
}