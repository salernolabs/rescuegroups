<?php
/**
 * OutcomesTransfers Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\OutcomesTransfers;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Filterable Fields
     *
     * @var array
     */
    private $objectFields = [
        "outcomesTransferID" => 1,
        "outcomesTransferIntakeID" => 0,
        "outcomesTransferAnimalConditionID" => 0,
        "outcomesTransferDate" => 0,
        "outcomesTransferNotes" => 0,
        "outcomesTransferReceiveID" => 0,
        "outcomesTransferCoalitionMember" => 0,
        "outcomesTransferReasonID" => 0,
        "outcomesTransferReason" => 0,
        "animalID" => 0,
        "animalName" => 0,
        "animalConditionName" => 0,
        "receiveName" => 0,
    ];


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return false;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'outcomesTransfers';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'search';
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

    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\OutcomesTransfer[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data) || is_object($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\OutcomesTransfer($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\OutcomesTransfer($data)];
    }

}