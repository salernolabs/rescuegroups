<?php
/**
 * Contact Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class Contact extends \RescueGroups\Objects\Contact implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Name
     *
     * @var string
     */
    public $name = null;

    /**
     * Number of bounced email messages
     *
     * @var string
     */
    public $bounces = null;

    /**
     * Contact Type
     *
     * @var string
     */
    public $type = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'contactID' => 'id',
            'contactClass' => 'class',
            'contactSalutation' => 'salutation',
            'contactName' => 'name',
            'contactFirstname' => 'firstname',
            'contactLastname' => 'lastname',
            'contactTitle' => 'title',
            'contactAddress' => 'address',
            'contactCity' => 'city',
            'contactState' => 'state',
            'contactPostalcode' => 'postalcode',
            'contactPlus4' => 'plus4',
            'contactCounty' => 'county',
            'contactCountry' => 'country',
            'contactPhoneHome' => 'phoneHome',
            'contactPhoneWork' => 'phoneWork',
            'contactPhoneWorkExt' => 'phoneWorkExt',
            'contactPhoneCell' => 'phoneCell',
            'contactFax' => 'fax',
            'contactEmail' => 'email',
            'contactEmailAlt' => 'emailAlt',
            'contactEmailPager' => 'emailPager',
            'contactCompany' => 'company',
            'contactReferredBy' => 'referredBy',
            'contactCarrier' => 'carrier',
            'contactBounces' => 'bounces',
            'contactSendMail' => 'sendMail',
            'contactActive' => 'active',
            'contactComment' => 'comment',
            'contactTransportation' => 'transportation',
            'contactAvailability' => 'availability',
            'contactCaretakerPublic' => 'caretakerPublic',
            'contactCoalitionMember' => 'coalitionMember',
            'contactGroups' => 'groups',
            'contactType' => 'type',
        ],
        'output' => [
            'id' => 'contactID',
            'class' => 'contactClass',
            'salutation' => 'contactSalutation',
            'name' => 'contactName',
            'firstname' => 'contactFirstname',
            'lastname' => 'contactLastname',
            'title' => 'contactTitle',
            'address' => 'contactAddress',
            'city' => 'contactCity',
            'state' => 'contactState',
            'postalcode' => 'contactPostalcode',
            'plus4' => 'contactPlus4',
            'county' => 'contactCounty',
            'country' => 'contactCountry',
            'phoneHome' => 'contactPhoneHome',
            'phoneWork' => 'contactPhoneWork',
            'phoneWorkExt' => 'contactPhoneWorkExt',
            'phoneCell' => 'contactPhoneCell',
            'fax' => 'contactFax',
            'email' => 'contactEmail',
            'emailAlt' => 'contactEmailAlt',
            'emailPager' => 'contactEmailPager',
            'company' => 'contactCompany',
            'referredBy' => 'contactReferredBy',
            'carrier' => 'contactCarrier',
            'bounces' => 'contactBounces',
            'sendMail' => 'contactSendMail',
            'active' => 'contactActive',
            'comment' => 'contactComment',
            'transportation' => 'contactTransportation',
            'availability' => 'contactAvailability',
            'caretakerPublic' => 'contactCaretakerPublic',
            'coalitionMember' => 'contactCoalitionMember',
            'groups' => 'contactGroups',
            'type' => 'contactType',
        ]
    ];

}