<?php
/**
 * VolunteerHours search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\VolunteerHours;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\VolunteerHours\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addField('volunteerID')
            ->addField('volunteerDate')
            ->addField('createdDate')
            ->addField('volunteerLength')
            ->addField('volunteerTask')
            ->addField('volunteerType')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('volunteerHours', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "volunteerHoursID",
            "volunteerHoursVolunteerID",
            "volunteerHoursVolunteerDate",
            "volunteerHoursCreatedDate",
            "volunteerHoursVolunteerLength",
            "volunteerHoursVolunteerTask",
            "volunteerType",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
