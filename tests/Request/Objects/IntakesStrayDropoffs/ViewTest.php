<?php
/**
 * IntakesStrayDropoffs view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesStrayDropoffs;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesStrayDropoffs\View();
        $query->setId("Stray Pickup");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Stray Pickup", $data['values'][0]["intakesStraydropoffID"]);

        $this->assertEquals('intakesStraydropoffs', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}