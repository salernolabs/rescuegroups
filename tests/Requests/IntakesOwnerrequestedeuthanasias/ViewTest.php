<?php
/**
 * IntakesOwnerrequestedeuthanasias View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\IntakesOwnerrequestedeuthanasias\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\IntakesOwnerrequestedeuthanasias\View();

        
        $query->setIntakesOwnerrequestedeuthanasiaID("intakesOwnerrequestedeuthanasiaID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesOwnerrequestedeuthanasias", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("intakesOwnerrequestedeuthanasiaID", $data["intakesOwnerrequestedeuthanasiaID"]);
    }
}