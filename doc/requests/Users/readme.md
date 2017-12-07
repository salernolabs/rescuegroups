# Users

This is the documentation for the users queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:51:45 by the source generator in the bin subfolder.

For full documentation see https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-users

## Users\GetList

Performs users.list query.

    $query = new \RescueGroups\Requests\Objects\Users\GetList();



## Users\View

Performs users.view query.

    $query = new \RescueGroups\Requests\Objects\Users\View();

#### ::setUserID

Sets userID field with a value of type integer.

    $query->setUserID(integer);



## Users\Search

Performs users.search query.

    $query = new \RescueGroups\Requests\Objects\Users\Search();

#### ::setUserID

Sets userID field with a value of type integer.

    $query->setUserID(integer);

#### ::setUserLogin

Sets userLogin field with a value of type string.

    $query->setUserLogin(string);

#### ::setUserSalutation

Sets userSalutation field with a value of type string.

    $query->setUserSalutation(string);

#### ::setUserName

Sets userName field with a value of type string.

    $query->setUserName(string);

#### ::setUserFirstname

Sets userFirstname field with a value of type string.

    $query->setUserFirstname(string);

#### ::setUserLastname

Sets userLastname field with a value of type string.

    $query->setUserLastname(string);

#### ::setUserAddress

Sets userAddress field with a value of type string.

    $query->setUserAddress(string);

#### ::setUserCity

Sets userCity field with a value of type string.

    $query->setUserCity(string);

#### ::setUserState

Sets userState field with a value of type province.

    $query->setUserState(province);

#### ::setUserPostalcode

Sets userPostalcode field with a value of type string.

    $query->setUserPostalcode(string);

#### ::setUserPlus4

Sets userPlus4 field with a value of type string.

    $query->setUserPlus4(string);

#### ::setUserCountry

Sets userCountry field with a value of type integer.

    $query->setUserCountry(integer);

#### ::setUserPhoneHome

Sets userPhoneHome field with a value of type phone.

    $query->setUserPhoneHome(phone);

#### ::setUserPhoneWork

Sets userPhoneWork field with a value of type phone.

    $query->setUserPhoneWork(phone);

#### ::setUserPhoneWorkExt

Sets userPhoneWorkExt field with a value of type string.

    $query->setUserPhoneWorkExt(string);

#### ::setUserPhoneCell

Sets userPhoneCell field with a value of type phone.

    $query->setUserPhoneCell(phone);

#### ::setUserFax

Sets userFax field with a value of type phone.

    $query->setUserFax(phone);

#### ::setUserEmail

Sets userEmail field with a value of type email.

    $query->setUserEmail(email);

#### ::setUserEmailAlt

Sets userEmailAlt field with a value of type email.

    $query->setUserEmailAlt(email);

#### ::setUserEmailPager

Sets userEmailPager field with a value of type email.

    $query->setUserEmailPager(email);

#### ::setUserContactID

Sets userContactID field with a value of type integer.

    $query->setUserContactID(integer);

#### ::setUserRegisteredDate

Sets userRegisteredDate field with a value of type \DateTime.

    $query->setUserRegisteredDate(\DateTime);

#### ::setUserLastPasswordResetDate

Sets userLastPasswordResetDate field with a value of type \DateTime.

    $query->setUserLastPasswordResetDate(\DateTime);

#### ::setUserPasswordResetCount

Sets userPasswordResetCount field with a value of type int.

    $query->setUserPasswordResetCount(int);

#### ::setUserStatus

Sets userStatus field with a value of type string.

    $query->setUserStatus(string);



## Users\Add

Performs users.add query.

    $query = new \RescueGroups\Requests\Objects\Users\Add();

#### ::setUserLogin

Sets userLogin field with a value of type string.

    $query->setUserLogin(string);

#### ::setUserPassword

Sets userPassword field with a value of type string.

    $query->setUserPassword(string);

#### ::setUserSalutation

Sets userSalutation field with a value of type string.

    $query->setUserSalutation(string);

#### ::setUserFirstname

Sets userFirstname field with a value of type string.

    $query->setUserFirstname(string);

#### ::setUserLastname

Sets userLastname field with a value of type string.

    $query->setUserLastname(string);

#### ::setUserAddress

Sets userAddress field with a value of type string.

    $query->setUserAddress(string);

#### ::setUserCity

