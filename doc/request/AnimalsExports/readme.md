# AnimalsExports

This is the documentation for the AnimalsExports queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalsExports)

## Define
Performs animalsExports.define query. This gives information about the API interface to your application. These are also used to build this SDK.

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

    $query->setId("Export ID");
    $query->setEnabled("Export enabled");

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

    $query->setDisableAnimalExportAdopted("Prevent adopted animals from being uploaded to Petfinder");
    $query->setDisableAnimalExportCourtesy("Prevent courtesy animals from being uploaded to other sites");
    $query->setDisableAnimalExportAnimalWebPageLink("Disable the link to the animal's web page");
    $query->setDisableAnimalExportWebsiteLink("Disable the link to your organization's website");
    $query->setDisableAnimalExportAdoptionFormLink("Disable the link to your adoption form");
    $query->setEnableAnimalExportDescriptionHeader("Include the Animal Description Header in the animal description");
    $query->setEnableAnimalExportDescriptionFooter("Include the Animal Description Footer in the animal description");
    $query->setEnableAnimalExportUniqueAnimalID("Use the RescueGroups.org Animal ID as a Unique ID");
    $query->setEnableAnimalExportContactFieldFirstname("Show the foster/caretaker's first name");
    $query->setEnableAnimalExportContactFieldLastname("Show the foster/caretaker's last name");
    $query->setEnableAnimalExportContactFieldEmail("Show the foster/caretaker's email address");
    $query->setEnableAnimalExportContactFieldPhoneHome("Show the foster/caretaker's home phone number");
    $query->setEnableAnimalExportContactFieldPhoneCell("Show the foster/caretaker's cell phone number");
    $query->setAnimalExportYouTubeAccount("Account to use for YouTube video upload");

    $result = $api->executeRequest($query);

