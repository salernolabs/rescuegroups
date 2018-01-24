<?php
/**
 * RescueGroups API Test Trait
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author Eric
 */
namespace RescueGroups\Tests\Traits;

trait APISetup
{
    /**
     * @var \RescueGroups\API
     */
    private $api;

    /**
     * Set up api testing
     */
    public function setUp()
    {
        $this->api = new \RescueGroups\API();
        $this->api
            ->setSandboxMode(true);
    }

    /**
     * Login to the API
     */
    private function apiLogin()
    {
        $this->api->setToken('testToken', 'testTokenHash');
    }

}