Sets userCity field with a value of type string.

    $query->setUserCity(string);

#### ::setUserState

Sets userState field with a value of type province.

    $query->setUserState(province);

#### ::setUserPostalcode

Sets userPostalcode field with a value of type string.

    $query->setUserPostalcode(string);

#### ::setUserPlus4

Sets userPlus4 field with a value of type string.

    $query->setUserPlus4(string);

#### ::setUserCountry

Sets userCountry field with a value of type integer.

    $query->setUserCountry(integer);

#### ::setUserPhoneHome

Sets userPhoneHome field with a value of type phone.

    $query->setUserPhoneHome(phone);

#### ::setUserPhoneWork

Sets userPhoneWork field with a value of type phone.

    $query->setUserPhoneWork(phone);

#### ::setUserPhoneWorkExt

Sets userPhoneWorkExt field with a value of type string.

    $query->setUserPhoneWorkExt(string);

#### ::setUserPhoneCell

Sets userPhoneCell field with a value of type phone.

    $query->setUserPhoneCell(phone);

#### ::setUserFax

Sets userFax field with a value of type phone.

    $query->setUserFax(phone);

#### ::setUserEmail

Sets userEmail field with a value of type email.

    $query->setUserEmail(email);

#### ::setUserEmailAlt

Sets userEmailAlt field with a value of type email.

    $query->setUserEmailAlt(email);

#### ::setUserEmailPager

Sets userEmailPager field with a value of type email.

    $query->setUserEmailPager(email);

#### ::setUserContactID

Sets userContactID field with a value of type integer.

    $query->setUserContactID(integer);

#### ::setUserType

Sets userType field with a value of type string.

    $query->setUserType(string);

#### ::setUserStatus

Sets userStatus field with a value of type string.

    $query->setUserStatus(string);



## Users\Edit

Performs users.edit query.

    $query = new \RescueGroups\Requests\Objects\Users\Edit();

#### ::setUserID

Sets userID field with a value of type integer.

    $query->setUserID(integer);

#### ::setUserLogin

Sets userLogin field with a value of type string.

    $query->setUserLogin(string);

#### ::setUserPassword

Sets userPassword field with a value of type string.

    $query->setUserPassword(string);

#### ::setUserSalutation

Sets userSalutation field with a value of type string.

    $query->setUserSalutation(string);

#### ::setUserFirstname

Sets userFirstname field with a value of type string.

    $query->setUserFirstname(string);

#### ::setUserLastname

Sets userLastname field with a value of type string.

    $query->setUserLastname(string);

#### ::setUserAddress

Sets userAddress field with a value of type string.

    $query->setUserAddress(string);

#### ::setUserCity

Sets userCity field with a value of type string.

    $query->setUserCity(string);

#### ::setUserState

Sets userState field with a value of type province.

    $query->setUserState(province);

#### ::setUserPostalcode

Sets userPostalcode field with a value of type string.

    $query->setUserPostalcode(string);

#### ::setUserPlus4

Sets userPlus4 field with a value of type string.

    $query->setUserPlus4(string);

#### ::setUserCountry

Sets userCountry field with a value of type integer.

    $query->setUserCountry(integer);

#### ::setUserPhoneHome

Sets userPhoneHome field with a value of type phone.

    $query->setUserPhoneHome(phone);

#### ::setUserPhoneWork

Sets userPhoneWork field with a value of type phone.

    $query->setUserPhoneWork(phone);

#### ::setUserPhoneWorkExt

Sets userPhoneWorkExt field with a value of type string.

    $query->setUserPhoneWorkExt(string);

#### ::setUserPhoneCell

Sets userPhoneCell field with a value of type phone.

    $query->setUserPhoneCell(phone);

#### ::setUserFax

Sets userFax field with a value of type phone.

    $query->setUserFax(phone);

#### ::setUserEmail

Sets userEmail field with a value of type email.

    $query->setUserEmail(email);

#### ::setUserEmailAlt

Sets userEmailAlt field with a value of type email.

    $query->setUserEmailAlt(email);

#### ::setUserEmailPager

Sets userEmailPager field with a value of type email.

    $query->setUserEmailPager(email);

#### ::setUserContactID

Sets userContactID field with a value of type integer.

    $query->setUserContactID(integer);

#### ::setUserStatus

Sets userStatus field with a value of type string.

    $query->setUserStatus(string);





