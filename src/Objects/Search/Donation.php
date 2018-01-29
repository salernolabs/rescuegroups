<?php
/**
 * Donation Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class Donation extends \RescueGroups\Objects\Donation implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Contact
     *
     * @var string
     */
    public $contactName = null;

    /**
     * Donor Type
     *
     * @var string
     */
    public $contactType = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'donationID' => 'id',
            'donationContactID' => 'contactId',
            'donationContactName' => 'contactName',
            'donationContactType' => 'contactType',
            'donationAmount' => 'amount',
            'donationInkind' => 'inkind',
            'donationComment' => 'comment',
            'donationLettersent' => 'lettersent',
            'donationPurpose' => 'purpose',
            'donationDate' => 'date',
        ],
        'output' => [
            'id' => 'donationID',
            'contactId' => 'donationContactID',
            'contactName' => 'donationContactName',
            'contactType' => 'donationContactType',
            'amount' => 'donationAmount',
            'inkind' => 'donationInkind',
            'comment' => 'donationComment',
            'lettersent' => 'donationLettersent',
            'purpose' => 'donationPurpose',
            'date' => 'donationDate',
        ]
    ];

}