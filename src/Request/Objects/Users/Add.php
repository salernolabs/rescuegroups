<?php
/**
 * Users Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Users;

class Add extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'users';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'add';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Login
     *
     * @var string
     */
    private $userLogin = null;

    /**
     * Password
     *
     * @var string
     */
    private $userPassword = null;

    /**
     * Salutation
     *
     * @var string
     */
    private $userSalutation = null;

    /**
     * First name
     *
     * @var string
     */
    private $userFirstname = null;

    /**
     * Last name
     *
     * @var string
     */
    private $userLastname = null;

    /**
     * Street address
     *
     * @var string
     */
    private $userAddress = null;

    /**
     * City
     *
     * @var string
     */
    private $userCity = null;

    /**
     * State/Province
     *
     * @var string
     */
    private $userState = null;

    /**
     * Postal Code
     *
     * @var string
     */
    private $userPostalcode = null;

    /**
     * Zip code plus 4
     *
     * @var string
     */
    private $userPlus4 = null;

    /**
     * Country
     *
     * @var integer
     */
    private $userCountry = null;

    /**
     * Home phone number
     *
     * @var string
     */
    private $userPhoneHome = null;

    /**
     * Work phone number
     *
     * @var string
     */
    private $userPhoneWork = null;

    /**
     * Work phone extension
     *
     * @var string
     */
    private $userPhoneWorkExt = null;

    /**
     * Cell phone number
     *
     * @var string
     */
    private $userPhoneCell = null;

    /**
     * Fax number
     *
     * @var string
     */
    private $userFax = null;

    /**
     * Email address
     *
     * @var string
     */
    private $userEmail = null;

    /**
     * Alternate email address
     *
     * @var string
     */
    private $userEmailAlt = null;

    /**
     * Pager email address
     *
     * @var string
     */
    private $userEmailPager = null;

    /**
     * User Contact
     *
     * @var integer
     */
    private $userContactID = null;

    /**
     * Type
     *
     * @var string
     */
    private $userType = null;

    /**
     * Status
     *
     * @var string
     */
    private $userStatus = null;


    /**
     * Set Login
     *
     * @param string $value
     * @return $this
     */
    public function setUserLogin($value)
    {
        $this->userLogin = $value;

        return $this;
    }

    /**
     * Set Password
     *
     * @param string $value
     * @return $this
     */
    public function setUserPassword($value)
    {
        $this->userPassword = $value;

        return $this;
    }

    /**
     * Set Salutation
     *
     * @param string $value
     * @return $this
     */
    public function setUserSalutation($value)
    {
        $this->userSalutation = $value;

        return $this;
    }

    /**
     * Set First name
     *
     * @param string $value
     * @return $this
     */
    public function setUserFirstname($value)
    {
        $this->userFirstname = $value;

        return $this;
    }

    /**
     * Set Last name
     *
     * @param string $value
     * @return $this
     */
    public function setUserLastname($value)
    {
        $this->userLastname = $value;

        return $this;
    }

    /**
     * Set Street address
     *
     * @param string $value
     * @return $this
     */
    public function setUserAddress($value)
    {
        $this->userAddress = $value;

        return $this;
    }

    /**
     * Set City
     *
     * @param string $value
     * @return $this
     */
    public function setUserCity($value)
    {
        $this->userCity = $value;

        return $this;
    }

    /**
     * Set State/Province
     *
     * @param string $value
     * @return $this
     */
    public function setUserState($value)
    {
        $this->userState = $value;

        return $this;
    }

    /**
     * Set Postal Code
     *
     * @param string $value
     * @return $this
     */
    public function setUserPostalcode($value)
    {
        $this->userPostalcode = $value;

        return $this;
    }

    /**
     * Set Zip code plus 4
     *
     * @param string $value
     * @return $this
     */
    public function setUserPlus4($value)
    {
        $this->userPlus4 = $value;

        return $this;
    }

    /**
     * Set Country
     *
     * @param integer $value
     * @return $this
     */
    public function setUserCountry($value)
    {
        $this->userCountry = $value;

        return $this;
    }

    /**
     * Set Home phone number
     *
     * @param string $value
     * @return $this
     */
    public function setUserPhoneHome($value)
    {
        $this->userPhoneHome = $value;

        return $this;
    }

    /**
     * Set Work phone number
     *
     * @param string $value
     * @return $this
     */
    public function setUserPhoneWork($value)
    {
        $this->userPhoneWork = $value;

        return $this;
    }

    /**
     * Set Work phone extension
     *
     * @param string $value
     * @return $this
     */
    public function setUserPhoneWorkExt($value)
    {
        $this->userPhoneWorkExt = $value;

        return $this;
    }

    /**
     * Set Cell phone number
     *
     * @param string $value
     * @return $this
     */
    public function setUserPhoneCell($value)
    {
        $this->userPhoneCell = $value;

        return $this;
    }

    /**
     * Set Fax number
     *
     * @param string $value
     * @return $this
     */
    public function setUserFax($value)
    {
        $this->userFax = $value;

        return $this;
    }

    /**
     * Set Email address
     *
     * @param string $value
     * @return $this
     */
    public function setUserEmail($value)
    {
        $this->userEmail = $value;

        return $this;
    }

    /**
     * Set Alternate email address
     *
     * @param string $value
     * @return $this
     */
    public function setUserEmailAlt($value)
    {
        $this->userEmailAlt = $value;

        return $this;
    }

    /**
     * Set Pager email address
     *
     * @param string $value
     * @return $this
     */
    public function setUserEmailPager($value)
    {
        $this->userEmailPager = $value;

        return $this;
    }

    /**
     * Set User Contact
     *
     * @param integer $value
     * @return $this
     */
    public function setUserContactID($value)
    {
        $this->userContactID = $value;

        return $this;
    }

    /**
     * Set Type
     *
     * @param string $value
     * @return $this
     */
    public function setUserType($value)
    {
        $this->userType = $value;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $value
     * @return $this
     */
    public function setUserStatus($value)
    {
        $this->userStatus = $value;

        return $this;
    }


    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->userLogin !== null) $parameterArray['values'][] = ["userLogin"=>$this->userLogin];
        if ($this->userPassword !== null) $parameterArray['values'][] = ["userPassword"=>$this->userPassword];
        if ($this->userSalutation !== null) $parameterArray['values'][] = ["userSalutation"=>$this->userSalutation];
        if ($this->userFirstname !== null) $parameterArray['values'][] = ["userFirstname"=>$this->userFirstname];
        if ($this->userLastname !== null) $parameterArray['values'][] = ["userLastname"=>$this->userLastname];
        if ($this->userAddress !== null) $parameterArray['values'][] = ["userAddress"=>$this->userAddress];
        if ($this->userCity !== null) $parameterArray['values'][] = ["userCity"=>$this->userCity];
        if ($this->userState !== null) $parameterArray['values'][] = ["userState"=>$this->userState];
        if ($this->userPostalcode !== null) $parameterArray['values'][] = ["userPostalcode"=>$this->userPostalcode];
        if ($this->userPlus4 !== null) $parameterArray['values'][] = ["userPlus4"=>$this->userPlus4];
        if ($this->userCountry !== null) $parameterArray['values'][] = ["userCountry"=>$this->userCountry];
        if ($this->userPhoneHome !== null) $parameterArray['values'][] = ["userPhoneHome"=>$this->userPhoneHome];
        if ($this->userPhoneWork !== null) $parameterArray['values'][] = ["userPhoneWork"=>$this->userPhoneWork];
        if ($this->userPhoneWorkExt !== null) $parameterArray['values'][] = ["userPhoneWorkExt"=>$this->userPhoneWorkExt];
        if ($this->userPhoneCell !== null) $parameterArray['values'][] = ["userPhoneCell"=>$this->userPhoneCell];
        if ($this->userFax !== null) $parameterArray['values'][] = ["userFax"=>$this->userFax];
        if ($this->userEmail !== null) $parameterArray['values'][] = ["userEmail"=>$this->userEmail];
        if ($this->userEmailAlt !== null) $parameterArray['values'][] = ["userEmailAlt"=>$this->userEmailAlt];
        if ($this->userEmailPager !== null) $parameterArray['values'][] = ["userEmailPager"=>$this->userEmailPager];
        if ($this->userContactID !== null) $parameterArray['values'][] = ["userContactID"=>$this->userContactID];
        if ($this->userType !== null) $parameterArray['values'][] = ["userType"=>$this->userType];
        if ($this->userStatus !== null) $parameterArray['values'][] = ["userStatus"=>$this->userStatus];
    }
}