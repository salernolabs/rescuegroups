<?php
/**
 * Memorials Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Memorials;

class Search extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ParametersInterface,
    \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'memorials';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'search';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    const FIELD_ID = 'id';
    const FIELD_PICTURE_FILE_NAME = 'pictureFileName';
    const FIELD_PICTURE_URL = 'pictureUrl';
    const FIELD_PICTURE_THUMBNAIL_URL = 'pictureThumbnailUrl';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ORDER = 'order';

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "id" => [1, 'memorialID'],
        "pictureFileName" => [0, 'memorialPictureFileName'],
        "pictureUrl" => [0, 'memorialPictureUrl'],
        "pictureThumbnailUrl" => [0, 'memorialPictureThumbnailUrl'],
        "name" => [0, 'memorialName'],
        "description" => [0, 'memorialDescription'],
        "order" => [0, 'memorialOrder'],
    ];

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Objects\Memorial[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Objects\Memorial($object);
            }

            return $output;
        }

        return [new \RescueGroups\Objects\Memorial($data)];
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