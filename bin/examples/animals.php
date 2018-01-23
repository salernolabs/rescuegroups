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
    $query->addFilter(\RescueGroups\Request\Objects\Animals\Search::FIELD_SPECIES, 'equals', 'dog');
    $query
        ->addField(\RescueGroups\Request\Objects\Animals\Search::FIELD_NAME)
        ->addField(\RescueGroups\Request\Objects\Animals\Search::FIELD_SPECIES_ID)
        ->addField(\RescueGroups\Request\Objects\Animals\Search::FIELD_DESCRIPTION);

    $result = $api->executeRequest($query);
}
catch (\Throwable $exception)
{
    echo 'Exception: ' . $exception->getMessage() . PHP_EOL;
    die();
}

foreach ($result->data as $animal)
{
    /**
     * @var \RescueGroups\Objects\Animal $animal
     */
    echo 'Animal with id ' . $animal->id . ' is ' . $animal->name . ', a ' . $animal->speciesId . PHP_EOL . trim($animal->description) . PHP_EOL . PHP_EOL;
}