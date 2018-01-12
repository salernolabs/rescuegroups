<?php
/**
 * Intakes search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Intakes;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Intakes\Search();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakes', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
    }
}