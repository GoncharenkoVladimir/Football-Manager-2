<?php
namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CountryControllerTest extends TestBaseWeb
{
    public function testIndex()
    {
        $this->setUp();

        $client = static::createClient();
        $crawler = $client->request('GET', '/country/1');
        $this->assertContains('Country1', $crawler->filter('.baner h3')->text());

        $this->tearDown();
    }
}