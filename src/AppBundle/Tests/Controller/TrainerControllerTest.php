<?php
namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TrainerControllerTest extends TestBaseWeb
{
    public function testIndex()
    {
        $this->tearDown();
        $this->setUp();
        $client = static::createClient();
        $crawler = $client->request('GET', '/trainer/1');
        $this->assertContains('Trainer1', $crawler->filter('.baner h3')->text());
    }
}