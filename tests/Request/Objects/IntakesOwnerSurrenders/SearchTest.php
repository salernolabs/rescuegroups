<?php
/**
 * IntakesOwnerSurrenders search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerSurrenders;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesOwnerSurrenders\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('intakesOwnersurrenderID')
            ->addField('intakesOwnersurrenderAnimalID')
            ->addField('intakesOwnersurrenderAnimalConditionID')
            ->addField('intakesOwnersurrenderDate')
            ->addField('intakesOwnersurrenderNotes')
            ->addField('intakesOwnersurrenderOwnerID')
            ->addField('intakesOwnersurrenderReasonID')
            ->addField('animalName')
            ->addField('animalConditionName')
            ->addField('ownerName')
            ->addField('surrenderReason')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesOwnersurrenders', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "intakesOwnersurrenderID",
            "intakesOwnersurrenderAnimalID",
            "intakesOwnersurrenderAnimalConditionID",
            "intakesOwnersurrenderDate",
            "intakesOwnersurrenderNotes",
            "intakesOwnersurrenderOwnerID",
            "intakesOwnersurrenderReasonID",
            "animalName",
            "animalConditionName",
            "ownerName",
            "surrenderReason",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
