# AnimalsAdoptions

This is the documentation for the animalsAdoptions queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-animalsAdoptions)

## AnimalsAdoptions\GetList

Performs animalsAdoptions.list query.

    $query = new \RescueGroups\Requests\Objects\AnimalsAdoptions\GetList();



## AnimalsAdoptions\Search

Performs animalsAdoptions.search query.

    $query = new \RescueGroups\Requests\Objects\AnimalsAdoptions\Search();

#### ::setAdoptionID

Sets adoptionID field with a value of type integer.

    $query->setAdoptionID(integer);

#### ::setAdoptionAnimalID

Sets adoptionAnimalID field with a value of type integer.

    $query->setAdoptionAnimalID(integer);

#### ::setAdoptionAdopterID

Sets adoptionAdopterID field with a value of type integer.

    $query->setAdoptionAdopterID(integer);

#### ::setAdoptionLeadID

Sets adoptionLeadID field with a value of type integer.

    $query->setAdoptionLeadID(integer);

#### ::setAdoptionLead

Sets adoptionLead field with a value of type string.

    $query->setAdoptionLead(string);

#### ::setAdoptionFeeAmount

Sets adoptionFeeAmount field with a value of type float.

    $query->setAdoptionFeeAmount(float);

#### ::setAdoptionDonationAmount

Sets adoptionDonationAmount field with a value of type float.

    $query->setAdoptionDonationAmount(float);

#### ::setAdoptionDonationID

Sets adoptionDonationID field with a value of type integer.

    $query->setAdoptionDonationID(integer);

#### ::setAdoptionDate

Sets adoptionDate field with a value of type \DateTime.

    $query->setAdoptionDate(\DateTime);

#### ::setAdoptionStatusID

Sets adoptionStatusID field with a value of type integer.

    $query->setAdoptionStatusID(integer);

#### ::setAdoptionStatus

Sets adoptionStatus field with a value of type string.

    $query->setAdoptionStatus(string);

#### ::setAdoptionLetterSent

Sets adoptionLetterSent field with a value of type string.

    $query->setAdoptionLetterSent(string);

#### ::setAdoptionSubmittedformID

Sets adoptionSubmittedformID field with a value of type integer.

    $query->setAdoptionSubmittedformID(integer);

#### ::setAnimalCost

Sets animalCost field with a value of type string.

    $query->setAnimalCost(string);

#### ::setAnimalName

Sets animalName field with a value of type string.

    $query->setAnimalName(string);

#### ::setAnimalFosterID

Sets animalFosterID field with a value of type integer.

    $query->setAnimalFosterID(integer);

#### ::setAnimalFosterName

Sets animalFosterName field with a value of type string.

    $query->setAnimalFosterName(string);

#### ::setAdopterName

Sets adopterName field with a value of type string.

    $query->setAdopterName(string);

#### ::setAdopterType

Sets adopterType field with a value of type string.

    $query->setAdopterType(string);

#### ::setSubmitterName

Sets submitterName field with a value of type string.

    $query->setSubmitterName(string);



## AnimalsAdoptions\View

Performs animalsAdoptions.view query.

    $query = new \RescueGroups\Requests\Objects\AnimalsAdoptions\View();

#### ::setAdoptionID

Sets adoptionID field with a value of type integer.

    $query->setAdoptionID(integer);



## AnimalsAdoptions\Add

Performs animalsAdoptions.add query.

    $query = new \RescueGroups\Requests\Objects\AnimalsAdoptions\Add();

#### ::setAdoptionAnimalID

Sets adoptionAnimalID field with a value of type integer.

    $query->setAdoptionAnimalID(integer);

#### ::setAdoptionAdopterID

Sets adoptionAdopterID field with a value of type integer.

    $query->setAdoptionAdopterID(integer);

#### ::setAdoptionLeadID

Sets adoptionLeadID field with a value of type integer.

    $query->setAdoptionLeadID(integer);

#### ::setAdoptionFeeAmount

Sets adoptionFeeAmount field with a value of type float.

    $query->setAdoptionFeeAmount(float);

#### ::setAdoptionDonationAmount

Sets adoptionDonationAmount field with a value of type float.

    $query->setAdoptionDonationAmount(float);

#### ::setAdoptionDonationID

Sets adoptionDonationID field with a value of type integer.

    $query->setAdoptionDonationID(integer);

#### ::setAdoptionDate

Sets adoptionDate field with a value of type \DateTime.

    $query->setAdoptionDate(\DateTime);

#### ::setAdoptionSubmittedformID

