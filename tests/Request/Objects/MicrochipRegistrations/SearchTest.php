<?php
/**
 * MicrochipRegistrations search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\MicrochipRegistrations;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\Search();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('microchipRegistrations', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
    }
}