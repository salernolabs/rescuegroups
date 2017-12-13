<?php
/**
 * Testimonials PublicSearch Request Test
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

        
        $query->setTestimonialID("testimonialID");
        $query->setTestimonialLocation("testimonialLocation");
        $query->setTestimonialLocationDistance("testimonialLocationDistance");
        $query->setTestimonialLocationCitystate("testimonialLocationCitystate");
        $query->setTestimonialService("testimonialService");
        $query->setTestimonialUserFirstname("testimonialUserFirstname");
        $query->setTestimonialCreatedDate("testimonialCreatedDate");
        $query->setTestimonialContent("testimonialContent");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("testimonials", $data["objectType"]);

        $this->assertEquals("publicSearch", $data["objectAction"]);

        $this->assertEquals("testimonialID", $data["testimonialID"]);
        $this->assertEquals("testimonialLocation", $data["testimonialLocation"]);
        $this->assertEquals("testimonialLocationDistance", $data["testimonialLocationDistance"]);
        $this->assertEquals("testimonialLocationCitystate", $data["testimonialLocationCitystate"]);
        $this->assertEquals("testimonialService", $data["testimonialService"]);
        $this->assertEquals("testimonialUserFirstname", $data["testimonialUserFirstname"]);
        $this->assertEquals("testimonialCreatedDate", $data["testimonialCreatedDate"]);
        $this->assertEquals("testimonialContent", $data["testimonialContent"]);
    }
}