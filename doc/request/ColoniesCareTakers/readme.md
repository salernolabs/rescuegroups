# ColoniesCareTakers

This is the documentation for the ColoniesCareTakers queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-coloniesCaretakers)

## Define






Performs coloniesCaretakers.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\ColoniesCareTakers\Define();

    $result = $api->executeRequest($query);


## GetList


Performs coloniesCaretakers.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\ColoniesCareTakers\GetList();
    $result = $api->executeRequest($query);






## View







Performs coloniesCaretakers.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\ColoniesCareTakers\View();

    $result = $api->executeRequest($query);


## Search

Performs coloniesCaretakers.search search query. This query returns an array of [\RescueGroups\Objects\ColoniesCareTaker](../../src/Objects/ColoniesCareTaker.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\ColoniesCareTakers\Search();
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







## Add





Performs coloniesCaretakers.add add query to create an instance of an object. Uses special classes of type [\RescueGroups\Objects\Create\ColoniesCareTaker](../../src/Objects/ColoniesCareTaker.php) as input to create a record. There are several fields that differ from the standard edit model. The ID field is ignored. You may specify multiple objects to create multiple records in one request.

### Example Add Query

    $query = new \RescueGroups\Request\Objects\ColoniesCareTakers\Add();

    $addObject = new \RescueGroups\Objects\Create\ColoniesCareTaker();
    $addObject->caretakerContactID = "Contact"

    $query->addColoniesCareTaker($addObject);

    $result = $api->executeRequest($query);



## Delete







Performs coloniesCaretakers.delete query.

### Example Query

    $query = new \RescueGroups\Request\Objects\ColoniesCareTakers\Delete();

    $result = $api->executeRequest($query);


