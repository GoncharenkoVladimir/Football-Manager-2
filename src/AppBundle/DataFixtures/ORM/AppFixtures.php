<?php

namespace Hautelook\AliceBundle\Doctrine\DataFixtures;

use Hautelook\AliceBundle\Alice\DataFixtures\Fixtures;

class AppFixtures extends AbstractLoader
{
    /**
     * Returns an array of file paths to fixtures
     *
     * @return array<string>
     */
    public function getFixtures()
    {
        $env = $this->container->get('kernel')->getEnvironment();

        if ($env == 'test') {
            return [
                __DIR__ . '/DataForTests//player.yml',
                __DIR__ . '/DataForTests//team.yml',
                __DIR__ . '/DataForTests/country.yml',
                __DIR__ . '/DataForTests/trainer.yml',
            ];
        }
        return [
            __DIR__ . '/player.yml',
            __DIR__ . '/team.yml',
            __DIR__ . '/country.yml',
            __DIR__ . '/trainer.yml'
        ];
    }
}
