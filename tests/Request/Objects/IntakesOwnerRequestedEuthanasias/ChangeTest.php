<?php
/**
 * IntakesOwnerRequestedEuthanasias change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerRequestedEuthanasias;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias\Change();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesOwnerrequestedeuthanasias', $data['objectType']);
        $this->assertEquals('change', $data['objectAction']);
    }
}