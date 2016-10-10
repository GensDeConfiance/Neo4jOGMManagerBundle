<?php

namespace GensDeConfiance\Neo4jOGMManagerBundle;

use GensDeConfiance\Neo4jOGMManagerBundle\DependencyInjection\EntityManagerExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class Neo4jOGMManagerBundle extends Bundle
{
    /**
     * @return EntityManagerExtension
     */
    public function getContainerExtension() : EntityManagerExtension
    {
        return new EntityManagerExtension();
    }
}
