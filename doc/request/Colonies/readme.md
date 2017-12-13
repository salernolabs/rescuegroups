# Colonies

This is the documentation for the colonies queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-colonies)

## Colonies\GetList

Performs colonies.list query.

    $query = new \RescueGroups\Request\Objects\Colonies\GetList();



## Colonies\View

Performs colonies.view query.

    $query = new \RescueGroups\Request\Objects\Colonies\View();

#### ::setColonyID

Sets colonyID field with a value of type integer.

    $query->setColonyID(integer);



## Colonies\Search

Performs colonies.search query.

    $query = new \RescueGroups\Request\Objects\Colonies\Search();

#### ::setColonyID

Sets colonyID field with a value of type integer.

    $query->setColonyID(integer);

#### ::setColonyAnimals

Sets colonyAnimals field with a value of type string.

    $query->setColonyAnimals(string);

#### ::setColonyCaretakers

Sets colonyCaretakers field with a value of type string.

    $query->setColonyCaretakers(string);

#### ::setColonyLocationID

Sets colonyLocationID field with a value of type integer.

    $query->setColonyLocationID(integer);

#### ::setColonyName

Sets colonyName field with a value of type string.

    $query->setColonyName(string);

#### ::setColonyTotalAnimals

Sets colonyTotalAnimals field with a value of type string.

    $query->setColonyTotalAnimals(string);

#### ::setColonyRegisteredDate

Sets colonyRegisteredDate field with a value of type \DateTime.

    $query->setColonyRegisteredDate(\DateTime);

#### ::setColonySpecificLocation

Sets colonySpecificLocation field with a value of type string.

    $query->setColonySpecificLocation(string);

#### ::setLocationName

Sets locationName field with a value of type string.

    $query->setLocationName(string);

#### ::setLocationUrl

Sets locationUrl field with a value of type string.

    $query->setLocationUrl(string);

#### ::setLocationAddress

Sets locationAddress field with a value of type string.

    $query->setLocationAddress(string);

#### ::setLocationCity

Sets locationCity field with a value of type string.

    $query->setLocationCity(string);

#### ::setLocationState

Sets locationState field with a value of type string.

    $query->setLocationState(string);

#### ::setLocationPostalcode

Sets locationPostalcode field with a value of type string.

    $query->setLocationPostalcode(string);

#### ::setLocationCountry

Sets locationCountry field with a value of type integer.

    $query->setLocationCountry(integer);

#### ::setLocationPhone

Sets locationPhone field with a value of type string.

    $query->setLocationPhone(string);

#### ::setLocationPhoneExt

Sets locationPhoneExt field with a value of type string.

    $query->setLocationPhoneExt(string);

#### ::setLocationAnimals

Sets locationAnimals field with a value of type string.

    $query->setLocationAnimals(string);

#### ::setLocationEvents

Sets locationEvents field with a value of type string.

    $query->setLocationEvents(string);

#### ::setLocationColonies

Sets locationColonies field with a value of type string.

    $query->setLocationColonies(string);

#### ::setLocationMeetrequests

Sets locationMeetrequests field with a value of type string.

    $query->setLocationMeetrequests(string);



## Colonies\Add

Performs colonies.add query.

    $query = new \RescueGroups\Request\Objects\Colonies\Add();

#### ::setColonyName

Sets colonyName field with a value of type string.

    $query->setColonyName(string);

#### ::setColonyLocationID

Sets colonyLocationID field with a value of type integer.

    $query->setColonyLocationID(integer);

#### ::setColonyTotalAnimals

Sets colonyTotalAnimals field with a value of type string.

    $query->setColonyTotalAnimals(string);

#### ::setColonyRegisteredDate

Sets colonyRegisteredDate field with a value of type \DateTime.

    $query->setColonyRegisteredDate(\DateTime);

#### ::setColonySpecificLocation

Sets colonySpecificLocation field with a value of type string.

    $query->setColonySpecificLocation(string);



## Colonies\Edit

Performs colonies.edit query.

    $query = new \RescueGroups\Request\Objects\Colonies\Edit();

#### ::setColonyID

Sets colonyID field with a value of type integer.

    $query->setColonyID(integer);

#### ::setColonyName

Sets colonyName field with a value of type string.

    $query->setColonyName(string);

#### ::setColonyLocationID

Sets colonyLocationID field with a value of type integer.

    $query->setColonyLocationID(integer);

#### ::setColonyTotalAnimals

Sets colonyTotalAnimals field with a value of type string.

    $query->setColonyTotalAnimals(string);

#### ::setColonyRegisteredDate

Sets colonyRegisteredDate field with a value of type \DateTime.

    $query->setColonyRegisteredDate(\DateTime);

#### ::setColonySpecificLocation

Sets colonySpecificLocation field with a value of type string.

    $query->setColonySpecificLocation(string);



## Colonies\Delete

Performs colonies.delete query.

    $query = new \RescueGroups\Request\Objects\Colonies\Delete();

#### ::setColonyID

Sets colonyID field with a value of type integer.

    $query->setColonyID(integer);





