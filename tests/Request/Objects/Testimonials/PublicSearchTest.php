<?php
/**
 * Testimonials publicSearch Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Testimonials;

class PublicSearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Testimonials\PublicSearch();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('testimonialID')
            ->addFilter('testimonialID', 'equals', 'ID')
            ->addField('testimonialLocation')
            ->addFilter('testimonialLocation', 'equals', 'Location')
            ->addField('testimonialLocationDistance')
            ->addFilter('testimonialLocationDistance', 'equals', 'Distance')
            ->addField('testimonialLocationCitystate')
            ->addFilter('testimonialLocationCitystate', 'equals', 'City, State')
            ->addField('testimonialService')
            ->addFilter('testimonialService', 'equals', 'Service')
            ->addField('testimonialUserFirstname')
            ->addFilter('testimonialUserFirstname', 'equals', 'User first name')
            ->addField('testimonialCreatedDate')
            ->addFilter('testimonialCreatedDate', 'equals', 'Date')
            ->addField('testimonialContent')
            ->addFilter('testimonialContent', 'equals', 'Testimonial')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('testimonials', $data['objectType']);
        $this->assertEquals('publicSearch', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'testimonialID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'testimonialLocation','operation'=>'equals','criteria'=>"Location"],
            ['fieldName'=>'testimonialLocationDistance','operation'=>'equals','criteria'=>"Distance"],
            ['fieldName'=>'testimonialLocationCitystate','operation'=>'equals','criteria'=>"City, State"],
            ['fieldName'=>'testimonialService','operation'=>'equals','criteria'=>"Service"],
            ['fieldName'=>'testimonialUserFirstname','operation'=>'equals','criteria'=>"User first name"],
            ['fieldName'=>'testimonialCreatedDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'testimonialContent','operation'=>'equals','criteria'=>"Testimonial"],
        ];

        $translatedFields = [
            "testimonialID",
            "testimonialLocation",
            "testimonialLocationDistance",
            "testimonialLocationCitystate",
            "testimonialService",
            "testimonialUserFirstname",
            "testimonialCreatedDate",
            "testimonialContent",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
