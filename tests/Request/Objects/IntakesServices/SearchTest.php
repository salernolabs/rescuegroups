<?php
/**
 * IntakesServices search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesServices;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesServices\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('intakesServiceID')
            ->addFilter('intakesServiceID', 'equals', 'Service')
            ->addField('intakesServiceAnimalID')
            ->addFilter('intakesServiceAnimalID', 'equals', 'Animal')
            ->addField('intakesServiceAnimalConditionID')
            ->addFilter('intakesServiceAnimalConditionID', 'equals', 'Condition')
            ->addField('intakesServiceDate')
            ->addFilter('intakesServiceDate', 'equals', 'Date')
            ->addField('intakesServiceNotes')
            ->addFilter('intakesServiceNotes', 'equals', 'Notes')
            ->addField('intakesServiceOwnerID')
            ->addFilter('intakesServiceOwnerID', 'equals', 'Owner')
            ->addField('intakesServiceServicetypeID')
            ->addFilter('intakesServiceServicetypeID', 'equals', 'Service')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('animalConditionName')
            ->addFilter('animalConditionName', 'equals', 'Condition')
            ->addField('ownerName')
            ->addFilter('ownerName', 'equals', 'Owner')
            ->addField('serviceName')
            ->addFilter('serviceName', 'equals', 'Service')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesServices', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'intakesServiceID','operation'=>'equals','criteria'=>"Service"],
            ['fieldName'=>'intakesServiceAnimalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'intakesServiceAnimalConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'intakesServiceDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'intakesServiceNotes','operation'=>'equals','criteria'=>"Notes"],
            ['fieldName'=>'intakesServiceOwnerID','operation'=>'equals','criteria'=>"Owner"],
            ['fieldName'=>'intakesServiceServicetypeID','operation'=>'equals','criteria'=>"Service"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalConditionName','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'ownerName','operation'=>'equals','criteria'=>"Owner"],
            ['fieldName'=>'serviceName','operation'=>'equals','criteria'=>"Service"],
        ];

        $translatedFields = [
            "intakesServiceID",
            "intakesServiceAnimalID",
            "intakesServiceAnimalConditionID",
            "intakesServiceDate",
            "intakesServiceNotes",
            "intakesServiceOwnerID",
            "intakesServiceServicetypeID",
            "animalName",
            "animalConditionName",
            "ownerName",
            "serviceName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
