<?php

namespace GensDeConfiance\Neo4jOGMManagerBundle;

use GensDeConfiance\Neo4jOGMBundle\DependencyInjection\EntityManagerExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class Neo4jOGMManagerBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new EntityManagerExtension();
    }
}
