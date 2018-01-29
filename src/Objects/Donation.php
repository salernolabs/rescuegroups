<?php
/**
 * Donation Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class Donation implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * ID, Primary Key
     *
     * @var integer
     */
    public $id = null;

    /**
     * Contact
     *
     * @var integer
     */
    public $contactId = null;

    /**
     * Amount
     *
     * @var float
     */
    public $amount = null;

    /**
     * Inkind type
     *
     * @var string
     */
    public $inkind = null;

    /**
     * Comment
     *
     * @var string
     */
    public $comment = null;

    /**
     * Letter sent
     *
     * @var string
     */
    public $lettersent = null;

    /**
     * Purpose
     *
     * @var string
     */
    public $purpose = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    public $date = null;


    /**
     * Mapping fields
     * @var array
     */
    static private $apiMapping = [
        'id' => 'id',
        'input' => [
            'donationID' => 'id',
            'donationContactID' => 'contactId',
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
            'amount' => 'donationAmount',
            'inkind' => 'donationInkind',
            'comment' => 'donationComment',
            'lettersent' => 'donationLettersent',
            'purpose' => 'donationPurpose',
            'date' => 'donationDate',
        ]
    ];

    /**
     * Donation Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        $this->mapFromAPI($inputData);
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        return $this->mapToAPI($includeId);
    }
}