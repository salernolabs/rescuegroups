<?php
error_reporting(E_ALL);
include(__DIR__ . '/../../vendor/autoload.php');

$api = new \RescueGroups\API();

$login = new \RescueGroups\Request\Actions\Login();

$api->executeRequest($login);

echo 'Getting pets...' . PHP_EOL;

try
{
    $query = new \RescueGroups\Request\Objects\Animals\Search();
    //$query->addFilter('animalRescueID', 'equals', 1);
    $query->addField('animalName');

    $result = $api->executeRequest($query);
}
catch (\Throwable $exception)
{
    echo 'Exception: ' . $exception->getMessage() . PHP_EOL;
    die();
}

foreach ($result->data as $animal)
{
    echo 'Animal with id ' . $animal->animalID . ' is ' . $animal->animalName . PHP_EOL;
}