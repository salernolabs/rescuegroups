<?php
/**
 * AnimalSpecies Define Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Define;

class AnimalSpeciesTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test query
     */
    public function testQuery()
    {
        $vcr = \Dshafik\GuzzleHttp\VcrHandler::turnOn(__DIR__ . '/../../data/fixtures/define-AnimalSpecies.json');
        $api = new \RescueGroups\API();
        $api->setCustomGuzzleHandler($vcr);

        $request = new \RescueGroups\Requests\Define\AnimalSpecies();

        $result = $api->executeRequest($request);

        $this->assertEquals('ok', $result->status);

        $this->assertNotEmpty($result->data->define);
    }
}