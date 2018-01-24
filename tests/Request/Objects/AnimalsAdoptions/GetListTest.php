<?php
/**
 * AnimalsAdoptions list Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsAdoptions;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsAdoptions\GetList();

        $data = $this->api->getPostObject($query);


        $this->assertEquals('animalsAdoptions', $data['objectType']);
        $this->assertEquals('list', $data['objectAction']);
    }
}