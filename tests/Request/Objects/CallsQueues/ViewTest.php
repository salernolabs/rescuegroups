<?php
/**
 * CallsQueues view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsQueues;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsQueues\View();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsQueues', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}