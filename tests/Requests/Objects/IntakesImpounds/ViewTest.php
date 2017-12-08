<?php
/**
 * IntakesImpounds View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\IntakesImpounds\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\IntakesImpounds\View();

        
        $query->setIntakesImpoundID("intakesImpoundID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesImpounds", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("intakesImpoundID", $data["intakesImpoundID"]);
    }
}