<?php
namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PlayerControllerTest extends TestBaseWeb
{
    public function testShow()
    {
        $client = static::createClient();
        $em = $client->getContainer()->get('doctrine.orm.entity_manager');
        $slug = $em
            ->getRepository('AppBundle:Country')
            ->find(1);
        $crawler = $client->request('GET', "/country/{$slug}");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals(
            1,
            $crawler->filter('h1')->count()
        );
    }
}