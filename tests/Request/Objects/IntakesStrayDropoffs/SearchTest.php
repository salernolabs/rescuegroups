<?php
/**
 * IntakesStrayDropoffs search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesStrayDropoffs;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesStrayDropoffs\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'Stray Pickup')
            ->addField('animalId')
            ->addFilter('animalId', 'equals', 'Animal')
            ->addField('animalConditionId')
            ->addFilter('animalConditionId', 'equals', 'Condition')
            ->addField('date')
            ->addFilter('date', 'equals', 'Date')
            ->addField('notes')
            ->addFilter('notes', 'equals', 'Notes')
            ->addField('foundLocation')
            ->addFilter('foundLocation', 'equals', 'Found Location')
            ->addField('foundAddress')
            ->addFilter('foundAddress', 'equals', 'Found Street address')
            ->addField('foundCity')
            ->addFilter('foundCity', 'equals', 'Found City')
            ->addField('foundState')
            ->addFilter('foundState', 'equals', 'Found State/Province')
            ->addField('foundPostalcode')
            ->addFilter('foundPostalcode', 'equals', 'Found Postal Code')
            ->addField('finderId')
            ->addFilter('finderId', 'equals', 'Dropped off by')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('animalConditionName')
            ->addFilter('animalConditionName', 'equals', 'Condition')
            ->addField('finderName')
            ->addFilter('finderName', 'equals', 'Dropped off by')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesStraydropoffs', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'intakesStraydropoffID','operation'=>'equals','criteria'=>"Stray Pickup"],
            ['fieldName'=>'intakesStraydropoffAnimalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'intakesStraydropoffAnimalConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'intakesStraydropoffDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'intakesStraydropoffNotes','operation'=>'equals','criteria'=>"Notes"],
            ['fieldName'=>'intakesStraydropoffFoundLocation','operation'=>'equals','criteria'=>"Found Location"],
            ['fieldName'=>'intakesStraydropoffFoundAddress','operation'=>'equals','criteria'=>"Found Street address"],
            ['fieldName'=>'intakesStraydropoffFoundCity','operation'=>'equals','criteria'=>"Found City"],
            ['fieldName'=>'intakesStraydropoffFoundState','operation'=>'equals','criteria'=>"Found State/Province"],
            ['fieldName'=>'intakesStraydropoffFoundPostalcode','operation'=>'equals','criteria'=>"Found Postal Code"],
            ['fieldName'=>'intakesStraydropoffFinderID','operation'=>'equals','criteria'=>"Dropped off by"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalConditionName','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'finderName','operation'=>'equals','criteria'=>"Dropped off by"],
        ];

        $translatedFields = [
            "intakesStraydropoffID",
            "intakesStraydropoffAnimalID",
            "intakesStraydropoffAnimalConditionID",
            "intakesStraydropoffDate",
            "intakesStraydropoffNotes",
            "intakesStraydropoffFoundLocation",
            "intakesStraydropoffFoundAddress",
            "intakesStraydropoffFoundCity",
            "intakesStraydropoffFoundState",
            "intakesStraydropoffFoundPostalcode",
            "intakesStraydropoffFinderID",
            "animalName",
            "animalConditionName",
            "finderName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
