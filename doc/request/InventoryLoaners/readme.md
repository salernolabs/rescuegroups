# InventoryLoaners

This is the documentation for the inventoryLoaners queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-inventoryLoaners)

## InventoryLoaners\View

Performs inventoryLoaners.view query.

    $query = new \RescueGroups\Request\Objects\InventoryLoaners\View();

#### ::setInventoryLoanerID

Sets inventoryLoanerID field with a value of type integer.

    $query->setInventoryLoanerID(integer);



## InventoryLoaners\Search

Performs inventoryLoaners.search query.

    $query = new \RescueGroups\Request\Objects\InventoryLoaners\Search();

#### ::setInventoryLoanerID

Sets inventoryLoanerID field with a value of type integer.

    $query->setInventoryLoanerID(integer);

#### ::setInventoryLoanerContactID

Sets inventoryLoanerContactID field with a value of type integer.

    $query->setInventoryLoanerContactID(integer);

#### ::setInventoryLoanerItemID

Sets inventoryLoanerItemID field with a value of type integer.

    $query->setInventoryLoanerItemID(integer);

#### ::setInventoryLoanerLoanDate

Sets inventoryLoanerLoanDate field with a value of type \DateTime.

    $query->setInventoryLoanerLoanDate(\DateTime);

#### ::setInventoryLoanerLoanCondition

Sets inventoryLoanerLoanCondition field with a value of type string.

    $query->setInventoryLoanerLoanCondition(string);

#### ::setInventoryLoanerLoanConditionID

Sets inventoryLoanerLoanConditionID field with a value of type integer.

    $query->setInventoryLoanerLoanConditionID(integer);

#### ::setInventoryLoanerDueDate

Sets inventoryLoanerDueDate field with a value of type \DateTime.

    $query->setInventoryLoanerDueDate(\DateTime);

#### ::setInventoryLoanerReturnDate

Sets inventoryLoanerReturnDate field with a value of type \DateTime.

    $query->setInventoryLoanerReturnDate(\DateTime);

#### ::setInventoryLoanerReturnCondition

Sets inventoryLoanerReturnCondition field with a value of type string.

    $query->setInventoryLoanerReturnCondition(string);

#### ::setInventoryLoanerReturnConditionID

Sets inventoryLoanerReturnConditionID field with a value of type integer.

    $query->setInventoryLoanerReturnConditionID(integer);

#### ::setInventoryLoanerNotes

Sets inventoryLoanerNotes field with a value of type string.

    $query->setInventoryLoanerNotes(string);

#### ::setInventoryLoanerLastDueReminderDate

Sets inventoryLoanerLastDueReminderDate field with a value of type \DateTime.

    $query->setInventoryLoanerLastDueReminderDate(\DateTime);

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

#### ::setContactClass

Sets contactClass field with a value of type string.

    $query->setContactClass(string);

#### ::setContactSalutation

Sets contactSalutation field with a value of type string.

    $query->setContactSalutation(string);

#### ::setContactName

Sets contactName field with a value of type string.

    $query->setContactName(string);

#### ::setContactFirstname

Sets contactFirstname field with a value of type string.

    $query->setContactFirstname(string);

#### ::setContactLastname

Sets contactLastname field with a value of type string.

    $query->setContactLastname(string);

#### ::setContactTitle

Sets contactTitle field with a value of type string.

    $query->setContactTitle(string);

#### ::setContactAddress

Sets contactAddress field with a value of type string.

    $query->setContactAddress(string);

#### ::setContactCity

Sets contactCity field with a value of type string.

    $query->setContactCity(string);

#### ::setContactState

Sets contactState field with a value of type province.

    $query->setContactState(province);

#### ::setContactPostalcode

Sets contactPostalcode field with a value of type string.

    $query->setContactPostalcode(string);

#### ::setContactPlus4

Sets contactPlus4 field with a value of type string.

    $query->setContactPlus4(string);

#### ::setContactCounty

Sets contactCounty field with a value of type string.

    $query->setContactCounty(string);

#### ::setContactCountry

Sets contactCountry field with a value of type integer.

    $query->setContactCountry(integer);

#### ::setContactPhoneHome

Sets contactPhoneHome field with a value of type phone.

    $query->setContactPhoneHome(phone);

#### ::setContactPhoneWork

Sets contactPhoneWork field with a value of type phone.

    $query->setContactPhoneWork(phone);

#### ::setContactPhoneWorkExt

Sets contactPhoneWorkExt field with a value of type string.

    $query->setContactPhoneWorkExt(string);

#### ::setContactPhoneCell

Sets contactPhoneCell field with a value of type phone.

    $query->setContactPhoneCell(phone);

#### ::setContactFax

Sets contactFax field with a value of type phone.

    $query->setContactFax(phone);

#### ::setContactEmail

Sets contactEmail field with a value of type string.

    $query->setContactEmail(string);

#### ::setContactEmailAlt

Sets contactEmailAlt field with a value of type string.

    $query->setContactEmailAlt(string);

