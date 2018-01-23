<?php
/**
 * AnimalsReasonsEuthanasia delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsReasonsEuthanasia;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsReasonsEuthanasia\Delete();
        $query->setId("Reason ID");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Reason ID", $data['values'][0]["reasonID"]);

        $this->assertEquals('animalsReasonsEuthanasia', $data['objectType']);
        $this->assertEquals('delete', $data['objectAction']);
    }
}