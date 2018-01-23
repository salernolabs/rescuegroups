<?php
/**
 * Users Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Users;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'users';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'userID'],
        "login" => [0, 'userLogin'],
        "salutation" => [0, 'userSalutation'],
        "name" => [0, 'userName'],
        "firstname" => [0, 'userFirstname'],
        "lastname" => [0, 'userLastname'],
        "address" => [0, 'userAddress'],
        "city" => [0, 'userCity'],
        "state" => [0, 'userState'],
        "postalcode" => [0, 'userPostalcode'],
        "plus4" => [0, 'userPlus4'],
        "country" => [0, 'userCountry'],
        "phoneHome" => [0, 'userPhoneHome'],
        "phoneWork" => [0, 'userPhoneWork'],
        "phoneWorkExt" => [0, 'userPhoneWorkExt'],
        "phoneCell" => [0, 'userPhoneCell'],
        "fax" => [0, 'userFax'],
        "email" => [0, 'userEmail'],
        "emailAlt" => [0, 'userEmailAlt'],
        "emailPager" => [0, 'userEmailPager'],
        "contactId" => [0, 'userContactID'],
        "registeredDate" => [0, 'userRegisteredDate'],
        "lastPasswordResetDate" => [0, 'userLastPasswordResetDate'],
        "passwordResetCount" => [0, 'userPasswordResetCount'],
        "status" => [0, 'userStatus'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\User[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\User($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\User($data)];
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