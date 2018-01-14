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
            ->addField('outcomesReleaseID')
            ->addFilter('outcomesReleaseID', 'equals', 'ID')
            ->addField('outcomesReleaseIntakeID')
            ->addFilter('outcomesReleaseIntakeID', 'equals', 'Outcome Release Intake')
            ->addField('outcomesReleaseAnimalConditionID')
            ->addFilter('outcomesReleaseAnimalConditionID', 'equals', 'Condition')
            ->addField('outcomesReleaseDate')
            ->addFilter('outcomesReleaseDate', 'equals', 'Date')
            ->addField('outcomesReleaseNotes')
            ->addFilter('outcomesReleaseNotes', 'equals', 'Notes')
            ->addField('outcomesReleaseLocation')
            ->addFilter('outcomesReleaseLocation', 'equals', 'Location')
            ->addField('outcomesReleaseAddress')
            ->addFilter('outcomesReleaseAddress', 'equals', 'Street address')
            ->addField('outcomesReleaseCity')
            ->addFilter('outcomesReleaseCity', 'equals', 'City')
            ->addField('outcomesReleaseState')
            ->addFilter('outcomesReleaseState', 'equals', 'State/Province')
            ->addField('outcomesReleasePostalcode')
            ->addFilter('outcomesReleasePostalcode', 'equals', 'Postal Code')
            ->addField('outcomesReleaseByID')
            ->addFilter('outcomesReleaseByID', 'equals', 'Released By')
            ->addField('animalID')
            ->addFilter('animalID', 'equals', 'Animal')
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
