# Webdoc-V1

## need to do fixtures

webdoc using symfony &amp; vueJS

## if you have brew install composer
`brew install composer`

## Webpack
`composer require symfony/webpack-encore-bundle`
<br/>
`brew install yarn`

## Init your database
`php bin/console doctrine:database:create`

`php bin/console make:migration`

`php bin/console doctrine:schema:update --force`

## Run the project 

`yarn install`
<br/>
`yarn encore dev --watch`
<br/>
`php bin/console server:run`






