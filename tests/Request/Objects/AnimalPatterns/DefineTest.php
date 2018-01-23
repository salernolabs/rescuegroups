<?php
/**
 * AnimalPatterns define Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalPatterns;

class DefineTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalPatterns\Define();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalPatterns', $data['objectType']);
        $this->assertEquals('define', $data['objectAction']);
    }
}