<?php
/**
 * AnimalsExports UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\AnimalsExports;

class UpdateSettings implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Prevent adopted animals from being uploaded to Petfinder
     * @var string
     */
    private $disableAnimalExportAdopted = null;

    /**
     * Prevent courtesy animals from being uploaded to other sites
     * @var string
     */
    private $disableAnimalExportCourtesy = null;

    /**
     * Disable the link to the animal's web page
     * @var string
     */
    private $disableAnimalExportAnimalWebPageLink = null;

    /**
     * Disable the link to your organization's website
     * @var string
     */
    private $disableAnimalExportWebsiteLink = null;

    /**
     * Disable the link to your adoption form
     * @var string
     */
    private $disableAnimalExportAdoptionFormLink = null;

    /**
     * Include the Animal Description Header in the animal description
     * @var string
     */
    private $enableAnimalExportDescriptionHeader = null;

    /**
     * Include the Animal Description Footer in the animal description
     * @var string
     */
    private $enableAnimalExportDescriptionFooter = null;

    /**
     * Use the RescueGroups.org Animal ID as a Unique ID
     * @var string
     */
    private $enableAnimalExportUniqueAnimalID = null;

    /**
     * Show the foster/caretaker's first name
     * @var string
     */
    private $enableAnimalExportContactFieldFirstname = null;

    /**
     * Show the foster/caretaker's last name
     * @var string
     */
    private $enableAnimalExportContactFieldLastname = null;

    /**
     * Show the foster/caretaker's email address
     * @var string
     */
    private $enableAnimalExportContactFieldEmail = null;

    /**
     * Show the foster/caretaker's home phone number
     * @var string
     */
    private $enableAnimalExportContactFieldPhoneHome = null;

    /**
     * Show the foster/caretaker's cell phone number
     * @var string
     */
    private $enableAnimalExportContactFieldPhoneCell = null;

    /**
     * Account to use for YouTube video upload
     * @var string
     */
    private $setAnimalExportYouTubeAccount = null;

    /**
     * By default, export to services that list animals for adoption
     * @var string
     */
    private $setAnimalExportDefaultCategory1 = null;

    /**
     * By default, export to services that list animals for adoption (from non-rescue/shelters)
     * @var string
     */
    private $setAnimalExportDefaultCategory4 = null;

    /**
     * By default, export to services that list animals for sale by breeder
     * @var string
     */
    private $setAnimalExportDefaultCategory3 = null;

    /**
     * By default, export to services that list animals for sale by owner
     * @var string
     */
    private $setAnimalExportDefaultCategory2 = null;

    /**
     * By default, export to services that provide animal related classifieds
     * @var string
     */
    private $setAnimalExportDefaultCategory5 = null;

    /**
     * By default, export to services that provide animal related community discussion/forums
     * @var string
     */
    private $setAnimalExportDefaultCategory6 = null;

    /**
     * By default, export to services that provide animal related educational information
     * @var string
     */
    private $setAnimalExportDefaultCategory8 = null;

    /**
     * By default, export to services that provide animal related news
     * @var string
     */
    private $setAnimalExportDefaultCategory7 = null;

    /**
     * By default, export to services that provide event calendars
     * @var string
     */
    private $setAnimalExportDefaultCategory13 = null;

    /**
     * By default, export to services that sell/promote animal related products (food, toys, treats, etc)
     * @var string
     */
    private $setAnimalExportDefaultCategory9 = null;

    /**
     * By default, export to services that sell/promote animal related services (training, grooming)
     * @var string
     */
    private $setAnimalExportDefaultCategory11 = null;

    /**
     * By default, export to services that sell/promote non-animal related products
     * @var string
     */
    private $setAnimalExportDefaultCategory10 = null;

    /**
     * By default, export to services that sell/promote non-animal related services
     * @var string
     */
    private $setAnimalExportDefaultCategory12 = null;


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return false;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'animalsExports';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'updateSettings';
    }

    /**
     * Set Prevent adopted animals from being uploaded to Petfinder
     *
     * @param string $disableAnimalExportAdopted
     * @return $this
     */
    public function setDisableAnimalExportAdopted($disableAnimalExportAdopted)
    {
        $this->disableAnimalExportAdopted = $disableAnimalExportAdopted;

        return $this;
    }

    /**
     * Set Prevent courtesy animals from being uploaded to other sites
     *
     * @param string $disableAnimalExportCourtesy
     * @return $this
     */
    public function setDisableAnimalExportCourtesy($disableAnimalExportCourtesy)
    {
        $this->disableAnimalExportCourtesy = $disableAnimalExportCourtesy;

        return $this;
    }

    /**
     * Set Disable the link to the animal's web page
     *
     * @param string $disableAnimalExportAnimalWebPageLink
     * @return $this
     */
    public function setDisableAnimalExportAnimalWebPageLink($disableAnimalExportAnimalWebPageLink)
    {
        $this->disableAnimalExportAnimalWebPageLink = $disableAnimalExportAnimalWebPageLink;

        return $this;
    }

    /**
     * Set Disable the link to your organization's website
     *
     * @param string $disableAnimalExportWebsiteLink
     * @return $this
     */
    public function setDisableAnimalExportWebsiteLink($disableAnimalExportWebsiteLink)
    {
        $this->disableAnimalExportWebsiteLink = $disableAnimalExportWebsiteLink;

        return $this;
    }

    /**
     * Set Disable the link to your adoption form
     *
     * @param string $disableAnimalExportAdoptionFormLink
     * @return $this
     */
    public function setDisableAnimalExportAdoptionFormLink($disableAnimalExportAdoptionFormLink)
    {
        $this->disableAnimalExportAdoptionFormLink = $disableAnimalExportAdoptionFormLink;

        return $this;
    }

    /**
     * Set Include the Animal Description Header in the animal description
     *
     * @param string $enableAnimalExportDescriptionHeader
     * @return $this
     */
    public function setEnableAnimalExportDescriptionHeader($enableAnimalExportDescriptionHeader)
    {
        $this->enableAnimalExportDescriptionHeader = $enableAnimalExportDescriptionHeader;

        return $this;
    }

    /**
     * Set Include the Animal Description Footer in the animal description
     *
     * @param string $enableAnimalExportDescriptionFooter
     * @return $this
     */
    public function setEnableAnimalExportDescriptionFooter($enableAnimalExportDescriptionFooter)
    {
        $this->enableAnimalExportDescriptionFooter = $enableAnimalExportDescriptionFooter;

        return $this;
    }

    /**
     * Set Use the RescueGroups.org Animal ID as a Unique ID
     *
     * @param string $enableAnimalExportUniqueAnimalID
     * @return $this
     */
    public function setEnableAnimalExportUniqueAnimalID($enableAnimalExportUniqueAnimalID)
    {
        $this->enableAnimalExportUniqueAnimalID = $enableAnimalExportUniqueAnimalID;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's first name
     *
     * @param string $enableAnimalExportContactFieldFirstname
     * @return $this
     */
    public function setEnableAnimalExportContactFieldFirstname($enableAnimalExportContactFieldFirstname)
    {
        $this->enableAnimalExportContactFieldFirstname = $enableAnimalExportContactFieldFirstname;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's last name
     *
     * @param string $enableAnimalExportContactFieldLastname
     * @return $this
     */
    public function setEnableAnimalExportContactFieldLastname($enableAnimalExportContactFieldLastname)
    {
        $this->enableAnimalExportContactFieldLastname = $enableAnimalExportContactFieldLastname;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's email address
     *
     * @param string $enableAnimalExportContactFieldEmail
     * @return $this
     */
    public function setEnableAnimalExportContactFieldEmail($enableAnimalExportContactFieldEmail)
    {
        $this->enableAnimalExportContactFieldEmail = $enableAnimalExportContactFieldEmail;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's home phone number
     *
     * @param string $enableAnimalExportContactFieldPhoneHome
     * @return $this
     */
    public function setEnableAnimalExportContactFieldPhoneHome($enableAnimalExportContactFieldPhoneHome)
    {
        $this->enableAnimalExportContactFieldPhoneHome = $enableAnimalExportContactFieldPhoneHome;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's cell phone number
     *
     * @param string $enableAnimalExportContactFieldPhoneCell
     * @return $this
     */
    public function setEnableAnimalExportContactFieldPhoneCell($enableAnimalExportContactFieldPhoneCell)
    {
        $this->enableAnimalExportContactFieldPhoneCell = $enableAnimalExportContactFieldPhoneCell;

        return $this;
    }

    /**
     * Set Account to use for YouTube video upload
     *
     * @param string $setAnimalExportYouTubeAccount
     * @return $this
     */
    public function setSetAnimalExportYouTubeAccount($setAnimalExportYouTubeAccount)
    {
        $this->setAnimalExportYouTubeAccount = $setAnimalExportYouTubeAccount;

        return $this;
    }

    /**
     * Set By default, export to services that list animals for adoption
     *
     * @param string $setAnimalExportDefaultCategory1
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory1($setAnimalExportDefaultCategory1)
    {
        $this->setAnimalExportDefaultCategory1 = $setAnimalExportDefaultCategory1;

        return $this;
    }

    /**
     * Set By default, export to services that list animals for adoption (from non-rescue/shelters)
     *
     * @param string $setAnimalExportDefaultCategory4
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory4($setAnimalExportDefaultCategory4)
    {
        $this->setAnimalExportDefaultCategory4 = $setAnimalExportDefaultCategory4;

        return $this;
    }

    /**
     * Set By default, export to services that list animals for sale by breeder
     *
     * @param string $setAnimalExportDefaultCategory3
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory3($setAnimalExportDefaultCategory3)
    {
        $this->setAnimalExportDefaultCategory3 = $setAnimalExportDefaultCategory3;

        return $this;
    }

    /**
     * Set By default, export to services that list animals for sale by owner
     *
     * @param string $setAnimalExportDefaultCategory2
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory2($setAnimalExportDefaultCategory2)
    {
        $this->setAnimalExportDefaultCategory2 = $setAnimalExportDefaultCategory2;

        return $this;
    }

    /**
     * Set By default, export to services that provide animal related classifieds
     *
     * @param string $setAnimalExportDefaultCategory5
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory5($setAnimalExportDefaultCategory5)
    {
        $this->setAnimalExportDefaultCategory5 = $setAnimalExportDefaultCategory5;

        return $this;
    }

    /**
     * Set By default, export to services that provide animal related community discussion/forums
     *
     * @param string $setAnimalExportDefaultCategory6
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory6($setAnimalExportDefaultCategory6)
    {
        $this->setAnimalExportDefaultCategory6 = $setAnimalExportDefaultCategory6;

        return $this;
    }

    /**
     * Set By default, export to services that provide animal related educational information
     *
     * @param string $setAnimalExportDefaultCategory8
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory8($setAnimalExportDefaultCategory8)
    {
        $this->setAnimalExportDefaultCategory8 = $setAnimalExportDefaultCategory8;

        return $this;
    }

    /**
     * Set By default, export to services that provide animal related news
     *
     * @param string $setAnimalExportDefaultCategory7
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory7($setAnimalExportDefaultCategory7)
    {
        $this->setAnimalExportDefaultCategory7 = $setAnimalExportDefaultCategory7;

        return $this;
    }

    /**
     * Set By default, export to services that provide event calendars
     *
     * @param string $setAnimalExportDefaultCategory13
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory13($setAnimalExportDefaultCategory13)
    {
        $this->setAnimalExportDefaultCategory13 = $setAnimalExportDefaultCategory13;

        return $this;
    }

    /**
     * Set By default, export to services that sell/promote animal related products (food, toys, treats, etc)
     *
     * @param string $setAnimalExportDefaultCategory9
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory9($setAnimalExportDefaultCategory9)
    {
        $this->setAnimalExportDefaultCategory9 = $setAnimalExportDefaultCategory9;

        return $this;
    }

    /**
     * Set By default, export to services that sell/promote animal related services (training, grooming)
     *
     * @param string $setAnimalExportDefaultCategory11
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory11($setAnimalExportDefaultCategory11)
    {
        $this->setAnimalExportDefaultCategory11 = $setAnimalExportDefaultCategory11;

        return $this;
    }

    /**
     * Set By default, export to services that sell/promote non-animal related products
     *
     * @param string $setAnimalExportDefaultCategory10
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory10($setAnimalExportDefaultCategory10)
    {
        $this->setAnimalExportDefaultCategory10 = $setAnimalExportDefaultCategory10;

        return $this;
    }

    /**
     * Set By default, export to services that sell/promote non-animal related services
     *
     * @param string $setAnimalExportDefaultCategory12
     * @return $this
     */
    public function setSetAnimalExportDefaultCategory12($setAnimalExportDefaultCategory12)
    {
        $this->setAnimalExportDefaultCategory12 = $setAnimalExportDefaultCategory12;

        return $this;
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->disableAnimalExportAdopted !== null) $parameterArray['disableAnimalExportAdopted'] = $this->disableAnimalExportAdopted;
        if ($this->disableAnimalExportCourtesy !== null) $parameterArray['disableAnimalExportCourtesy'] = $this->disableAnimalExportCourtesy;
        if ($this->disableAnimalExportAnimalWebPageLink !== null) $parameterArray['disableAnimalExportAnimalWebPageLink'] = $this->disableAnimalExportAnimalWebPageLink;
        if ($this->disableAnimalExportWebsiteLink !== null) $parameterArray['disableAnimalExportWebsiteLink'] = $this->disableAnimalExportWebsiteLink;
        if ($this->disableAnimalExportAdoptionFormLink !== null) $parameterArray['disableAnimalExportAdoptionFormLink'] = $this->disableAnimalExportAdoptionFormLink;
        if ($this->enableAnimalExportDescriptionHeader !== null) $parameterArray['enableAnimalExportDescriptionHeader'] = $this->enableAnimalExportDescriptionHeader;
        if ($this->enableAnimalExportDescriptionFooter !== null) $parameterArray['enableAnimalExportDescriptionFooter'] = $this->enableAnimalExportDescriptionFooter;
        if ($this->enableAnimalExportUniqueAnimalID !== null) $parameterArray['enableAnimalExportUniqueAnimalID'] = $this->enableAnimalExportUniqueAnimalID;
        if ($this->enableAnimalExportContactFieldFirstname !== null) $parameterArray['enableAnimalExportContactFieldFirstname'] = $this->enableAnimalExportContactFieldFirstname;
        if ($this->enableAnimalExportContactFieldLastname !== null) $parameterArray['enableAnimalExportContactFieldLastname'] = $this->enableAnimalExportContactFieldLastname;
        if ($this->enableAnimalExportContactFieldEmail !== null) $parameterArray['enableAnimalExportContactFieldEmail'] = $this->enableAnimalExportContactFieldEmail;
        if ($this->enableAnimalExportContactFieldPhoneHome !== null) $parameterArray['enableAnimalExportContactFieldPhoneHome'] = $this->enableAnimalExportContactFieldPhoneHome;
        if ($this->enableAnimalExportContactFieldPhoneCell !== null) $parameterArray['enableAnimalExportContactFieldPhoneCell'] = $this->enableAnimalExportContactFieldPhoneCell;
        if ($this->setAnimalExportYouTubeAccount !== null) $parameterArray['setAnimalExportYouTubeAccount'] = $this->setAnimalExportYouTubeAccount;
        if ($this->setAnimalExportDefaultCategory1 !== null) $parameterArray['setAnimalExportDefaultCategory1'] = $this->setAnimalExportDefaultCategory1;
        if ($this->setAnimalExportDefaultCategory4 !== null) $parameterArray['setAnimalExportDefaultCategory4'] = $this->setAnimalExportDefaultCategory4;
        if ($this->setAnimalExportDefaultCategory3 !== null) $parameterArray['setAnimalExportDefaultCategory3'] = $this->setAnimalExportDefaultCategory3;
        if ($this->setAnimalExportDefaultCategory2 !== null) $parameterArray['setAnimalExportDefaultCategory2'] = $this->setAnimalExportDefaultCategory2;
        if ($this->setAnimalExportDefaultCategory5 !== null) $parameterArray['setAnimalExportDefaultCategory5'] = $this->setAnimalExportDefaultCategory5;
        if ($this->setAnimalExportDefaultCategory6 !== null) $parameterArray['setAnimalExportDefaultCategory6'] = $this->setAnimalExportDefaultCategory6;
        if ($this->setAnimalExportDefaultCategory8 !== null) $parameterArray['setAnimalExportDefaultCategory8'] = $this->setAnimalExportDefaultCategory8;
        if ($this->setAnimalExportDefaultCategory7 !== null) $parameterArray['setAnimalExportDefaultCategory7'] = $this->setAnimalExportDefaultCategory7;
        if ($this->setAnimalExportDefaultCategory13 !== null) $parameterArray['setAnimalExportDefaultCategory13'] = $this->setAnimalExportDefaultCategory13;
        if ($this->setAnimalExportDefaultCategory9 !== null) $parameterArray['setAnimalExportDefaultCategory9'] = $this->setAnimalExportDefaultCategory9;
        if ($this->setAnimalExportDefaultCategory11 !== null) $parameterArray['setAnimalExportDefaultCategory11'] = $this->setAnimalExportDefaultCategory11;
        if ($this->setAnimalExportDefaultCategory10 !== null) $parameterArray['setAnimalExportDefaultCategory10'] = $this->setAnimalExportDefaultCategory10;
        if ($this->setAnimalExportDefaultCategory12 !== null) $parameterArray['setAnimalExportDefaultCategory12'] = $this->setAnimalExportDefaultCategory12;

    }
}