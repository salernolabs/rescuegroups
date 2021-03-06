<?php
/**
 * AnimalsAdoptions view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsAdoptions;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsAdoptions\View();
        $query->setId("Adoption ID");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Adoption ID", $data['values'][0]["adoptionID"]);

        $this->assertEquals('animalsAdoptions', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}