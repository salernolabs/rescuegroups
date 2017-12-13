# MicrochipRegistrations

This is the documentation for the microchipRegistrations queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-microchipRegistrations)

## MicrochipRegistrations\View

Performs microchipRegistrations.view query.

    $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\View();

#### ::setMicrochipRegistrationID

Sets microchipRegistrationID field with a value of type integer.

    $query->setMicrochipRegistrationID(integer);



## MicrochipRegistrations\Search

Performs microchipRegistrations.search query.

    $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\Search();

#### ::setMicrochipRegistrationID

Sets microchipRegistrationID field with a value of type integer.

    $query->setMicrochipRegistrationID(integer);

#### ::setMicrochipRegistrationCreatedDate

Sets microchipRegistrationCreatedDate field with a value of type \DateTime.

    $query->setMicrochipRegistrationCreatedDate(\DateTime);

#### ::setMicrochipRegistrationCreatedByID

Sets microchipRegistrationCreatedByID field with a value of type int.

    $query->setMicrochipRegistrationCreatedByID(int);

#### ::setMicrochipRegistrationUpdatedDate

Sets microchipRegistrationUpdatedDate field with a value of type \DateTime.

    $query->setMicrochipRegistrationUpdatedDate(\DateTime);

#### ::setMicrochipRegistrationUpdatedByID

Sets microchipRegistrationUpdatedByID field with a value of type int.

    $query->setMicrochipRegistrationUpdatedByID(int);

#### ::setMicrochipRegistrationMicrochipNumber

Sets microchipRegistrationMicrochipNumber field with a value of type microchipnumber.

    $query->setMicrochipRegistrationMicrochipNumber(microchipnumber);

#### ::setMicrochipRegistrationMicrochipVendor

Sets microchipRegistrationMicrochipVendor field with a value of type string.

    $query->setMicrochipRegistrationMicrochipVendor(string);

#### ::setMicrochipRegistrationRegistry

Sets microchipRegistrationRegistry field with a value of type string.

    $query->setMicrochipRegistrationRegistry(string);

#### ::setMicrochipRegistrationOrgID

Sets microchipRegistrationOrgID field with a value of type integer.

    $query->setMicrochipRegistrationOrgID(integer);

#### ::setMicrochipRegistrationAnimalID

Sets microchipRegistrationAnimalID field with a value of type integer.

    $query->setMicrochipRegistrationAnimalID(integer);

#### ::setMicrochipRegistrationRegistrantName

Sets microchipRegistrationRegistrantName field with a value of type string.

    $query->setMicrochipRegistrationRegistrantName(string);

#### ::setMicrochipRegistrationRegistrantFirstname

Sets microchipRegistrationRegistrantFirstname field with a value of type string.

    $query->setMicrochipRegistrationRegistrantFirstname(string);

#### ::setMicrochipRegistrationRegistrantLastname

Sets microchipRegistrationRegistrantLastname field with a value of type string.

    $query->setMicrochipRegistrationRegistrantLastname(string);

#### ::setMicrochipRegistrationRegistrantAddress

Sets microchipRegistrationRegistrantAddress field with a value of type string.

    $query->setMicrochipRegistrationRegistrantAddress(string);

#### ::setMicrochipRegistrationRegistrantCity

Sets microchipRegistrationRegistrantCity field with a value of type string.

    $query->setMicrochipRegistrationRegistrantCity(string);

#### ::setMicrochipRegistrationRegistrantState

Sets microchipRegistrationRegistrantState field with a value of type province.

    $query->setMicrochipRegistrationRegistrantState(province);

#### ::setMicrochipRegistrationRegistrantPostalcode

Sets microchipRegistrationRegistrantPostalcode field with a value of type string.

    $query->setMicrochipRegistrationRegistrantPostalcode(string);

#### ::setMicrochipRegistrationRegistrantCountry

Sets microchipRegistrationRegistrantCountry field with a value of type integer.

    $query->setMicrochipRegistrationRegistrantCountry(integer);

#### ::setMicrochipRegistrationRegistrantPrimaryPhone

Sets microchipRegistrationRegistrantPrimaryPhone field with a value of type phone.

    $query->setMicrochipRegistrationRegistrantPrimaryPhone(phone);

#### ::setMicrochipRegistrationRegistrantSecondaryPhone

Sets microchipRegistrationRegistrantSecondaryPhone field with a value of type phone.

    $query->setMicrochipRegistrationRegistrantSecondaryPhone(phone);

