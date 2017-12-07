<?php
/**
 * AnimalsReasonsImpound Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:18
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsReasonsImpound\Delete;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsReasonsImpound\Delete();

        
        $query->setReasonID("reasonID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsReasonsImpound", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("reasonID", $data["reasonID"]);
    }
}