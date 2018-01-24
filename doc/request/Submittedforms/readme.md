# SubmittedForms

This is the documentation for the SubmittedForms queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-submittedforms)

## Define
Performs submittedforms.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\SubmittedForms\Define();

    $result = $api->executeRequest($query);
## GetList
Performs submittedforms.list list query, typically suitable for filling HTML select fields.

### Example List Query

    $query = new \RescueGroups\Request\Objects\SubmittedForms\GetList();
    $result = $api->executeRequest($query);
## ListRecent
Performs submittedforms.listRecent query.

### Example Query

    $query = new \RescueGroups\Request\Objects\SubmittedForms\ListRecent();


    $result = $api->executeRequest($query);

## ListPending
Performs submittedforms.listPending query.

### Example Query

    $query = new \RescueGroups\Request\Objects\SubmittedForms\ListPending();


    $result = $api->executeRequest($query);

## PublicCommonSubmit
Performs submittedforms.publicCommonSubmit query.

### Example Query

    $query = new \RescueGroups\Request\Objects\SubmittedForms\PublicCommonSubmit();

    $query->setAnimalId("Animal");
    $query->setSubmitterSalutation("Salutation");
    $query->setSubmitterFirstname("First name");
    $query->setSubmitterLastname("Last name");
    $query->setSubmitterAddress("Street address");
    $query->setSubmitterCity("City");
    $query->setSubmitterState("State/Province");
    $query->setSubmitterPostalcode("Postal Code");
    $query->setSubmitterPlus4("Zip code plus 4");
    $query->setSubmitterCounty("County");
    $query->setSubmitterCountry("Country");
    $query->setSubmitterPhoneHome("Home phone number");
    $query->setSubmitterPhoneWork("Work phone number");
    $query->setSubmitterPhoneWorkExt("Work phone extension");
    $query->setSubmitterPhoneCell("Cell phone number");
    $query->setSubmitterFax("Fax number");
    $query->setSubmitterEmail("Email address");
    $query->setSubmitterEmailAlt("Alternate email address");
    $query->setSubmitterEmailPager("Pager email address");
    $query->setSubmitterReferredBy("Referred by");
    $query->setAnswers("Answers");

    $result = $api->executeRequest($query);

## Search
Performs submittedforms.search search query. This query returns an array of [\RescueGroups\Objects\SubmittedForm](../../../src/Objects/SubmittedForm.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\SubmittedForms\Search();
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
## View
Performs submittedforms.view query.

### Example Query

    $query = new \RescueGroups\Request\Objects\SubmittedForms\View();


    $result = $api->executeRequest($query);

## Edit
Performs submittedforms.edit edit query to edit an object. Uses classes of type [\RescueGroups\Objects\SubmittedForm](../../../src/Objects/SubmittedForm.php) as input to perform an edit on a record. The ID field is required to be set for this to work. You may specify multiple objects to perform multiple edits in one request.

### Example Edit Query

    $query = new \RescueGroups\Request\Objects\SubmittedForms\Edit();

    $editObject = new \RescueGroups\Objects\SubmittedForm();
    $editObject->id = "ID"
    $editObject->animalId = "Animal"
    $editObject->statusId = "Status"

    $query->updateSubmittedForm($editObject);

    $result = $api->executeRequest($query);
