<?php
/**
 * AnimalsAdoptions View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsAdoptions\View;

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

        
        $query->setAdoptionID("adoptionID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsAdoptions", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("adoptionID", $data["adoptionID"]);
    }
}