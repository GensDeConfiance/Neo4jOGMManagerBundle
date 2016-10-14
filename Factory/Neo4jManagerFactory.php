<?php

namespace GensDeConfiance\Neo4jOGMManagerBundle\Factory;

use GraphAware\Neo4j\OGM\EntityManager;

class Neo4jManagerFactory
{
    /**
     * @param string $host
     * @param string $user
     * @param string $password
     * @param int    $httpPort
     * @param int    $boltPort
     *
     * @return EntityManager
     */
    public function createEntityManager(string $host, string $user, string $password, int $httpPort, int $boltPort, string $preferred_protocol = 'bolt'): EntityManager
    {
        $dsn = sprintf(
            '%s://%s:%s@%s:%d',
            function_exists('bcmod') ? 'bolt' : 'http',
            $user,
            $password,
            $host,
            function_exists('bcmod') && $preferred_protocol === 'bolt' ? $boltPort : $httpPort
        );

        return EntityManager::create($dsn);
    }
}
