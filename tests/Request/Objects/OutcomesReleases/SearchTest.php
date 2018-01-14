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
            ->addField('outcomesReleaseIntakeID')
            ->addField('outcomesReleaseAnimalConditionID')
            ->addField('outcomesReleaseDate')
            ->addField('outcomesReleaseNotes')
            ->addField('outcomesReleaseLocation')
            ->addField('outcomesReleaseAddress')
            ->addField('outcomesReleaseCity')
            ->addField('outcomesReleaseState')
            ->addField('outcomesReleasePostalcode')
            ->addField('outcomesReleaseByID')
            ->addField('animalID')
            ->addField('animalName')
            ->addField('animalConditionName')
            ->addField('releaseByName')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesReleases', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
