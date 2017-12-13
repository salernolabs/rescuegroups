# Submittedforms

This is the documentation for the submittedforms queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-submittedforms)

## Submittedforms\GetList

Performs submittedforms.list query.

    $query = new \RescueGroups\Request\Objects\Submittedforms\GetList();



## Submittedforms\ListRecent

Performs submittedforms.listRecent query.

    $query = new \RescueGroups\Request\Objects\Submittedforms\ListRecent();



## Submittedforms\ListPending

Performs submittedforms.listPending query.

    $query = new \RescueGroups\Request\Objects\Submittedforms\ListPending();



## Submittedforms\PublicCommonSubmit

Performs submittedforms.publicCommonSubmit query.

    $query = new \RescueGroups\Request\Objects\Submittedforms\PublicCommonSubmit();

#### ::setSubmittedformAnimalID

Sets submittedformAnimalID field with a value of type integer.

    $query->setSubmittedformAnimalID(integer);

#### ::setSubmitterSalutation

Sets submitterSalutation field with a value of type string.

    $query->setSubmitterSalutation(string);

#### ::setSubmitterFirstname

Sets submitterFirstname field with a value of type string.

    $query->setSubmitterFirstname(string);

#### ::setSubmitterLastname

Sets submitterLastname field with a value of type string.

    $query->setSubmitterLastname(string);

#### ::setSubmitterAddress

Sets submitterAddress field with a value of type string.

    $query->setSubmitterAddress(string);

#### ::setSubmitterCity

Sets submitterCity field with a value of type string.

    $query->setSubmitterCity(string);

#### ::setSubmitterState

Sets submitterState field with a value of type string.

    $query->setSubmitterState(string);

#### ::setSubmitterPostalcode

Sets submitterPostalcode field with a value of type string.

    $query->setSubmitterPostalcode(string);

#### ::setSubmitterPlus4

Sets submitterPlus4 field with a value of type string.

    $query->setSubmitterPlus4(string);

#### ::setSubmitterCounty

Sets submitterCounty field with a value of type string.

    $query->setSubmitterCounty(string);

#### ::setSubmitterCountry

Sets submitterCountry field with a value of type integer.

    $query->setSubmitterCountry(integer);

#### ::setSubmitterPhoneHome

Sets submitterPhoneHome field with a value of type phone.

    $query->setSubmitterPhoneHome(phone);

#### ::setSubmitterPhoneWork

Sets submitterPhoneWork field with a value of type phone.

    $query->setSubmitterPhoneWork(phone);

#### ::setSubmitterPhoneWorkExt

Sets submitterPhoneWorkExt field with a value of type string.

    $query->setSubmitterPhoneWorkExt(string);

#### ::setSubmitterPhoneCell

Sets submitterPhoneCell field with a value of type phone.

    $query->setSubmitterPhoneCell(phone);

#### ::setSubmitterFax

Sets submitterFax field with a value of type phone.

    $query->setSubmitterFax(phone);

#### ::setSubmitterEmail

Sets submitterEmail field with a value of type email.

    $query->setSubmitterEmail(email);

#### ::setSubmitterEmailAlt

Sets submitterEmailAlt field with a value of type email.

    $query->setSubmitterEmailAlt(email);

#### ::setSubmitterEmailPager

Sets submitterEmailPager field with a value of type email.

    $query->setSubmitterEmailPager(email);

#### ::setSubmitterReferredBy

Sets submitterReferredBy field with a value of type string.

    $query->setSubmitterReferredBy(string);

#### ::setSubmittedformAnswers

Sets submittedformAnswers field with a value of type string.

    $query->setSubmittedformAnswers(string);



## Submittedforms\Search

Performs submittedforms.search query.

    $query = new \RescueGroups\Request\Objects\Submittedforms\Search();

#### ::setSubmittedformID

Sets submittedformID field with a value of type integer.

    $query->setSubmittedformID(integer);

#### ::setSubmittedformFormID

Sets submittedformFormID field with a value of type integer.

    $query->setSubmittedformFormID(integer);

#### ::setSubmittedformAnimalID

Sets submittedformAnimalID field with a value of type integer.

    $query->setSubmittedformAnimalID(integer);

#### ::setSubmittedformAssignedTo

Sets submittedformAssignedTo field with a value of type string.

    $query->setSubmittedformAssignedTo(string);

#### ::setSubmittedformAssignedToID

Sets submittedformAssignedToID field with a value of type integer.

    $query->setSubmittedformAssignedToID(integer);

#### ::setSubmittedformCommentsCount

Sets submittedformCommentsCount field with a value of type int.

    $query->setSubmittedformCommentsCount(int);

#### ::setSubmittedformCommentsInline

Sets submittedformCommentsInline field with a value of type string.

    $query->setSubmittedformCommentsInline(string);

#### ::setSubmittedformCompleted

Sets submittedformCompleted field with a value of type \DateTime.

    $query->setSubmittedformCompleted(\DateTime);

#### ::setSubmittedformUpdated

Sets submittedformUpdated field with a value of type \DateTime.

    $query->setSubmittedformUpdated(\DateTime);

#### ::setSubmittedformFormName

Sets submittedformFormName field with a value of type string.

    $query->setSubmittedformFormName(string);

#### ::setSubmittedformPending

Sets submittedformPending field with a value of type string.

    $query->setSubmittedformPending(string);

#### ::setSubmittedformStatus

