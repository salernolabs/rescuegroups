<?php
/**
 * IntakesOwnerRequestedEuthanasias view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerRequestedEuthanasias;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias\View();
        $query->setId("Owner requestedeuthanasia");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Owner requestedeuthanasia", $data['values'][0]["intakesOwnerrequestedeuthanasiaID"]);

        $this->assertEquals('intakesOwnerrequestedeuthanasias', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}