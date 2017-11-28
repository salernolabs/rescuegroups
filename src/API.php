<?php
/**
 * RescueGroups HTTP API PHP Unofficial SDK
 *
 * @package RescueGroups
 * @author Eric
 */
namespace RescueGroups;

class API
{
    const API_VERSION = 'v2';

    /**
     * @var string
     */
    private $key;

    /**
     * API constructor.
     * @param string|null $key
     * @throws Exceptions\InvalidKey
     */
    public function __construct($key = null)
    {
        if (empty($key))
        {
            $key = $_ENV['RESCUEGROUPS_API_KEY'];
        }

        if (empty($key))
        {
            throw new Exceptions\InvalidKey();
        }

        $this->key = $key;
    }

    /**
     * @param Requests\RequestInterface $request
     * @return Responses\Envelope
     * @throws Exceptions\Exception
     */
    public function executeRequest(Requests\RequestInterface $request)
    {
        $postObject = [
            'apikey' => $this->key,
            'objectType' => $request->getObjectType(),
            'objectAction' => $request->getObjectAction()
        ];

        $client = new \GuzzleHttp\Client(
            [
                'apiVersion' => static::API_VERSION,
                'request.options' => [
                    'headers' => ['Content-type', 'application/json']
                ]
            ]
        );

        $response = $client->request(
            'POST',
            'https://api.rescuegroups.org/http/{apiVersion}.json',
            [
                'form_params' => $postObject
            ]
        );


        if ($response->getStatusCode() != 200)
        {
            throw new Exceptions\Exception("Status code of " . $response->getStatusCode() . " not expected.");
        }

        $data = json_decode($response->getBody());

        if (empty($data))
        {
            throw new Exceptions\Exception("Could not decode valid JSON response from endpoint.");
        }

        return new Responses\Envelope($data);
    }
}