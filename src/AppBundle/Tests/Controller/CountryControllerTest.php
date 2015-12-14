<?php
namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CountryControllerTest extends TestBaseWeb
{
    public function testIndex()
    {
        $this->tearDown();
        $this->setUp();
        $client = static::createClient();
        $crawler = $client->request('GET', '/country/1');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Country1', $crawler->filter('.baner h3')->text());
    }
}