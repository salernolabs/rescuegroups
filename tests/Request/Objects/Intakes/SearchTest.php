<?php
/**
 * Intakes search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Intakes;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Intakes\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('intakeID')
            ->addField('intakeOutcomeID')
            ->addField('intakeAnimalID')
            ->addField('intakeAnimalConditionID')
            ->addField('intakeType')
            ->addField('intakeDate')
            ->addField('intakeNotes')
            ->addField('animalName')
            ->addField('animalConditionName')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakes', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "intakeID",
            "intakeOutcomeID",
            "intakeAnimalID",
            "intakeAnimalConditionID",
            "intakeType",
            "intakeDate",
            "intakeNotes",
            "animalName",
            "animalConditionName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
