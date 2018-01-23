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
}