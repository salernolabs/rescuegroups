<?php
/**
 * IntakesStrayPickups View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:23
 */
namespace RescueGroups\Tests\Requests\Objects\IntakesStrayPickups\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\IntakesStrayPickups\View();

        
        $query->setIntakesStraypickupID("intakesStraypickupID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesStraypickups", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("intakesStraypickupID", $data["intakesStraypickupID"]);
    }
}