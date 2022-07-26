[![CodeFactor](https://www.codefactor.io/repository/github/swiftapi/swift-starter/badge)](https://www.codefactor.io/repository/github/swiftapi/swift-starter)
[![Version](http://poser.pugx.org/swift-api/swift-starter/version)](https://packagist.org/packages/swift-api/swift-starter)
[![Latest Unstable Version](http://poser.pugx.org/swift-api/swift-starter/v/unstable)](https://packagist.org/packages/swift-api/swift-starter)
[![PHP Version Require](http://poser.pugx.org/swift-api/swift-starter/require/php)](https://packagist.org/packages/swift-api/swift-starter)

# Getting started


## Install
https://packagist.org/packages/swift-api/swift-starter
```shell
composer create-project swift-api/swift-starter project_name
```

## Init database
Make sure to fill out login detail to a database in /etc/config/database.yaml
```yaml
connection:
    driver: mysqli
    host: localhost
    username: root
    password: ''
    database: myapp_db
    port: 3306
    prefix: prefix_
```
Init the database by running 
```shell
php bin/console database:entities:update
```

## Setup app details
Fill out /etc/config/app.yaml. Make sure to add the right baseurl, otherwise routing won't work.

## All set!
Visit your site site _app-domain_/hello-world and you should get the following response
```json
{
    "message": "Hey legend! Let's get started at https://henrivantsant.github.io/swift-docs/"
}
```

From here you can rename the references from MyApp to your own namespace and get going.
1. Rename in root services.yaml (this references to destination to the first part of the namespace)
2. Rename in App folder
3. Rename in app/config.yaml
4. Rename namespace of the HelloWorld controller or remove it
