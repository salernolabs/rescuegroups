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
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $tokenHash;

    /**
     * @var \GuzzleHttp\HandlerStack
     */
    private $customGuzzleHandler;

    /**
     * API constructor.
     * @param string|null $key
     * @throws Exceptions\InvalidKey
     */
    public function __construct($key = null)
    {
        if (empty($key))
        {
            $key = getenv('RESCUEGROUPS_API_KEY');
        }

        if (empty($key))
        {
            throw new Exceptions\InvalidKey();
        }

        $this->key = $key;
    }

    /**
     * Set custom guzzle handler, useful for testing
     *
     * @param \GuzzleHttp\HandlerStack $handler
     * @return $this
     */
    public function setCustomGuzzleHandler(\GuzzleHttp\HandlerStack $handler)
    {
        $this->customGuzzleHandler = $handler;

        return $this;
    }

    /**
     * Actually Perform request
     *
     * @param Requests\RequestInterface $request
     * @return Responses\Envelope
     */
    public function executeRequest(Requests\RequestInterface $request)
    {
        $postObject = $this->getPostObject($request);

        $data = $this->getNetworkResponse($postObject);

        return $this->processResponse($data);
    }

    /**
     * Get post object
     *
     * @param Requests\RequestInterface $request
     * @return array
     * @throws Exceptions\LoginRequired
     */
    private function getPostObject(Requests\RequestInterface $request)
    {
        $postObject = [];

        if (!empty($this->token) && !empty($this->tokenHash))
        {
            $postObject['token'] = $this->token;
            $postObject['tokenHash'] = $this->tokenHash;
        }
        else if (!empty($this->key))
        {
            if ($request->loginRequired())
            {
                throw new Exceptions\LoginRequired();
            }

            $postObject['apikey'] = $this->key;
        }

        if ($request instanceof Requests\ObjectActionInterface)
        {
            $postObject['objectType'] = $request->getObjectType();
            $postObject['objectAction'] = $request->getObjectAction();
        }

        return $postObject;
    }

    /**
     * Get network response
     *
     * @param $postObject
     * @return mixed
     * @throws Exceptions\Exception
     */
    private function getNetworkResponse($postObject)
    {
        $options = [];

        if (!empty($this->customGuzzleHandler))
        {
            $options['handler'] = $this->customGuzzleHandler;
        }

        $client = new \GuzzleHttp\Client($options);

        $response = $client->request(
            'POST',
            'https://api.rescuegroups.org/http/' . static::API_VERSION . '.json',
            [
                \GuzzleHttp\RequestOptions::HEADERS => ['Content-type', 'application/json'],
                \GuzzleHttp\RequestOptions::JSON => $postObject
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

        return $data;
    }

    /**
     * Process Response
     *
     * @param $data
     * @return Responses\Envelope
     * @throws Exceptions\ErrorResponse
     */
    private function processResponse($data)
    {
        if (empty($data->status) || $data->status == 'error')
        {
            $message = null;

            if (!empty($data->message))
            {
                $message = $data->message;
            }

            if (empty($message) && !empty($data->messages))
            {
                $message = new Responses\Messages($data->messages);
            }

            throw new Exceptions\ErrorResponse($message);
        }

        return new Responses\Envelope($data);
    }
}