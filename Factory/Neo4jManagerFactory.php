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
    public function createEntityManager(string $database_host = 'localhost', string $database_user = 'neo4j', string $database_password = 'neo4j', int $database_http_port = 7474, int $database_bolt_port = 7687): EntityManager
    {
        try {
            $neo4jServer = sprintf('bolt://%s:%s@%s:%d', $database_user, $database_password, $database_host, $database_bolt_port);
        } catch (\Exception $e) {
            $neo4jServer = sprintf('http://%s:%s@%s:%d', $database_user, $database_password, $database_host, $database_http_port);
        }
        $entityManager = EntityManager::create($neo4jServer);
        $entityManager->flush();

        return $entityManager;
    }
}
