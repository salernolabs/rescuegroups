<?php
/**
 * AnimalsReasonsSurrender View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:36
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsReasonsSurrender\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsReasonsSurrender\View();

        
        $query->setReasonID("reasonID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsReasonsSurrender", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("reasonID", $data["reasonID"]);
    }
}