Sets adoptionSubmittedformID field with a value of type integer.

    $query->setAdoptionSubmittedformID(integer);

#### ::setAdoptionStatusID

Sets adoptionStatusID field with a value of type integer.

    $query->setAdoptionStatusID(integer);

#### ::setAdoptionLetterSent

Sets adoptionLetterSent field with a value of type string.

    $query->setAdoptionLetterSent(string);

#### ::setAdoptionAddAdopterRole

Sets adoptionAddAdopterRole field with a value of type string.

    $query->setAdoptionAddAdopterRole(string);



## AnimalsAdoptions\Edit

Performs animalsAdoptions.edit query.

    $query = new \RescueGroups\Requests\Objects\AnimalsAdoptions\Edit();

#### ::setAdoptionID

Sets adoptionID field with a value of type integer.

    $query->setAdoptionID(integer);

#### ::setAdoptionAnimalID

Sets adoptionAnimalID field with a value of type integer.

    $query->setAdoptionAnimalID(integer);

#### ::setAdoptionAdopterID

Sets adoptionAdopterID field with a value of type integer.

    $query->setAdoptionAdopterID(integer);

#### ::setAdoptionLeadID

Sets adoptionLeadID field with a value of type integer.

    $query->setAdoptionLeadID(integer);

#### ::setAdoptionFeeAmount

Sets adoptionFeeAmount field with a value of type float.

    $query->setAdoptionFeeAmount(float);

#### ::setAdoptionDonationAmount

Sets adoptionDonationAmount field with a value of type float.

    $query->setAdoptionDonationAmount(float);

#### ::setAdoptionDonationID

Sets adoptionDonationID field with a value of type integer.

    $query->setAdoptionDonationID(integer);

#### ::setAdoptionDate

Sets adoptionDate field with a value of type \DateTime.

    $query->setAdoptionDate(\DateTime);

#### ::setAdoptionSubmittedformID

Sets adoptionSubmittedformID field with a value of type integer.

    $query->setAdoptionSubmittedformID(integer);

#### ::setAdoptionStatusID

Sets adoptionStatusID field with a value of type integer.

    $query->setAdoptionStatusID(integer);

#### ::setAdoptionLetterSent

Sets adoptionLetterSent field with a value of type string.

    $query->setAdoptionLetterSent(string);



## AnimalsAdoptions\Delete

Performs animalsAdoptions.delete query.

    $query = new \RescueGroups\Requests\Objects\AnimalsAdoptions\Delete();

#### ::setAdoptionID

Sets adoptionID field with a value of type integer.

    $query->setAdoptionID(integer);

#### ::setAdoptionRemoveContact

Sets adoptionRemoveContact field with a value of type string.

    $query->setAdoptionRemoveContact(string);

#### ::setAdoptionChangeAnimal

Sets adoptionChangeAnimal field with a value of type string.

    $query->setAdoptionChangeAnimal(string);

#### ::setAdoptionChangeSubmittedform

Sets adoptionChangeSubmittedform field with a value of type string.

    $query->setAdoptionChangeSubmittedform(string);

#### ::setAdoptionRemoveUser

Sets adoptionRemoveUser field with a value of type string.

    $query->setAdoptionRemoveUser(string);

#### ::setAdoptionDonationAmount

Sets adoptionDonationAmount field with a value of type float.

    $query->setAdoptionDonationAmount(float);

#### ::setAdoptionLetterSent

Sets adoptionLetterSent field with a value of type string.

    $query->setAdoptionLetterSent(string);



## AnimalsAdoptions\GetSettings

Performs animalsAdoptions.getSettings query.

    $query = new \RescueGroups\Requests\Objects\AnimalsAdoptions\GetSettings();



## AnimalsAdoptions\UpdateSettings

Performs animalsAdoptions.updateSettings query.

    $query = new \RescueGroups\Requests\Objects\AnimalsAdoptions\UpdateSettings();

#### ::setShowAdoptionsTrackingMessage

Sets showAdoptionsTrackingMessage field with a value of type string.

    $query->setShowAdoptionsTrackingMessage(string);

#### ::setShowAppPending

Sets showAppPending field with a value of type string.

    $query->setShowAppPending(string);

#### ::setShowAppPendingAdoptAnyway

Sets showAppPendingAdoptAnyway field with a value of type string.

    $query->setShowAppPendingAdoptAnyway(string);

#### ::setPreventApplicationsForPendingAnimals

Sets preventApplicationsForPendingAnimals field with a value of type string.

    $query->setPreventApplicationsForPendingAnimals(string);





