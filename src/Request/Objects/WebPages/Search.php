<?php
/**
 * WebPages Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\WebPages;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'webpages';

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
        "webpageID" => [1, 'webpageID'],
        "webpageOrgID" => [0, 'webpageOrgID'],
        "webpageName" => [0, 'webpageName'],
        "webpageContent" => [0, 'webpageContent'],
        "webpageStatus" => [0, 'webpageStatus'],
        "webpageUselayout" => [0, 'webpageUselayout'],
        "webpageShowonmenu" => [0, 'webpageShowonmenu'],
        "webpageMetaDescription" => [0, 'webpageMetaDescription'],
        "webpageBackgroundImageID" => [0, 'webpageBackgroundImageID'],
        "webpageBackgroundImageFileName" => [0, 'webpageBackgroundImageFileName'],
        "webpageBackgroundMusicID" => [0, 'webpageBackgroundMusicID'],
        "webpageBackgroundMusicFileName" => [0, 'webpageBackgroundMusicFileName'],
        "webpageRoles" => [0, 'webpageRoles'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\WebPage[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\WebPage($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\WebPage($data)];
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