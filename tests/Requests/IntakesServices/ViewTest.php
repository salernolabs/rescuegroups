<?php
/**
 * IntakesServices View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\IntakesServices\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\IntakesServices\View();

        
        $query->setIntakesServiceID("intakesServiceID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesServices", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("intakesServiceID", $data["intakesServiceID"]);
    }
}