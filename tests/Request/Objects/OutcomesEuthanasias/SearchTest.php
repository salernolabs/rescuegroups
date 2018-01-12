<?php
/**
 * OutcomesEuthanasias search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesEuthanasias;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesEuthanasias\Search();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesEuthanasias', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
    }
}