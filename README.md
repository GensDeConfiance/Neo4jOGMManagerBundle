# Neo4jOGMBundle


## Neo4j OGM

This bundle lets you use the Neo4j Graph Database API in your symfony3 applications.
It creates an "neo4j.manager" service which is a manager for [neo4j-php-ogm](https://github.com/graphaware/neo4j-php-ogm).

## Installation :
``` bash
$ composer require GensDeConfiance\Neo4jOGMManagerBundle
```

## Configuration (app/config/parameters.yml)
````
neo4j.database_host: 127.0.0.1
neo4j.database_port: 7474
neo4j.database_user: neo4j
neo4j.database_password: neo4j
````

## Load the bundle (app/config/AppKernel.php)
````
new GensDeConfiance\Neo4jOGMManagerBundle\Neo4jOGMManagerBundle(),
````

## Use it
````
$em = $this->container->get('neo4j.manager');
````
