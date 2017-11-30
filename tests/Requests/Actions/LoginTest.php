<?php
/**
 * Logins Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Actions;

class LoginTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test query
     */
    public function testQuery()
    {
        $vcr = \Dshafik\GuzzleHttp\VcrHandler::turnOn(__DIR__ . '/../../data/fixtures/actions-login.json');
        $api = new \RescueGroups\API();
        $api
            ->setSandboxMode(true)
            ->setCustomGuzzleHandler($vcr);

        $request = new \RescueGroups\Requests\Actions\Login();

        $result = $api->executeRequest($request);

        $this->assertEquals('ok', $result->status);
    }
}