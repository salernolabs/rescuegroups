<?php
/**
 * OutcomesEuthanasias change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesEuthanasias;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesEuthanasias\Change();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesEuthanasias', $data['objectType']);
        $this->assertEquals('change', $data['objectAction']);
    }
}