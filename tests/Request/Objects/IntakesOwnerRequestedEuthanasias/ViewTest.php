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
        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesOwnerrequestedeuthanasias', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}