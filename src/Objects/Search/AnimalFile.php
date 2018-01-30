<?php
/**
 * AnimalFile Search Response Object
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author SourceGenerator
 */
namespace RescueGroups\Objects\Search;

class AnimalFile extends \RescueGroups\Objects\AnimalFile implements \RescueGroups\Objects\APIEncodableInterface
{
    use \RescueGroups\Objects\Traits\APIReadWrite;

    /**
     * Old file name
     *
     * @var string
     */
    public $oldName = null;

    /**
     * File size
     *
     * @var string
     */
    public $size = null;

    /**
     * Created Date
     *
     * @var \DateTime
     */
    public $createdDate = null;


    /**
     * Mapping fields
     * @var array
     */
    static protected $apiMapping = [
        'id' => 'id',
        'input' => [
            'animalfileID' => 'id',
            'animalfileAnimalID' => 'animalId',
            'animalfileOldName' => 'oldName',
            'animalfileDescription' => 'description',
            'animalfileStatus' => 'status',
            'animalfileDisplayInline' => 'displayInline',
            'animalfilePublic' => 'public',
            'animalfileSize' => 'size',
            'animalfileCreatedDate' => 'createdDate',
        ],
        'output' => [
            'id' => 'animalfileID',
            'animalId' => 'animalfileAnimalID',
            'oldName' => 'animalfileOldName',
            'description' => 'animalfileDescription',
            'status' => 'animalfileStatus',
            'displayInline' => 'animalfileDisplayInline',
            'public' => 'animalfilePublic',
            'size' => 'animalfileSize',
            'createdDate' => 'animalfileCreatedDate',
        ]
    ];

}