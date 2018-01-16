<?php
/**
 * ColoniesCareTakers add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\ColoniesCareTakers;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\ColoniesCareTakers\Add();

        $testObject = new \RescueGroups\Objects\ColoniesCareTaker();
        $testObject->caretakerContactID = 'testValue Contact';

        $query->addColoniesCareTaker($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('coloniesCaretakers', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Contact', $data['values'][0]['caretakerContactID']);
    }
}