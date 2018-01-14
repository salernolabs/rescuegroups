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
            ->addField('intakesStraydropoffID')
            ->addFilter('intakesStraydropoffID', 'equals', 'Stray Pickup')
            ->addField('intakesStraydropoffAnimalID')
            ->addFilter('intakesStraydropoffAnimalID', 'equals', 'Animal')
            ->addField('intakesStraydropoffAnimalConditionID')
            ->addFilter('intakesStraydropoffAnimalConditionID', 'equals', 'Condition')
            ->addField('intakesStraydropoffDate')
            ->addFilter('intakesStraydropoffDate', 'equals', 'Date')
            ->addField('intakesStraydropoffNotes')
            ->addFilter('intakesStraydropoffNotes', 'equals', 'Notes')
            ->addField('intakesStraydropoffFoundLocation')
            ->addFilter('intakesStraydropoffFoundLocation', 'equals', 'Found Location')
            ->addField('intakesStraydropoffFoundAddress')
            ->addFilter('intakesStraydropoffFoundAddress', 'equals', 'Found Street address')
            ->addField('intakesStraydropoffFoundCity')
            ->addFilter('intakesStraydropoffFoundCity', 'equals', 'Found City')
            ->addField('intakesStraydropoffFoundState')
            ->addFilter('intakesStraydropoffFoundState', 'equals', 'Found State/Province')
            ->addField('intakesStraydropoffFoundPostalcode')
            ->addFilter('intakesStraydropoffFoundPostalcode', 'equals', 'Found Postal Code')
            ->addField('intakesStraydropoffFinderID')
            ->addFilter('intakesStraydropoffFinderID', 'equals', 'Dropped off by')
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
