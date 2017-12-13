# Partnerships

This is the documentation for the partnerships queries against the RescueGroups.org HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-partnerships)

## Partnerships\View

Performs partnerships.view query.

    $query = new \RescueGroups\Request\Objects\Partnerships\View();

#### ::setPartnershipID

Sets partnershipID field with a value of type integer.

    $query->setPartnershipID(integer);



## Partnerships\Search

Performs partnerships.search query.

    $query = new \RescueGroups\Request\Objects\Partnerships\Search();

#### ::setPartnershipID

Sets partnershipID field with a value of type integer.

    $query->setPartnershipID(integer);

#### ::setPartnershipRequestOrgID

Sets partnershipRequestOrgID field with a value of type integer.

    $query->setPartnershipRequestOrgID(integer);

#### ::setPartnershipRequestOrgName

Sets partnershipRequestOrgName field with a value of type integer.

    $query->setPartnershipRequestOrgName(integer);

#### ::setPartnershipSharingOrgID

Sets partnershipSharingOrgID field with a value of type integer.

    $query->setPartnershipSharingOrgID(integer);

#### ::setPartnershipSharingOrgName

Sets partnershipSharingOrgName field with a value of type integer.

    $query->setPartnershipSharingOrgName(integer);

#### ::setPartnershipRequestDate

Sets partnershipRequestDate field with a value of type \DateTime.

    $query->setPartnershipRequestDate(\DateTime);

#### ::setPartnershipRequestedByID

Sets partnershipRequestedByID field with a value of type integer.

    $query->setPartnershipRequestedByID(integer);

#### ::setPartnershipRequestedBy

Sets partnershipRequestedBy field with a value of type string.

    $query->setPartnershipRequestedBy(string);

#### ::setPartnershipResponseByID

Sets partnershipResponseByID field with a value of type integer.

    $query->setPartnershipResponseByID(integer);

#### ::setPartnershipResponseBy

Sets partnershipResponseBy field with a value of type string.

    $query->setPartnershipResponseBy(string);

#### ::setPartnershipStatus

Sets partnershipStatus field with a value of type string.

    $query->setPartnershipStatus(string);

#### ::setPartnershipResponseDate

Sets partnershipResponseDate field with a value of type \DateTime.

    $query->setPartnershipResponseDate(\DateTime);



## Partnerships\Request

Performs partnerships.request query.

    $query = new \RescueGroups\Request\Objects\Partnerships\Request();

#### ::setPartnershipSharingOrgID

Sets partnershipSharingOrgID field with a value of type integer.

    $query->setPartnershipSharingOrgID(integer);



## Partnerships\GetSettings

Performs partnerships.getSettings query.

    $query = new \RescueGroups\Request\Objects\Partnerships\GetSettings();



## Partnerships\UpdateSettings

Performs partnerships.updateSettings query.

    $query = new \RescueGroups\Request\Objects\Partnerships\UpdateSettings();

#### ::setEnablePartnerships

Sets enablePartnerships field with a value of type string.

    $query->setEnablePartnerships(string);

#### ::setSetPartnershipAlertEmailAddresses

Sets setPartnershipAlertEmailAddresses field with a value of type string.

    $query->setSetPartnershipAlertEmailAddresses(string);





