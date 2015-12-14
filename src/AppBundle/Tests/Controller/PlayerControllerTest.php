<?php
namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PlayerControllerTest extends TestBaseWeb
{
    public function testShow()
    {
        $this->tearDown();
        $this->setUp();
        $client = static::createClient();
        $em = $client->getContainer()->get('doctrine.orm.entity_manager');
        $slug = $em
            ->getRepository('AppBundle:Player')
            ->find(1);
        $crawler = $client->request('GET', "/player/{$slug}");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals(
            1,
            $crawler->filter('.baner h3')->count()
        );
    }
}