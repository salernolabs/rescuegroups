<?php
/**
 * AnimalsReasonsSurrender define Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsReasonsSurrender;

class DefineTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsReasonsSurrender\Define();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsReasonsSurrender', $data['objectType']);
        $this->assertEquals('define', $data['objectAction']);
    }
}