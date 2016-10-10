# Neo4jOGMBundle
==================================================


## Neo4j OGM

This bundle lets you make use of the Neo4j Graph Database REST API inside your symfony applications.  

## Installation :
``` bash
$ composer require GensDeConfiance\Neo4jOGMManagerBundle
$ composer update
```

## Configuration (parameters.yml)
````
OGM.database_host: 127.0.0.1
OGM.database_port: 7474
OGM.database_user: neo4j
OGM.database_password: neo4j
````

## Load the bundle (AppKernel.php)
````
new GensDeConfiance\Neo4JOgmManagerBundle\Neo4jOGMManagerBundle(),
````

## Use it
````
$em = $this->container->get('OGM.manager');
````
