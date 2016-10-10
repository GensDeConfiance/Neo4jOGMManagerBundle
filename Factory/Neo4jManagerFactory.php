<?php

namespace GensDeConfiance\Neo4jOGMManagerBundle\Factory;

use GraphAware\Neo4j\OGM\EntityManager;
use GraphAware\Bolt\GraphDatabase;

class Neo4jManagerFactory
{
    /**
     * @param string $database_host
     * @param string $database_user
     * @param string $database_password
     * @param string $database_port
     *
     * @return EntityManager
     */
    public function createEntityManager(string $database_host = 'localhost', string $database_user = 'neo4j', string $database_password = 'neo4j', int $database_port = 7474): EntityManager
    {
        if (function_exists('bcmod')) {
            $neo4jServer = GraphDatabase::driver(sprintf('bolt://%s:%s@%s:%d', $database_user, $database_password, $database_host, $database_port));
            $entityManager = new EntityManager($neo4jServer);
        } else {
            $neo4jServer = sprintf('http://%s:%s@%s:%d', $database_user, $database_password, $database_host, $database_port);
            $entityManager = EntityManager::create($neo4jServer);
        }

        $entityManager->flush();

        return $entityManager;
    }
}
