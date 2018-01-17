# salernolabs/rescuegroups

[![Latest Stable Version](https://poser.pugx.org/salernolabs/rescuegroups/v/stable)](https://packagist.org/packages/salernolabs/rescuegroups)
[![License](https://poser.pugx.org/salernolabs/rescuegroups/license)](https://packagist.org/packages/salernolabs/rescuegroups)

An unofficial rescuegroups.org HTTP API PHP SDK. This package is not stable yet and still under development. Please note much of this is automatically generated via the Define queries. Due to naming conventions the "list" actions are encapsulated in "GetList" classes because "List" is a reserved word in PHP7.

Please read the RescueGroups.org API specification and documentation thoroughly before attempting to use this library. https://rescuegroups.org/services/adoptable-pet-data-http-json-api/

[Query Documentation](doc/request/readme.md)

## Installation and Setup

The easiest way to install this package is with composer:

    composer require salernolabs/rescuegroups
    
Afterwards you can either specify your API key in the constructor to the API class or the preferred method is to use the following environment variables:

For just using public queries:

 * RESCUEGROUPS_API_KEY

For using queries that require a login you can also specify:

 * RESCUEGROUPS_USERNAME
 * RESCUEGROUPS_PASSWORD
 * RESCUEGROUPS_ORG_ID

You can instantiate the API handler in either way:

    //Use environment variables
    $api = new \RescueGroups\API();

    //Use specific api key
    $api = new \RescueGroups\API("Your API Key")

## Logging In

To make non-public/authenticated queries against the HTTP API you need to log in. You can either spoecify the environment variables or set them in the login query.

    //Use environment variables
    $login = new \RescueGroups\Request\Actions\Login();

    //Use specific login credentials
    $login = new \RescueGroups\Request\Actions\Login("Username", "Password", 1235);

    //Then just run it with the API handler
    $api->executeRequest($login);

Alternatively, if you already have a valid token and tokenHash from the Rescuegroups API, you can just call the ->setToken() function on the API handler to skip the step.

    $api->setToken('token', 'tokenHash');

## Testing

You can run phpunit tests from the command line by just running phpunit but make sure you've set the API Key environment variable.

    phpunit
    
If you don't have it installed on your computer, then you can just run it from the vendor folder if you've composer installed with dev dependencies.

    #From the folder you have this project check out in
    php vendor/phpunit/phpunit/phpunit