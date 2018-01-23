<?php
/**
 * OutcomesReleases search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesReleases;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesReleases\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('intakeId')
            ->addFilter('intakeId', 'equals', 'Outcome Release Intake')
            ->addField('animalConditionId')
            ->addFilter('animalConditionId', 'equals', 'Condition')
            ->addField('date')
            ->addFilter('date', 'equals', 'Date')
            ->addField('notes')
            ->addFilter('notes', 'equals', 'Notes')
            ->addField('location')
            ->addFilter('location', 'equals', 'Location')
            ->addField('address')
            ->addFilter('address', 'equals', 'Street address')
            ->addField('city')
            ->addFilter('city', 'equals', 'City')
            ->addField('state')
            ->addFilter('state', 'equals', 'State/Province')
            ->addField('postalcode')
            ->addFilter('postalcode', 'equals', 'Postal Code')
            ->addField('byId')
            ->addFilter('byId', 'equals', 'Released By')
            ->addField('animalId')
            ->addFilter('animalId', 'equals', 'Animal')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('animalConditionName')
            ->addFilter('animalConditionName', 'equals', 'Condition')
            ->addField('releaseByName')
            ->addFilter('releaseByName', 'equals', 'Released By')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesReleases', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'outcomesReleaseID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'outcomesReleaseIntakeID','operation'=>'equals','criteria'=>"Outcome Release Intake"],
            ['fieldName'=>'outcomesReleaseAnimalConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'outcomesReleaseDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'outcomesReleaseNotes','operation'=>'equals','criteria'=>"Notes"],
            ['fieldName'=>'outcomesReleaseLocation','operation'=>'equals','criteria'=>"Location"],
            ['fieldName'=>'outcomesReleaseAddress','operation'=>'equals','criteria'=>"Street address"],
            ['fieldName'=>'outcomesReleaseCity','operation'=>'equals','criteria'=>"City"],
            ['fieldName'=>'outcomesReleaseState','operation'=>'equals','criteria'=>"State/Province"],
            ['fieldName'=>'outcomesReleasePostalcode','operation'=>'equals','criteria'=>"Postal Code"],
            ['fieldName'=>'outcomesReleaseByID','operation'=>'equals','criteria'=>"Released By"],
            ['fieldName'=>'animalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalConditionName','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'releaseByName','operation'=>'equals','criteria'=>"Released By"],
        ];

        $translatedFields = [
            "outcomesReleaseID",
            "outcomesReleaseIntakeID",
            "outcomesReleaseAnimalConditionID",
            "outcomesReleaseDate",
            "outcomesReleaseNotes",
            "outcomesReleaseLocation",
            "outcomesReleaseAddress",
            "outcomesReleaseCity",
            "outcomesReleaseState",
            "outcomesReleasePostalcode",
            "outcomesReleaseByID",
            "animalID",
            "animalName",
            "animalConditionName",
            "releaseByName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