#### ::setContactEmailPager

Sets contactEmailPager field with a value of type string.

    $query->setContactEmailPager(string);

#### ::setContactCompany

Sets contactCompany field with a value of type string.

    $query->setContactCompany(string);

#### ::setContactReferredBy

Sets contactReferredBy field with a value of type string.

    $query->setContactReferredBy(string);

#### ::setContactCarrier

Sets contactCarrier field with a value of type string.

    $query->setContactCarrier(string);

#### ::setContactBounces

Sets contactBounces field with a value of type int.

    $query->setContactBounces(int);

#### ::setContactSendMail

Sets contactSendMail field with a value of type string.

    $query->setContactSendMail(string);

#### ::setContactActive

Sets contactActive field with a value of type string.

    $query->setContactActive(string);

#### ::setContactComment

Sets contactComment field with a value of type string.

    $query->setContactComment(string);

#### ::setContactTransportation

Sets contactTransportation field with a value of type string.

    $query->setContactTransportation(string);

#### ::setContactAvailability

Sets contactAvailability field with a value of type string.

    $query->setContactAvailability(string);

#### ::setContactCaretakerPublic

Sets contactCaretakerPublic field with a value of type string.

    $query->setContactCaretakerPublic(string);

#### ::setContactCoalitionMember

Sets contactCoalitionMember field with a value of type string.

    $query->setContactCoalitionMember(string);

#### ::setContactGroups

Sets contactGroups field with a value of type integer.

    $query->setContactGroups(integer);

#### ::setContactAdded

Sets contactAdded field with a value of type string.

    $query->setContactAdded(string);



## InventoryLoaners\Add

Performs inventoryLoaners.add query.

    $query = new \RescueGroups\Request\Objects\InventoryLoaners\Add();

#### ::setInventoryLoanerContactID

Sets inventoryLoanerContactID field with a value of type integer.

    $query->setInventoryLoanerContactID(integer);

#### ::setInventoryLoanerItemID

Sets inventoryLoanerItemID field with a value of type integer.

    $query->setInventoryLoanerItemID(integer);

#### ::setInventoryLoanerLoanDate

Sets inventoryLoanerLoanDate field with a value of type \DateTime.

    $query->setInventoryLoanerLoanDate(\DateTime);

#### ::setInventoryLoanerLoanConditionID

Sets inventoryLoanerLoanConditionID field with a value of type integer.

    $query->setInventoryLoanerLoanConditionID(integer);

#### ::setInventoryLoanerDueDate

Sets inventoryLoanerDueDate field with a value of type \DateTime.

    $query->setInventoryLoanerDueDate(\DateTime);

#### ::setInventoryLoanerReturnDate

Sets inventoryLoanerReturnDate field with a value of type \DateTime.

    $query->setInventoryLoanerReturnDate(\DateTime);

#### ::setInventoryLoanerReturnConditionID

Sets inventoryLoanerReturnConditionID field with a value of type integer.

    $query->setInventoryLoanerReturnConditionID(integer);

#### ::setInventoryLoanerNotes

Sets inventoryLoanerNotes field with a value of type string.

    $query->setInventoryLoanerNotes(string);



## InventoryLoaners\Edit

Performs inventoryLoaners.edit query.

    $query = new \RescueGroups\Request\Objects\InventoryLoaners\Edit();

#### ::setInventoryLoanerID

Sets inventoryLoanerID field with a value of type integer.

    $query->setInventoryLoanerID(integer);

#### ::setInventoryLoanerItemID

Sets inventoryLoanerItemID field with a value of type integer.

    $query->setInventoryLoanerItemID(integer);

#### ::setInventoryLoanerLoanDate

Sets inventoryLoanerLoanDate field with a value of type \DateTime.

    $query->setInventoryLoanerLoanDate(\DateTime);

#### ::setInventoryLoanerLoanConditionID

Sets inventoryLoanerLoanConditionID field with a value of type integer.

    $query->setInventoryLoanerLoanConditionID(integer);

#### ::setInventoryLoanerDueDate

Sets inventoryLoanerDueDate field with a value of type \DateTime.

    $query->setInventoryLoanerDueDate(\DateTime);

#### ::setInventoryLoanerReturnDate

Sets inventoryLoanerReturnDate field with a value of type \DateTime.

    $query->setInventoryLoanerReturnDate(\DateTime);

#### ::setInventoryLoanerReturnConditionID

Sets inventoryLoanerReturnConditionID field with a value of type integer.

    $query->setInventoryLoanerReturnConditionID(integer);

#### ::setInventoryLoanerNotes

Sets inventoryLoanerNotes field with a value of type string.

    $query->setInventoryLoanerNotes(string);



## InventoryLoaners\Delete

Performs inventoryLoaners.delete query.

    $query = new \RescueGroups\Request\Objects\InventoryLoaners\Delete();

#### ::setInventoryLoanerID

Sets inventoryLoanerID field with a value of type integer.

    $query->setInventoryLoanerID(integer);





