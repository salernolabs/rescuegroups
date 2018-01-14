<?php
/**
 * OutcomesReturnToOwner search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesReturnToOwner;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesReturnToOwner\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addField('intakeID')
            ->addField('animalConditionID')
            ->addField('date')
            ->addField('notes')
            ->addField('ownerID')
            ->addField('animalID')
            ->addField('animalName')
            ->addField('animalConditionName')
            ->addField('returntoownerName')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesReturntoowner', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "outcomesReturntoownerID",
            "outcomesReturntoownerIntakeID",
            "outcomesReturntoownerAnimalConditionID",
            "outcomesReturntoownerDate",
            "outcomesReturntoownerNotes",
            "outcomesReturntoownerOwnerID",
            "animalID",
            "animalName",
            "animalConditionName",
            "returntoownerName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
