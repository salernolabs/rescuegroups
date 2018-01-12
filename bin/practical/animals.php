<?php

include(__DIR__ . '/../../vendor/autoload.php');

$api = new \RescueGroups\API();

$login = new \RescueGroups\Request\Actions\Login();

$api->executeRequest($login);

echo 'Getting pets...' . PHP_EOL;

$query = new \RescueGroups\Request\Objects\Animals\Search();

try
{
    $result = $api->executeRequest($query);

    print_r($result,1);
}
catch (\Throwable $exception)
{
    echo 'Exception: ' . $exception->getMessage() . PHP_EOL;
}
