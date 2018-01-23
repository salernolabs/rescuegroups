# AnimalsExports

This is the documentation for the AnimalsExports queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalsExports)

## Define
Performs animalsExports.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsExports\Define();

    $result = $api->executeRequest($query);
Performs animalsExports.define query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsExports\Define();


    $result = $api->executeRequest($query);

## GetExports
Performs animalsExports.getExports query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsExports\GetExports();


    $result = $api->executeRequest($query);

## UpdateExports
Performs animalsExports.updateExports query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsExports\UpdateExports();

    $query->setid("Export ID");
    $query->setenabled("Export enabled");

    $result = $api->executeRequest($query);

## GetSettings
Performs animalsExports.getSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsExports\GetSettings();


    $result = $api->executeRequest($query);

## UpdateSettings
Performs animalsExports.updateSettings query.

### Example Query

    $query = new \RescueGroups\Request\Objects\AnimalsExports\UpdateSettings();

    $query->setdisableAnimalExportAdopted("Prevent adopted animals from being uploaded to Petfinder");
    $query->setdisableAnimalExportCourtesy("Prevent courtesy animals from being uploaded to other sites");
    $query->setdisableAnimalExportAnimalWebPageLink("Disable the link to the animal's web page");
    $query->setdisableAnimalExportWebsiteLink("Disable the link to your organization's website");
    $query->setdisableAnimalExportAdoptionFormLink("Disable the link to your adoption form");
    $query->setenableAnimalExportDescriptionHeader("Include the Animal Description Header in the animal description");
    $query->setenableAnimalExportDescriptionFooter("Include the Animal Description Footer in the animal description");
    $query->setenableAnimalExportUniqueAnimalID("Use the RescueGroups.org Animal ID as a Unique ID");
    $query->setenableAnimalExportContactFieldFirstname("Show the foster/caretaker's first name");
    $query->setenableAnimalExportContactFieldLastname("Show the foster/caretaker's last name");
    $query->setenableAnimalExportContactFieldEmail("Show the foster/caretaker's email address");
    $query->setenableAnimalExportContactFieldPhoneHome("Show the foster/caretaker's home phone number");
    $query->setenableAnimalExportContactFieldPhoneCell("Show the foster/caretaker's cell phone number");
    $query->setsetAnimalExportYouTubeAccount("Account to use for YouTube video upload");

    $result = $api->executeRequest($query);

