<?php
/**
 * AnimalConditions Define Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Define;

class AnimalConditionsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $vcr = \Dshafik\GuzzleHttp\VcrHandler::turnOn(__DIR__ . '/../../data/fixtures/define-AnimalConditions.json');
        $this->api
            ->setCustomGuzzleHandler($vcr);

        $request = new \RescueGroups\Request\Define\AnimalConditions();

        $result = $this->api->executeRequest($request);

        $this->assertEquals('ok', $result->status);

        $this->assertNotEmpty($result->data->define);
    }
}