<?php
/**
 * IntakesTransfers search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesTransfers;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesTransfers\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('intakesTransferID')
            ->addField('intakesTransferAnimalID')
            ->addField('intakesTransferAnimalConditionID')
            ->addField('intakesTransferDate')
            ->addField('intakesTransferNotes')
            ->addField('intakesTransferFromID')
            ->addField('intakesTransferCoalitionMember')
            ->addField('intakesTransferReasonID')
            ->addField('animalName')
            ->addField('animalConditionName')
            ->addField('transferFromName')
            ->addField('transferReason')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesTransfers', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "intakesTransferID",
            "intakesTransferAnimalID",
            "intakesTransferAnimalConditionID",
            "intakesTransferDate",
            "intakesTransferNotes",
            "intakesTransferFromID",
            "intakesTransferCoalitionMember",
            "intakesTransferReasonID",
            "animalName",
            "animalConditionName",
            "transferFromName",
            "transferReason",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