#### ::setMicrochipRegistrationRegistrantPrimaryEmail

Sets microchipRegistrationRegistrantPrimaryEmail field with a value of type string.

    $query->setMicrochipRegistrationRegistrantPrimaryEmail(string);

#### ::setMicrochipRegistrationRegistrantSecondaryEmail

Sets microchipRegistrationRegistrantSecondaryEmail field with a value of type string.

    $query->setMicrochipRegistrationRegistrantSecondaryEmail(string);

#### ::setMicrochipRegistrationDate

Sets microchipRegistrationDate field with a value of type \DateTime.

    $query->setMicrochipRegistrationDate(\DateTime);

#### ::setMicrochipRegistrationCode

Sets microchipRegistrationCode field with a value of type string.

    $query->setMicrochipRegistrationCode(string);

#### ::setMicrochipRegistrationComplete

Sets microchipRegistrationComplete field with a value of type string.

    $query->setMicrochipRegistrationComplete(string);



## MicrochipRegistrations\Add

Performs microchipRegistrations.add query.

    $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\Add();

#### ::setMicrochipRegistrationAnimalID

Sets microchipRegistrationAnimalID field with a value of type integer.

    $query->setMicrochipRegistrationAnimalID(integer);

#### ::setMicrochipRegistrationMicrochipNumber

Sets microchipRegistrationMicrochipNumber field with a value of type microchipnumber.

    $query->setMicrochipRegistrationMicrochipNumber(microchipnumber);

#### ::setMicrochipRegistrationMicrochipVendor

Sets microchipRegistrationMicrochipVendor field with a value of type string.

    $query->setMicrochipRegistrationMicrochipVendor(string);

#### ::setMicrochipRegistrationRegistry

Sets microchipRegistrationRegistry field with a value of type string.

    $query->setMicrochipRegistrationRegistry(string);

#### ::setMicrochipRegistrationRegistrantFirstname

Sets microchipRegistrationRegistrantFirstname field with a value of type string.

    $query->setMicrochipRegistrationRegistrantFirstname(string);

#### ::setMicrochipRegistrationRegistrantLastname

Sets microchipRegistrationRegistrantLastname field with a value of type string.

    $query->setMicrochipRegistrationRegistrantLastname(string);

#### ::setMicrochipRegistrationRegistrantAddress

Sets microchipRegistrationRegistrantAddress field with a value of type string.

    $query->setMicrochipRegistrationRegistrantAddress(string);

#### ::setMicrochipRegistrationRegistrantCity

Sets microchipRegistrationRegistrantCity field with a value of type string.

    $query->setMicrochipRegistrationRegistrantCity(string);

#### ::setMicrochipRegistrationRegistrantState

Sets microchipRegistrationRegistrantState field with a value of type province.

    $query->setMicrochipRegistrationRegistrantState(province);

#### ::setMicrochipRegistrationRegistrantPostalcode

Sets microchipRegistrationRegistrantPostalcode field with a value of type string.

    $query->setMicrochipRegistrationRegistrantPostalcode(string);

#### ::setMicrochipRegistrationRegistrantCountry

Sets microchipRegistrationRegistrantCountry field with a value of type integer.

    $query->setMicrochipRegistrationRegistrantCountry(integer);

#### ::setMicrochipRegistrationRegistrantPrimaryPhone

Sets microchipRegistrationRegistrantPrimaryPhone field with a value of type phone.

    $query->setMicrochipRegistrationRegistrantPrimaryPhone(phone);

#### ::setMicrochipRegistrationRegistrantSecondaryPhone

Sets microchipRegistrationRegistrantSecondaryPhone field with a value of type phone.

    $query->setMicrochipRegistrationRegistrantSecondaryPhone(phone);

#### ::setMicrochipRegistrationRegistrantPrimaryEmail

Sets microchipRegistrationRegistrantPrimaryEmail field with a value of type string.

    $query->setMicrochipRegistrationRegistrantPrimaryEmail(string);

#### ::setMicrochipRegistrationRegistrantSecondaryEmail

Sets microchipRegistrationRegistrantSecondaryEmail field with a value of type string.

    $query->setMicrochipRegistrationRegistrantSecondaryEmail(string);



## MicrochipRegistrations\GetSettings

Performs microchipRegistrations.getSettings query.

    $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\GetSettings();



## MicrochipRegistrations\UpdateSettings

Performs microchipRegistrations.updateSettings query.

    $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\UpdateSettings();





