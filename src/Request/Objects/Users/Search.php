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
        "userID" => [1, 'userID'],
        "userLogin" => [0, 'userLogin'],
        "userSalutation" => [0, 'userSalutation'],
        "userName" => [0, 'userName'],
        "userFirstname" => [0, 'userFirstname'],
        "userLastname" => [0, 'userLastname'],
        "userAddress" => [0, 'userAddress'],
        "userCity" => [0, 'userCity'],
        "userState" => [0, 'userState'],
        "userPostalcode" => [0, 'userPostalcode'],
        "userPlus4" => [0, 'userPlus4'],
        "userCountry" => [0, 'userCountry'],
        "userPhoneHome" => [0, 'userPhoneHome'],
        "userPhoneWork" => [0, 'userPhoneWork'],
        "userPhoneWorkExt" => [0, 'userPhoneWorkExt'],
        "userPhoneCell" => [0, 'userPhoneCell'],
        "userFax" => [0, 'userFax'],
        "userEmail" => [0, 'userEmail'],
        "userEmailAlt" => [0, 'userEmailAlt'],
        "userEmailPager" => [0, 'userEmailPager'],
        "userContactID" => [0, 'userContactID'],
        "userRegisteredDate" => [0, 'userRegisteredDate'],
        "userLastPasswordResetDate" => [0, 'userLastPasswordResetDate'],
        "userPasswordResetCount" => [0, 'userPasswordResetCount'],
        "userStatus" => [0, 'userStatus'],
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