<?php
/**
 * ColoniesCareTakers define Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\ColoniesCareTakers;

class DefineTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\ColoniesCareTakers\Define();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('coloniesCaretakers', $data['objectType']);
        $this->assertEquals('define', $data['objectAction']);
    }
}