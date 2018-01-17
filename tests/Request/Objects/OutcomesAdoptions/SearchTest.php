<?php
/**
 * OutcomesAdoptions search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesAdoptions;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesAdoptions\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('outcomesAdoptionID')
            ->addFilter('outcomesAdoptionID', 'equals', 'ID')
            ->addField('outcomesAdoptionIntakeID')
            ->addFilter('outcomesAdoptionIntakeID', 'equals', 'Outcome Adoption Intake')
            ->addField('outcomesAdoptionAnimalConditionID')
            ->addFilter('outcomesAdoptionAnimalConditionID', 'equals', 'Condition')
            ->addField('outcomesAdoptionDate')
            ->addFilter('outcomesAdoptionDate', 'equals', 'Date')
            ->addField('outcomesAdoptionNotes')
            ->addFilter('outcomesAdoptionNotes', 'equals', 'Notes')
            ->addField('outcomesAdoptionAdoptionID')
            ->addFilter('outcomesAdoptionAdoptionID', 'equals', 'Adoption')
            ->addField('animalID')
            ->addFilter('animalID', 'equals', 'Animal')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('animalConditionName')
            ->addFilter('animalConditionName', 'equals', 'Condition')
            ->addField('adopterContactID')
            ->addFilter('adopterContactID', 'equals', 'Adopter Contact')
            ->addField('ownerName')
            ->addFilter('ownerName', 'equals', 'Owner')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesAdoptions', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'outcomesAdoptionID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'outcomesAdoptionIntakeID','operation'=>'equals','criteria'=>"Outcome Adoption Intake"],
            ['fieldName'=>'outcomesAdoptionAnimalConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'outcomesAdoptionDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'outcomesAdoptionNotes','operation'=>'equals','criteria'=>"Notes"],
            ['fieldName'=>'outcomesAdoptionAdoptionID','operation'=>'equals','criteria'=>"Adoption"],
            ['fieldName'=>'animalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalConditionName','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'adopterContactID','operation'=>'equals','criteria'=>"Adopter Contact"],
            ['fieldName'=>'ownerName','operation'=>'equals','criteria'=>"Owner"],
        ];

        $translatedFields = [
            "outcomesAdoptionID",
            "outcomesAdoptionIntakeID",
            "outcomesAdoptionAnimalConditionID",
            "outcomesAdoptionDate",
            "outcomesAdoptionNotes",
            "outcomesAdoptionAdoptionID",
            "animalID",
            "animalName",
            "animalConditionName",
            "adopterContactID",
            "ownerName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
