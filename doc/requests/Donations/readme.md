# Donations

This is the documentation for the donations queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:51:39 by the source generator in the bin subfolder.

For full documentation see https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-donations

## Donations\GetList

Performs donations.list query.

    $query = new \RescueGroups\Requests\Objects\Donations\GetList();



## Donations\View

Performs donations.view query.

    $query = new \RescueGroups\Requests\Objects\Donations\View();

#### ::setDonationID

Sets donationID field with a value of type integer.

    $query->setDonationID(integer);



## Donations\Search

Performs donations.search query.

    $query = new \RescueGroups\Requests\Objects\Donations\Search();

#### ::setDonationID

Sets donationID field with a value of type integer.

    $query->setDonationID(integer);

#### ::setDonationContactID

Sets donationContactID field with a value of type integer.

    $query->setDonationContactID(integer);

#### ::setDonationContactName

Sets donationContactName field with a value of type string.

    $query->setDonationContactName(string);

#### ::setDonationContactType

Sets donationContactType field with a value of type string.

    $query->setDonationContactType(string);

#### ::setDonationAmount

Sets donationAmount field with a value of type float.

    $query->setDonationAmount(float);

#### ::setDonationInkind

Sets donationInkind field with a value of type string.

    $query->setDonationInkind(string);

#### ::setDonationComment

Sets donationComment field with a value of type string.

    $query->setDonationComment(string);

#### ::setDonationLettersent

Sets donationLettersent field with a value of type string.

    $query->setDonationLettersent(string);

#### ::setDonationPurpose

Sets donationPurpose field with a value of type string.

    $query->setDonationPurpose(string);

#### ::setDonationDate

Sets donationDate field with a value of type \DateTime.

    $query->setDonationDate(\DateTime);



## Donations\Add

Performs donations.add query.

    $query = new \RescueGroups\Requests\Objects\Donations\Add();

#### ::setDonationContactID

Sets donationContactID field with a value of type integer.

    $query->setDonationContactID(integer);

#### ::setDonationAmount

Sets donationAmount field with a value of type float.

    $query->setDonationAmount(float);

#### ::setDonationInkind

Sets donationInkind field with a value of type string.

    $query->setDonationInkind(string);

#### ::setDonationComment

Sets donationComment field with a value of type string.

    $query->setDonationComment(string);

#### ::setDonationLettersent

Sets donationLettersent field with a value of type string.

    $query->setDonationLettersent(string);

#### ::setDonationPurpose

Sets donationPurpose field with a value of type string.

    $query->setDonationPurpose(string);

#### ::setDonationDate

Sets donationDate field with a value of type \DateTime.

    $query->setDonationDate(\DateTime);

#### ::setDonationAddDonorGroup

Sets donationAddDonorGroup field with a value of type string.

    $query->setDonationAddDonorGroup(string);



## Donations\Edit

Performs donations.edit query.

    $query = new \RescueGroups\Requests\Objects\Donations\Edit();

#### ::setDonationID

Sets donationID field with a value of type integer.

    $query->setDonationID(integer);

#### ::setDonationContactID

Sets donationContactID field with a value of type integer.

    $query->setDonationContactID(integer);

#### ::setDonationAmount

Sets donationAmount field with a value of type float.

    $query->setDonationAmount(float);

#### ::setDonationInkind

Sets donationInkind field with a value of type string.

    $query->setDonationInkind(string);

#### ::setDonationComment

Sets donationComment field with a value of type string.

    $query->setDonationComment(string);

#### ::setDonationLettersent

Sets donationLettersent field with a value of type string.

    $query->setDonationLettersent(string);

#### ::setDonationPurpose

Sets donationPurpose field with a value of type string.

    $query->setDonationPurpose(string);

#### ::setDonationDate

Sets donationDate field with a value of type \DateTime.

    $query->setDonationDate(\DateTime);



## Donations\Delete

Performs donations.delete query.

    $query = new \RescueGroups\Requests\Objects\Donations\Delete();

#### ::setDonationID

Sets donationID field with a value of type integer.

    $query->setDonationID(integer);




