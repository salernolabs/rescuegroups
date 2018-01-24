<?php
/**
 * Donations Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Donations;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'donations';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    const FIELD_ID = 'id';
    const FIELD_CONTACT_ID = 'contactId';
    const FIELD_CONTACT_NAME = 'contactName';
    const FIELD_CONTACT_TYPE = 'contactType';
    const FIELD_AMOUNT = 'amount';
    const FIELD_INKIND = 'inkind';
    const FIELD_COMMENT = 'comment';
    const FIELD_LETTERSENT = 'lettersent';
    const FIELD_PURPOSE = 'purpose';
    const FIELD_DATE = 'date';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'donationID'],
        "contactId" => [0, 'donationContactID'],
        "contactName" => [0, 'donationContactName'],
        "contactType" => [0, 'donationContactType'],
        "amount" => [0, 'donationAmount'],
        "inkind" => [0, 'donationInkind'],
        "comment" => [0, 'donationComment'],
        "lettersent" => [0, 'donationLettersent'],
        "purpose" => [0, 'donationPurpose'],
        "date" => [0, 'donationDate'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\Donation[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Donation($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Donation($data)];
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        $this->addSearchParameters($parameterArray);
    }
}