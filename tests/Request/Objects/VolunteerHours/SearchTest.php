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
            ->addFilter('id', 'equals', 'ID')
            ->addField('volunteerId')
            ->addFilter('volunteerId', 'equals', 'Volunteer')
            ->addField('volunteerDate')
            ->addFilter('volunteerDate', 'equals', 'Date')
            ->addField('createdDate')
            ->addFilter('createdDate', 'equals', 'Added Date')
            ->addField('volunteerLength')
            ->addFilter('volunteerLength', 'equals', 'Hours')
            ->addField('volunteerTask')
            ->addFilter('volunteerTask', 'equals', 'Task')
            ->addField('volunteerType')
            ->addFilter('volunteerType', 'equals', 'Volunteer Type')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('volunteerHours', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'volunteerHoursID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'volunteerHoursVolunteerID','operation'=>'equals','criteria'=>"Volunteer"],
            ['fieldName'=>'volunteerHoursVolunteerDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'volunteerHoursCreatedDate','operation'=>'equals','criteria'=>"Added Date"],
            ['fieldName'=>'volunteerHoursVolunteerLength','operation'=>'equals','criteria'=>"Hours"],
            ['fieldName'=>'volunteerHoursVolunteerTask','operation'=>'equals','criteria'=>"Task"],
            ['fieldName'=>'volunteerType','operation'=>'equals','criteria'=>"Volunteer Type"],
        ];

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
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
