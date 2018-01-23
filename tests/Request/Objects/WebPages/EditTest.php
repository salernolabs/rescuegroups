<?php
/**
 * WebPages edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WebPages;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WebPages\Edit();

        $testObject = new \RescueGroups\Objects\WebPage();
        $testObject->id = 'testValue ID';
        $testObject->name = 'testValue Name';
        $testObject->content = 'testValue Content';
        $testObject->status = 'testValue Status';
        $testObject->uselayout = 'testValue Use Layout';
        $testObject->showonmenu = 'testValue Show on Menu';
        $testObject->metaDescription = 'testValue Meta Description';
        $testObject->backgroundImageId = 'testValue Background Image';
        $testObject->backgroundMusicId = 'testValue Background Music';
        $testObject->roleId = 'testValue Security Role';

        $query->updateWebPage($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('webpages', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['webpageID']);
        $this->assertEquals('testValue Name', $data['values'][0]['webpageName']);
        $this->assertEquals('testValue Content', $data['values'][0]['webpageContent']);
        $this->assertEquals('testValue Status', $data['values'][0]['webpageStatus']);
        $this->assertEquals('testValue Use Layout', $data['values'][0]['webpageUselayout']);
        $this->assertEquals('testValue Show on Menu', $data['values'][0]['webpageShowonmenu']);
        $this->assertEquals('testValue Meta Description', $data['values'][0]['webpageMetaDescription']);
        $this->assertEquals('testValue Background Image', $data['values'][0]['webpageBackgroundImageID']);
        $this->assertEquals('testValue Background Music', $data['values'][0]['webpageBackgroundMusicID']);
        $this->assertEquals('testValue Security Role', $data['values'][0]['webpageRoleID']);
    }
}