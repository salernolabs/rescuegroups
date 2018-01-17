# Orgs

This is the documentation for the Orgs queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-orgs)

## Define
Performs orgs.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Orgs\Define();

    $result = $api->executeRequest($query);
## GetList
Performs orgs.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\Orgs\GetList();
    $result = $api->executeRequest($query);
## PublicView
Performs orgs.publicView query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Orgs\PublicView();

    $query->setorgID("ID");

    $result = $api->executeRequest($query);

## PublicSearch
Performs orgs.publicSearch search query. This query returns an array of [\RescueGroups\Objects\Org](../../../src/Objects/Org.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\Orgs\PublicSearch();
    $query
        ->setResultStart(10)
        ->setResultLimit(20)
        ->setResultSort('objectField')
        ->setResultOrder('asc')
        ->setCalculateFoundRows(true)
        ->addFilter('someObjectField', 'equals', 33)
        ->addField('objectField')
        ->addField('someOtherObjectField');

    $result = $api->executeRequest($query);
