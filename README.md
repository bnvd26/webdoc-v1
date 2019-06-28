# Webdoc-V1



## Composer
###  macOS
`brew install composer`

## Webpack
`composer require symfony\webpack-encore-bundle`
`brew install yarn`

## Init your database


`php bin/console doctrine:database:create`

### Migration 
`php bin/console make:migration`

### Fixtures for database
`php bin/console doctrine:fixtures:load`
`php bin/console doctrine:schema:update --force`

## Run the project 
`yarn encore dev --watch`
`php bin/console server:run`

You need to be here **[http://127.0.0.1:8001](http://127.0.0.1:8001/)**.






