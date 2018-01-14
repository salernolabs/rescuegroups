<?php
/**
 * OutcomesEuthanasias search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesEuthanasias;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesEuthanasias\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('outcomesEuthanasiaID')
            ->addField('outcomesEuthanasiaIntakeID')
            ->addField('outcomesEuthanasiaAnimalConditionID')
            ->addField('outcomesEuthanasiaDate')
            ->addField('outcomesEuthanasiaNotes')
            ->addField('outcomesEuthanasiaReasonID')
            ->addField('outcomesEuthanasiaReason')
            ->addField('animalID')
            ->addField('animalName')
            ->addField('animalConditionName')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesEuthanasias', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "outcomesEuthanasiaID",
            "outcomesEuthanasiaIntakeID",
            "outcomesEuthanasiaAnimalConditionID",
            "outcomesEuthanasiaDate",
            "outcomesEuthanasiaNotes",
            "outcomesEuthanasiaReasonID",
            "outcomesEuthanasiaReason",
            "animalID",
            "animalName",
            "animalConditionName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
