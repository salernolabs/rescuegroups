# ContactsGroups

This is the documentation for the contactsGroups queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-contactsGroups)

## ContactsGroups\View

Performs contactsGroups.view query.

    $query = new \RescueGroups\Request\Objects\ContactsGroups\View();

#### ::setGroupID

Sets groupID field with a value of type integer.

    $query->setGroupID(integer);



## ContactsGroups\GetList

Performs contactsGroups.list query.

    $query = new \RescueGroups\Request\Objects\ContactsGroups\GetList();

#### ::setContactGroup

Sets contactGroup field with a value of type string.

    $query->setContactGroup(string);



## ContactsGroups\Search

Performs contactsGroups.search query.

    $query = new \RescueGroups\Request\Objects\ContactsGroups\Search();

#### ::setGroupID

Sets groupID field with a value of type integer.

    $query->setGroupID(integer);

#### ::setGroupName

Sets groupName field with a value of type string.

    $query->setGroupName(string);

#### ::setGroupBusiness

Sets groupBusiness field with a value of type string.

    $query->setGroupBusiness(string);

#### ::setGroupProtected

Sets groupProtected field with a value of type string.

    $query->setGroupProtected(string);



## ContactsGroups\Add

Performs contactsGroups.add query.

    $query = new \RescueGroups\Request\Objects\ContactsGroups\Add();

#### ::setGroupName

Sets groupName field with a value of type string.

    $query->setGroupName(string);

#### ::setGroupBusiness

Sets groupBusiness field with a value of type string.

    $query->setGroupBusiness(string);



## ContactsGroups\Edit

Performs contactsGroups.edit query.

    $query = new \RescueGroups\Request\Objects\ContactsGroups\Edit();

#### ::setGroupID

Sets groupID field with a value of type integer.

    $query->setGroupID(integer);

#### ::setGroupName

Sets groupName field with a value of type string.

    $query->setGroupName(string);

#### ::setGroupBusiness

Sets groupBusiness field with a value of type string.

    $query->setGroupBusiness(string);



## ContactsGroups\Delete

Performs contactsGroups.delete query.

    $query = new \RescueGroups\Request\Objects\ContactsGroups\Delete();

#### ::setGroupID

Sets groupID field with a value of type integer.

    $query->setGroupID(integer);





