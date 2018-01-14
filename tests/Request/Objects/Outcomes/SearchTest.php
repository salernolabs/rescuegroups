<?php
/**
 * Outcomes search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Outcomes;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Outcomes\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('outcomeID')
            ->addField('outcomeAnimalConditionID')
            ->addField('outcomeType')
            ->addField('outcomeDate')
            ->addField('outcomeNotes')
            ->addField('intakeID')
            ->addField('intakeAnimalID')
            ->addField('animalName')
            ->addField('outcomeAnimalConditionName')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomes', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "outcomeID",
            "outcomeAnimalConditionID",
            "outcomeType",
            "outcomeDate",
            "outcomeNotes",
            "intakeID",
            "intakeAnimalID",
            "animalName",
            "outcomeAnimalConditionName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
