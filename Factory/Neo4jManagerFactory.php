<?php

namespace GensDeConfiance\Neo4jOGMManagerBundle\Factory;

use GraphAware\Neo4j\OGM\EntityManager;

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
        $entityManager = EntityManager::create(sprintf('bolt://%s:%s@%s:%d', $database_user, $database_password, $database_host, $database_port));
        $entityManager->flush();

        return $entityManager;
    }
}
