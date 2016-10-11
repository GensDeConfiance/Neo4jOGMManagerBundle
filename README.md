# Neo4jOGMBundle

## Neo4j OGM

This bundle lets you use the Neo4j Graph Database in your symfony3 applications.
It provides a `neo4j.manager` service which returns a manager for [`neo4j-php-ogm`](https://github.com/graphaware/neo4j-php-ogm).

## Install
```bash
$ composer require GensDeConfiance\Neo4jOGMManagerBundle
```

## Load the bundle
```php
// app/config/AppKernel.php

public function registerBundles()
{
    $bundles = [
        // ...
        new GensDeConfiance\Neo4jOGMManagerBundle\Neo4jOGMManagerBundle(),
        // ...
    ];
    // ...
}
```

## Configuration
```yaml
# app/config/parameters.yml
...
    neo4j.database_host: 127.0.0.1
    neo4j.database_http_port: 7474
    neo4j.database_bolt_port: 7687
    neo4j.database_user: neo4j
    neo4j.database_password: neo4j
```

## Use it
```php
$em = $this->container->get('neo4j.manager');
```

## Using Neo4j Bolt protocol
`Neo4j 3.0` introduced the `Bolt` which is far more performant than the REST API.
To be able to use it through PHP, you will have to install [`bcmath` extention](http://php.net/manual/en/book.bc.php).
On Debian/Ubuntu install the `php-bcmath` package :
``` bash
$ sudo apt-get install php-bcmath
```
