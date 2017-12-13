# InventoryFiles

This is the documentation for the inventoryfiles queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-inventoryfiles)

## InventoryFiles\GetList

Performs inventoryfiles.list query.

    $query = new \RescueGroups\Request\Objects\InventoryFiles\GetList();



## InventoryFiles\Search

Performs inventoryfiles.search query.

    $query = new \RescueGroups\Request\Objects\InventoryFiles\Search();

#### ::setInventoryfileID

Sets inventoryfileID field with a value of type integer.

    $query->setInventoryfileID(integer);

#### ::setInventoryfileOldName

Sets inventoryfileOldName field with a value of type string.

    $query->setInventoryfileOldName(string);

#### ::setInventoryfileDescription

Sets inventoryfileDescription field with a value of type string.

    $query->setInventoryfileDescription(string);

#### ::setInventoryfileStatus

Sets inventoryfileStatus field with a value of type string.

    $query->setInventoryfileStatus(string);

#### ::setInventoryfileDisplayInline

Sets inventoryfileDisplayInline field with a value of type string.

    $query->setInventoryfileDisplayInline(string);

#### ::setInventoryfileSize

Sets inventoryfileSize field with a value of type int.

    $query->setInventoryfileSize(int);

#### ::setInventoryfileCreatedDate

Sets inventoryfileCreatedDate field with a value of type \DateTime.

    $query->setInventoryfileCreatedDate(\DateTime);

#### ::setInventoryfileItemID

Sets inventoryfileItemID field with a value of type integer.

    $query->setInventoryfileItemID(integer);

#### ::setInventoryitemName

Sets inventoryitemName field with a value of type string.

    $query->setInventoryitemName(string);

#### ::setInventoryitemDescription

Sets inventoryitemDescription field with a value of type string.

    $query->setInventoryitemDescription(string);

#### ::setInventoryitemReceivedDate

Sets inventoryitemReceivedDate field with a value of type \DateTime.

    $query->setInventoryitemReceivedDate(\DateTime);

#### ::setInventoryitemSource

Sets inventoryitemSource field with a value of type string.

    $query->setInventoryitemSource(string);

#### ::setInventoryitemCost

Sets inventoryitemCost field with a value of type float.

    $query->setInventoryitemCost(float);

#### ::setInventoryitemConditionID

Sets inventoryitemConditionID field with a value of type integer.

    $query->setInventoryitemConditionID(integer);

#### ::setInventoryitemCondition

Sets inventoryitemCondition field with a value of type string.

    $query->setInventoryitemCondition(string);

#### ::setInventoryitemCategory

Sets inventoryitemCategory field with a value of type string.

    $query->setInventoryitemCategory(string);

#### ::setInventoryitemDisposedDate

Sets inventoryitemDisposedDate field with a value of type \DateTime.

    $query->setInventoryitemDisposedDate(\DateTime);

#### ::setInventoryitemDisposedDestination

Sets inventoryitemDisposedDestination field with a value of type string.

    $query->setInventoryitemDisposedDestination(string);

#### ::setInventoryitemStorageLocation

Sets inventoryitemStorageLocation field with a value of type string.

    $query->setInventoryitemStorageLocation(string);

#### ::setInventoryitemFiles

Sets inventoryitemFiles field with a value of type int.

    $query->setInventoryitemFiles(int);

#### ::setInventoryitemLoaners

Sets inventoryitemLoaners field with a value of type int.

    $query->setInventoryitemLoaners(int);



## InventoryFiles\View

Performs inventoryfiles.view query.

    $query = new \RescueGroups\Request\Objects\InventoryFiles\View();

#### ::setInventoryfileID

Sets inventoryfileID field with a value of type integer.

    $query->setInventoryfileID(integer);



## InventoryFiles\Add

Performs inventoryfiles.add query.

    $query = new \RescueGroups\Request\Objects\InventoryFiles\Add();

#### ::setInventoryfileItemID

Sets inventoryfileItemID field with a value of type integer.

    $query->setInventoryfileItemID(integer);

#### ::setInventoryfileBinary

Sets inventoryfileBinary field with a value of type binary.

    $query->setInventoryfileBinary(binary);

#### ::setInventoryfileOldFileName

Sets inventoryfileOldFileName field with a value of type string.

    $query->setInventoryfileOldFileName(string);

#### ::setInventoryfileDescription

Sets inventoryfileDescription field with a value of type string.

    $query->setInventoryfileDescription(string);

#### ::setInventoryfileStatus

Sets inventoryfileStatus field with a value of type string.

    $query->setInventoryfileStatus(string);

#### ::setInventoryfileDisplayInline

Sets inventoryfileDisplayInline field with a value of type string.

    $query->setInventoryfileDisplayInline(string);



## InventoryFiles\Edit

Performs inventoryfiles.edit query.

    $query = new \RescueGroups\Request\Objects\InventoryFiles\Edit();

#### ::setInventoryfileID

Sets inventoryfileID field with a value of type integer.

    $query->setInventoryfileID(integer);

#### ::setInventoryfileItemID

Sets inventoryfileItemID field with a value of type integer.

    $query->setInventoryfileItemID(integer);

#### ::setInventoryfileDescription

Sets inventoryfileDescription field with a value of type string.

    $query->setInventoryfileDescription(string);

#### ::setInventoryfileStatus

Sets inventoryfileStatus field with a value of type string.

    $query->setInventoryfileStatus(string);

#### ::setInventoryfileDisplayInline

Sets inventoryfileDisplayInline field with a value of type string.

    $query->setInventoryfileDisplayInline(string);





