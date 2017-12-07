<?php
/**
 * AnimalsReasonsImpound Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:36
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsReasonsImpound\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsReasonsImpound\Add();

        
        $query->setReasonName("reasonName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsReasonsImpound", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("reasonName", $data["reasonName"]);
    }
}