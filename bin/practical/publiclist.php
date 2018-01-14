<?php
error_reporting(E_ALL);
include(__DIR__ . '/../../vendor/autoload.php');

$api = new \RescueGroups\API();

//$login = new \RescueGroups\Request\Actions\Login();

//$api->executeRequest($login);

echo 'Getting lists...' . PHP_EOL;

try
{
    $query = new \RescueGroups\Request\Objects\AnimalQualities\PublicList();

    $result = $api->executeRequest($query);
}
catch (\Throwable $exception)
{
    echo 'Exception: ' . $exception->getMessage() . PHP_EOL;
    die();
}

foreach ($result->data as $key => $value)
{
    print_r($value);die();
    echo $key . ' -> ' . $value->speciesSingular . PHP_EOL;
}