Sets submittedformStatus field with a value of type string.

    $query->setSubmittedformStatus(string);

#### ::setSubmittedformStatusID

Sets submittedformStatusID field with a value of type integer.

    $query->setSubmittedformStatusID(integer);

#### ::setSubmittedformAnswers

Sets submittedformAnswers field with a value of type string.

    $query->setSubmittedformAnswers(string);

#### ::setSubmitterID

Sets submitterID field with a value of type integer.

    $query->setSubmitterID(integer);

#### ::setSubmitterClass

Sets submitterClass field with a value of type string.

    $query->setSubmitterClass(string);

#### ::setSubmitterSalutation

Sets submitterSalutation field with a value of type string.

    $query->setSubmitterSalutation(string);

#### ::setSubmitterName

Sets submitterName field with a value of type string.

    $query->setSubmitterName(string);

#### ::setSubmitterFirstname

Sets submitterFirstname field with a value of type string.

    $query->setSubmitterFirstname(string);

#### ::setSubmitterLastname

Sets submitterLastname field with a value of type string.

    $query->setSubmitterLastname(string);

#### ::setSubmitterTitle

Sets submitterTitle field with a value of type string.

    $query->setSubmitterTitle(string);

#### ::setSubmitterAddress

Sets submitterAddress field with a value of type string.

    $query->setSubmitterAddress(string);

#### ::setSubmitterCity

Sets submitterCity field with a value of type string.

    $query->setSubmitterCity(string);

#### ::setSubmitterState

Sets submitterState field with a value of type string.

    $query->setSubmitterState(string);

#### ::setSubmitterPostalcode

Sets submitterPostalcode field with a value of type string.

    $query->setSubmitterPostalcode(string);

#### ::setSubmitterPlus4

Sets submitterPlus4 field with a value of type string.

    $query->setSubmitterPlus4(string);

#### ::setSubmitterCounty

Sets submitterCounty field with a value of type string.

    $query->setSubmitterCounty(string);

#### ::setSubmitterCountry

Sets submitterCountry field with a value of type integer.

    $query->setSubmitterCountry(integer);

#### ::setSubmitterPhoneHome

Sets submitterPhoneHome field with a value of type phone.

    $query->setSubmitterPhoneHome(phone);

#### ::setSubmitterPhoneWork

Sets submitterPhoneWork field with a value of type phone.

    $query->setSubmitterPhoneWork(phone);

#### ::setSubmitterPhoneWorkExt

Sets submitterPhoneWorkExt field with a value of type string.

    $query->setSubmitterPhoneWorkExt(string);

#### ::setSubmitterPhoneCell

Sets submitterPhoneCell field with a value of type phone.

    $query->setSubmitterPhoneCell(phone);

#### ::setSubmitterFax

Sets submitterFax field with a value of type phone.

    $query->setSubmitterFax(phone);

#### ::setSubmitterEmail

Sets submitterEmail field with a value of type email.

    $query->setSubmitterEmail(email);

#### ::setSubmitterEmailAlt

Sets submitterEmailAlt field with a value of type email.

    $query->setSubmitterEmailAlt(email);

#### ::setSubmitterEmailPager

Sets submitterEmailPager field with a value of type email.

    $query->setSubmitterEmailPager(email);

#### ::setSubmitterCompany

Sets submitterCompany field with a value of type string.

    $query->setSubmitterCompany(string);

#### ::setSubmitterReferredBy

Sets submitterReferredBy field with a value of type string.

    $query->setSubmitterReferredBy(string);

#### ::setSubmitterCarrier

Sets submitterCarrier field with a value of type string.

    $query->setSubmitterCarrier(string);

#### ::setSubmitterBounces

Sets submitterBounces field with a value of type int.

    $query->setSubmitterBounces(int);

#### ::setSubmitterSendMail

Sets submitterSendMail field with a value of type string.

    $query->setSubmitterSendMail(string);

#### ::setSubmitterActive

Sets submitterActive field with a value of type string.

    $query->setSubmitterActive(string);

#### ::setSubmitterComment

Sets submitterComment field with a value of type string.

    $query->setSubmitterComment(string);

#### ::setSubmitterTransportation

Sets submitterTransportation field with a value of type string.

    $query->setSubmitterTransportation(string);

#### ::setSubmitterAvailability

Sets submitterAvailability field with a value of type string.

    $query->setSubmitterAvailability(string);

#### ::setSubmitterCaretakerPublic

Sets submitterCaretakerPublic field with a value of type string.

    $query->setSubmitterCaretakerPublic(string);

#### ::setSubmitterCoalitionMember

Sets submitterCoalitionMember field with a value of type string.

    $query->setSubmitterCoalitionMember(string);



## Submittedforms\View

Performs submittedforms.view query.

    $query = new \RescueGroups\Request\Objects\Submittedforms\View();



## Submittedforms\Edit

Performs submittedforms.edit query.

    $query = new \RescueGroups\Request\Objects\Submittedforms\Edit();

#### ::setSubmittedformID

Sets submittedformID field with a value of type integer.

    $query->setSubmittedformID(integer);

#### ::setSubmittedformAnimalID

Sets submittedformAnimalID field with a value of type integer.

    $query->setSubmittedformAnimalID(integer);

#### ::setSubmittedformStatusID

Sets submittedformStatusID field with a value of type integer.

    $query->setSubmittedformStatusID(integer);





