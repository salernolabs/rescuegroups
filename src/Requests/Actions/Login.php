<?php
/**
 * Login to Rescue Groups
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author Eric
 * @see https://userguide.rescuegroups.org/pages/viewpage.action?pageId=10813512
 */
namespace RescueGroups\Requests\Actions;

class Login
    implements \RescueGroups\Requests\RequestInterface,
                \RescueGroups\Requests\ParametersInterface,
                \RescueGroups\Requests\ProcessResponseInterface
{
    /**
     * @var string
     */
    private $username = '';

    /**
     * @var string
     */
    private $password = '';

    /**
     * @var int
     */
    private $organizationId = 0;

    /**
     * Login constructor.
     * @throws \RescueGroups\Exceptions\InvalidLoginCredentials
     */
    public function __construct($username = null, $password = null, $organizationId = null)
    {
        $this->username = $username;
        if (empty($username))
        {
            $this->username = getenv('RESCUEGROUPS_LOGIN');
        }

        $this->password = $password;
        if (empty($this->password))
        {
            $this->password = getenv('RESCUEGROUPS_PASSWORD');
        }

        $this->organizationId = $organizationId;
        if (empty($this->organizationId))
        {
            $this->organizationId = getenv('RESCUEGROUPS_ORG_ID');
        }

        if (empty($this->username) || empty($this->password) || empty($this->organizationId))
        {
            throw new \RescueGroups\Exceptions\InvalidLoginCredentials();
        }
    }

    /**
     * @return bool
     */
    public function loginRequired()
    {
        return false;
    }

    /**
     * Apply parameters
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        $parameterArray['username'] = $this->username;
        $parameterArray['password'] = $this->password;
        $parameterArray['accountNumber'] = $this->organizationId;
        $parameterArray['action'] = 'login';
    }

    /**
     * Process the login response
     *
     * @param \RescueGroups\API $api
     * @param $data
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {

    }
}