<?php
/**
 * WebPages add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WebPages;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WebPages\Add();

        $testObject = new \RescueGroups\Objects\WebPage();
        $testObject->webpageName = 'testValue Name';
        $testObject->webpageContent = 'testValue Content';
        $testObject->tatus = 'testValue Status';
        $testObject->webpageUselayout = 'testValue Use Layout';
        $testObject->howonmenu = 'testValue Show on Menu';
        $testObject->webpageMetaDescription = 'testValue Meta Description';
        $testObject->webpageBackgroundMusicID = 'testValue Background Music';
        $testObject->webpageRoleID = 'testValue Security Role';

        $query->addWebPage($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('webpages', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Name', $data['values'][0]['webpageName']);
        $this->assertEquals('testValue Content', $data['values'][0]['webpageContent']);
        $this->assertEquals('testValue Status', $data['values'][0]['webpageStatus']);
        $this->assertEquals('testValue Use Layout', $data['values'][0]['webpageUselayout']);
        $this->assertEquals('testValue Show on Menu', $data['values'][0]['webpageShowonmenu']);
        $this->assertEquals('testValue Meta Description', $data['values'][0]['webpageMetaDescription']);
        $this->assertEquals('testValue Background Music', $data['values'][0]['webpageBackgroundMusicID']);
        $this->assertEquals('testValue Security Role', $data['values'][0]['webpageRoleID']);
    }
}