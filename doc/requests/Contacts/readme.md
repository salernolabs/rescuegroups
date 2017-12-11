# Contacts

This is the documentation for the contacts queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-contacts)

## Contacts\View

Performs contacts.view query.

    $query = new \RescueGroups\Requests\Objects\Contacts\View();

#### ::setContactID

Sets contactID field with a value of type integer.

    $query->setContactID(integer);



## Contacts\GetList

Performs contacts.list query.

    $query = new \RescueGroups\Requests\Objects\Contacts\GetList();



## Contacts\ListRescues

Performs contacts.listRescues query.

    $query = new \RescueGroups\Requests\Objects\Contacts\ListRescues();



## Contacts\ListFosters

Performs contacts.listFosters query.

    $query = new \RescueGroups\Requests\Objects\Contacts\ListFosters();



## Contacts\Search

Performs contacts.search query.

    $query = new \RescueGroups\Requests\Objects\Contacts\Search();

#### ::setContactID

Sets contactID field with a value of type integer.

    $query->setContactID(integer);

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

Sets contactEmail field with a value of type email.

    $query->setContactEmail(email);

#### ::setContactEmailAlt

Sets contactEmailAlt field with a value of type email.

    $query->setContactEmailAlt(email);

#### ::setContactEmailPager

Sets contactEmailPager field with a value of type email.

    $query->setContactEmailPager(email);

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

#### ::setContactType

Sets contactType field with a value of type string.

    $query->setContactType(string);



## Contacts\Add

Performs contacts.add query.

    $query = new \RescueGroups\Requests\Objects\Contacts\Add();

#### ::setContactClass

Sets contactClass field with a value of type string.

    $query->setContactClass(string);

#### ::setContactSalutation

Sets contactSalutation field with a value of type string.

    $query->setContactSalutation(string);

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

Sets contactEmail field with a value of type email.

    $query->setContactEmail(email);

#### ::setContactEmailAlt

Sets contactEmailAlt field with a value of type email.

    $query->setContactEmailAlt(email);

#### ::setContactEmailPager

Sets contactEmailPager field with a value of type email.

    $query->setContactEmailPager(email);

#### ::setContactCompany

Sets contactCompany field with a value of type string.

    $query->setContactCompany(string);

#### ::setContactReferredBy

Sets contactReferredBy field with a value of type string.

    $query->setContactReferredBy(string);

#### ::setContactCarrier

Sets contactCarrier field with a value of type string.

    $query->setContactCarrier(string);

#### ::setContactSendMail

Sets contactSendMail field with a value of type string.

    $query->setContactSendMail(string);

#### ::setContactActive

Sets contactActive field with a value of type string.

    $query->setContactActive(string);

#### ::setContactComment

Sets contactComment field with a value of type string.

    $query->setContactComment(string);

#### ::setContactCoalitionMember

Sets contactCoalitionMember field with a value of type string.

    $query->setContactCoalitionMember(string);

#### ::setContactTransportation

Sets contactTransportation field with a value of type string.

    $query->setContactTransportation(string);

#### ::setContactAvailability

Sets contactAvailability field with a value of type string.

    $query->setContactAvailability(string);

#### ::setContactCaretakerPublic

Sets contactCaretakerPublic field with a value of type string.

    $query->setContactCaretakerPublic(string);

#### ::setContactSendInvite

Sets contactSendInvite field with a value of type string.

    $query->setContactSendInvite(string);

#### ::setContactGroups

Sets contactGroups field with a value of type integer.

    $query->setContactGroups(integer);



## Contacts\Edit

Performs contacts.edit query.

    $query = new \RescueGroups\Requests\Objects\Contacts\Edit();

#### ::setContactID

Sets contactID field with a value of type integer.

    $query->setContactID(integer);

#### ::setContactClass

Sets contactClass field with a value of type string.

    $query->setContactClass(string);

#### ::setContactSalutation

Sets contactSalutation field with a value of type string.

    $query->setContactSalutation(string);

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

Sets contactEmail field with a value of type email.

    $query->setContactEmail(email);

#### ::setContactEmailAlt

Sets contactEmailAlt field with a value of type email.

    $query->setContactEmailAlt(email);

#### ::setContactEmailPager

Sets contactEmailPager field with a value of type email.

    $query->setContactEmailPager(email);

#### ::setContactCompany

Sets contactCompany field with a value of type string.

    $query->setContactCompany(string);

#### ::setContactReferredBy

Sets contactReferredBy field with a value of type string.

    $query->setContactReferredBy(string);

#### ::setContactCarrier

Sets contactCarrier field with a value of type string.

    $query->setContactCarrier(string);

#### ::setContactSendMail

Sets contactSendMail field with a value of type string.

    $query->setContactSendMail(string);

#### ::setContactActive

Sets contactActive field with a value of type string.

    $query->setContactActive(string);

#### ::setContactComment

Sets contactComment field with a value of type string.

    $query->setContactComment(string);

#### ::setContactCoalitionMember

Sets contactCoalitionMember field with a value of type string.

    $query->setContactCoalitionMember(string);

#### ::setContactTransportation

Sets contactTransportation field with a value of type string.

    $query->setContactTransportation(string);

#### ::setContactAvailability

Sets contactAvailability field with a value of type string.

    $query->setContactAvailability(string);

#### ::setContactCaretakerPublic

Sets contactCaretakerPublic field with a value of type string.

    $query->setContactCaretakerPublic(string);

#### ::setContactGroups

Sets contactGroups field with a value of type integer.

    $query->setContactGroups(integer);



## Contacts\Delete

Performs contacts.delete query.

    $query = new \RescueGroups\Requests\Objects\Contacts\Delete();

#### ::setContactID

Sets contactID field with a value of type integer.

    $query->setContactID(integer);



## Contacts\GetSettings

Performs contacts.getSettings query.

    $query = new \RescueGroups\Requests\Objects\Contacts\GetSettings();



## Contacts\UpdateSettings

Performs contacts.updateSettings query.

    $query = new \RescueGroups\Requests\Objects\Contacts\UpdateSettings();

#### ::setEnableContactsDoNotAdoptListSharing

Sets enableContactsDoNotAdoptListSharing field with a value of type string.

    $query->setEnableContactsDoNotAdoptListSharing(string);

#### ::setEnableContactsAutoSelectRegistrationInvitation

Sets enableContactsAutoSelectRegistrationInvitation field with a value of type string.

    $query->setEnableContactsAutoSelectRegistrationInvitation(string);

#### ::setEnableContactsAutoSelectCaretakerInfoPublic

Sets enableContactsAutoSelectCaretakerInfoPublic field with a value of type string.

    $query->setEnableContactsAutoSelectCaretakerInfoPublic(string);

#### ::setEnableAddContactOnlineFormSubmission

Sets enableAddContactOnlineFormSubmission field with a value of type string.

    $query->setEnableAddContactOnlineFormSubmission(string);

#### ::setEnableContactsAddContactMeetRequest

Sets enableContactsAddContactMeetRequest field with a value of type string.

    $query->setEnableContactsAddContactMeetRequest(string);

#### ::setEnableContactsAddContactCallCreation

Sets enableContactsAddContactCallCreation field with a value of type string.

    $query->setEnableContactsAddContactCallCreation(string);

#### ::setEnableContactsAddContactAnimalSponsorship

Sets enableContactsAddContactAnimalSponsorship field with a value of type string.

    $query->setEnableContactsAddContactAnimalSponsorship(string);

#### ::setEnableContactsAddContactUserRegistration

Sets enableContactsAddContactUserRegistration field with a value of type string.

    $query->setEnableContactsAddContactUserRegistration(string);





