<?php
namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Controller\Team;

class TeamControllerTest extends TestBaseWeb
{
    public function testIndex()
    {
        $this->setUp();

        $client = static::createClient();
        $crawler = $client->request('GET', '/team/1');
        $this->assertContains('Сборная страны Country1', $crawler->filter('.baner h3')->text());

        $this->tearDown();
    }
}