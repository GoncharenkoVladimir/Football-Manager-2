<?php

namespace Hautelook\AliceBundle\Doctrine\DataFixtures;

use Nelmio\Alice\Fixtures;

class AppFixtures extends AbstractLoader
{
    public function getFixtures()
    {
        return  array(
            __DIR__ . '/player.yml',
            __DIR__ . '/team.yml',
            __DIR__ . '/country.yml',
            __DIR__ . '/trainer.yml'

        );
    }
}
