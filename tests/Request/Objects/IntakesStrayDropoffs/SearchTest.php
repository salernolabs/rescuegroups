<?php
/**
 * IntakesStrayDropoffs search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesStrayDropoffs;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesStrayDropoffs\Search();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesStraydropoffs', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
    }
}