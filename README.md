# salernolabs/rescuegroups

An unofficial rescuegroups.org HTTP API PHP SDK.

Please read the RescueGroups.org API specification and documentation thoroughly before attempting to use this library. https://rescuegroups.org/services/adoptable-pet-data-http-json-api/

## Installation and Setup

The easiest way to install this package is with composer:

    composer require salernolabs/rescuegroups
    
Afterwards you can either specify your API key in the constructor to the API class or the preferred method is to use the following environment variables:

For just using public queries:

 * RESCUEGROUPS_API_KEY

For using queries that require a login also specify:

 * RESCUEGROUPS_USERNAME
 * RESCUEGROUPS_PASSWORD
 * RESCUEGROUPS_ORG_ID

## Testing

You can run phpunit tests from the command line by just running phpunit but make sure you've set the API Key environment variable.

    phpunit
    
Unless you don't have it installed on your computer, then you can just run it from the vendor folder if you've composer installed with dev dependencies.

    #From the folder you have this project check out in
    php vendor/phpunit/phpunit/phpunit