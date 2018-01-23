<?php
/**
 * AnimalsExports define Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsExports;

class DefineTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsExports\Define();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsExports', $data['objectType']);
        $this->assertEquals('define', $data['objectAction']);
    }
}