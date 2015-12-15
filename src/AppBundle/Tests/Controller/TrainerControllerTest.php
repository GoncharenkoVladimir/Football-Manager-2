<?php
namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Controller\Trainer;

class TrainerControllerTest extends TestBaseWeb
{
    public function testIndex()
    {
        $this->setUp();

        $client = static::createClient();
        $crawler = $client->request('GET', '/trainer/1');
        $this->assertContains('Trainer1', $crawler->filter('.baner h3')->text());

        $this->tearDown();
    }
}