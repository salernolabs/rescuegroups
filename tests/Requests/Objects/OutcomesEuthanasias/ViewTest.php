<?php
/**
 * OutcomesEuthanasias View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:25
 */
namespace RescueGroups\Tests\Requests\Objects\OutcomesEuthanasias\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\OutcomesEuthanasias\View();

        
        $query->setOutcomesEuthanasiaID("outcomesEuthanasiaID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesEuthanasias", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("outcomesEuthanasiaID", $data["outcomesEuthanasiaID"]);
    }
}