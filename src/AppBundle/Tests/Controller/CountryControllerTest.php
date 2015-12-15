<?php
namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Controller\Country;

class CountryControllerTest extends TestBaseWeb
{
    public function testIndex()
    {
        $this->setUp();

        $em = $this->client->getContainer()->get('doctrine.orm.entity_manager');
        $country = $em->getRepository('AppBundle:Country')->find(1);
        $this->assertContains('Country1', $country->getName());

        $this->tearDown();
    }
}