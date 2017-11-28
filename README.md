# salernolabs/rescuegroups

An unofficial rescuegroups.org HTTP API PHP SDK

## Installation

The easiest way to install this package is with composer:

    composer require salernolabs/rescuegroups
    
Afterwards you can either specify your API key in the constructor to the API class or the preferred method is to use the environment variable RESCUEGROUPS_API_KEY.

## Testing

You can run phpunit tests from the command line by just running phpunit but make sure you've set the API Key environment variable.

    phpunit
    
