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
            ->addField('testimonialLocation')
            ->addField('testimonialLocationDistance')
            ->addField('testimonialLocationCitystate')
            ->addField('testimonialService')
            ->addField('testimonialUserFirstname')
            ->addField('testimonialCreatedDate')
            ->addField('testimonialContent')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('testimonials', $data['objectType']);
        $this->assertEquals('publicSearch', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
