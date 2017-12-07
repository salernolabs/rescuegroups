# Partnerships

This is the documentation for the partnerships queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:51:45 by the source generator in the bin subfolder.

For full documentation see https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-partnerships

## Partnerships\View

Performs partnerships.view query.

    $query = new \RescueGroups\Requests\Objects\Partnerships\View();

#### ::setPartnershipID

Sets partnershipID field with a value of type integer.

    $query->setPartnershipID(integer);



## Partnerships\Search

Performs partnerships.search query.

    $query = new \RescueGroups\Requests\Objects\Partnerships\Search();

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

    $query = new \RescueGroups\Requests\Objects\Partnerships\Request();

#### ::setPartnershipSharingOrgID

Sets partnershipSharingOrgID field with a value of type integer.

    $query->setPartnershipSharingOrgID(integer);



## Partnerships\GetSettings

Performs partnerships.getSettings query.

    $query = new \RescueGroups\Requests\Objects\Partnerships\GetSettings();



## Partnerships\UpdateSettings

Performs partnerships.updateSettings query.

    $query = new \RescueGroups\Requests\Objects\Partnerships\UpdateSettings();

#### ::setEnablePartnerships

Sets enablePartnerships field with a value of type string.

    $query->setEnablePartnerships(string);

#### ::setSetPartnershipAlertEmailAddresses

Sets setPartnershipAlertEmailAddresses field with a value of type string.

    $query->setSetPartnershipAlertEmailAddresses(string);





