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
        "id" => [1, 'webpageID'],
        "orgId" => [0, 'webpageOrgID'],
        "name" => [0, 'webpageName'],
        "content" => [0, 'webpageContent'],
        "status" => [0, 'webpageStatus'],
        "uselayout" => [0, 'webpageUselayout'],
        "showonmenu" => [0, 'webpageShowonmenu'],
        "metaDescription" => [0, 'webpageMetaDescription'],
        "backgroundImageId" => [0, 'webpageBackgroundImageID'],
        "backgroundImageFileName" => [0, 'webpageBackgroundImageFileName'],
        "backgroundMusicId" => [0, 'webpageBackgroundMusicID'],
        "backgroundMusicFileName" => [0, 'webpageBackgroundMusicFileName'],
        "roles" => [0, 'webpageRoles'],
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