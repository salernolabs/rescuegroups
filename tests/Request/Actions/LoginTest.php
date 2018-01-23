<?php
/**
 * Logins Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Actions;

class LoginTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test query
     */
    public function testQuery()
    {
        $request = new \RescueGroups\Request\Actions\Login('testuser', 'testpassword', 'orgid1');

        $data = $this->api->getPostObject($request);

        $this->assertEquals('testuser', $data['username']);
        $this->assertEquals('testpassword', $data['password']);
        $this->assertEquals('orgid1', $data['accountNumber']);
        $this->assertEquals('login', $data['action']);
    }

    /**
     * Test environment setup
     *
     * @throws \RescueGroups\Exceptions\LoginRequired
     */
    public function testEnvironmentSetup()
    {
        $username = getenv('RESCUEGROUPS_USERNAME');
        $password = getenv('RESCUEGROUPS_PASSWORD');
        $orgId = getenv('RESCUEGROUPS_ORG_ID');

        putenv('RESCUEGROUPS_USERNAME=testenvuser');
        putenv('RESCUEGROUPS_PASSWORD=testenvpassword');
        putenv('RESCUEGROUPS_ORG_ID=testenvorgid');

        $request = new \RescueGroups\Request\Actions\Login();

        $data = $this->api->getPostObject($request);

        $this->assertEquals('testenvuser', $data['username']);
        $this->assertEquals('testenvpassword', $data['password']);
        $this->assertEquals('testenvorgid', $data['accountNumber']);
        $this->assertEquals('login', $data['action']);

        putenv('RESCUEGROUPS_USERNAME=' . $username);
        putenv('RESCUEGROUPS_PASSWORD=' . $password);
        putenv('RESCUEGROUPS_ORG_ID=' . $orgId);
    }
}