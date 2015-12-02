<?php
namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TrainerControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/trainer/1');
        $this->assertContains('Ivan Ivanov', $crawler->filter('.baner h3')->text());
    }
}