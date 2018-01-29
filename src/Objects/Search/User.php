<?php
/**
 * User Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class User extends \RescueGroups\Objects\User implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Name
     *
     * @var string
     */
    public $name = null;

    /**
     * Registration date
     *
     * @var \DateTime
     */
    public $registeredDate = null;

    /**
     * Last password reset date
     *
     * @var \DateTime
     */
    public $lastPasswordResetDate = null;

    /**
     * Password reset count
     *
     * @var string
     */
    public $passwordResetCount = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'userID' => 'id',
            'userLogin' => 'login',
            'userSalutation' => 'salutation',
            'userName' => 'name',
            'userFirstname' => 'firstname',
            'userLastname' => 'lastname',
            'userAddress' => 'address',
            'userCity' => 'city',
            'userState' => 'state',
            'userPostalcode' => 'postalcode',
            'userPlus4' => 'plus4',
            'userCountry' => 'country',
            'userPhoneHome' => 'phoneHome',
            'userPhoneWork' => 'phoneWork',
            'userPhoneWorkExt' => 'phoneWorkExt',
            'userPhoneCell' => 'phoneCell',
            'userFax' => 'fax',
            'userEmail' => 'email',
            'userEmailAlt' => 'emailAlt',
            'userEmailPager' => 'emailPager',
            'userContactID' => 'contactId',
            'userRegisteredDate' => 'registeredDate',
            'userLastPasswordResetDate' => 'lastPasswordResetDate',
            'userPasswordResetCount' => 'passwordResetCount',
            'userStatus' => 'status',
        ],
        'output' => [
            'id' => 'userID',
            'login' => 'userLogin',
            'salutation' => 'userSalutation',
            'name' => 'userName',
            'firstname' => 'userFirstname',
            'lastname' => 'userLastname',
            'address' => 'userAddress',
            'city' => 'userCity',
            'state' => 'userState',
            'postalcode' => 'userPostalcode',
            'plus4' => 'userPlus4',
            'country' => 'userCountry',
            'phoneHome' => 'userPhoneHome',
            'phoneWork' => 'userPhoneWork',
            'phoneWorkExt' => 'userPhoneWorkExt',
            'phoneCell' => 'userPhoneCell',
            'fax' => 'userFax',
            'email' => 'userEmail',
            'emailAlt' => 'userEmailAlt',
            'emailPager' => 'userEmailPager',
            'contactId' => 'userContactID',
            'registeredDate' => 'userRegisteredDate',
            'lastPasswordResetDate' => 'userLastPasswordResetDate',
            'passwordResetCount' => 'userPasswordResetCount',
            'status' => 'userStatus',
        ]
    ];

}