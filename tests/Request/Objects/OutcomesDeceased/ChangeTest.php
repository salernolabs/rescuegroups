<?php
/**
 * OutcomesDeceased change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesDeceased;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesDeceased\Change();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesDeceased', $data['objectType']);
        $this->assertEquals('change', $data['objectAction']);
    }
}