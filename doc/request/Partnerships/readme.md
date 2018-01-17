# Partnerships

This is the documentation for the Partnerships queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-partnerships)

## Define
Performs partnerships.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Partnerships\Define();

    $result = $api->executeRequest($query);
## View
Performs partnerships.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Partnerships\View();

    $query->setpartnershipID("ID");

    $result = $api->executeRequest($query);

## Search
Performs partnerships.search search query. This query returns an array of [\RescueGroups\Objects\Partnership](../../../src/Objects/Partnership.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\Partnerships\Search();
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
## Request
Performs partnerships.request query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Partnerships\Request();

    $query->setpartnershipSharingOrgID("Sharing Org");

    $result = $api->executeRequest($query);

## GetSettings
Performs partnerships.getSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Partnerships\GetSettings();


    $result = $api->executeRequest($query);

## UpdateSettings
Performs partnerships.updateSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\Partnerships\UpdateSettings();

    $query->setenablePartnerships("Enable the Partnerships feature");
    $query->setsetPartnershipAlertEmailAddresses("Partnership alert email address(es)");

    $result = $api->executeRequest($query);

