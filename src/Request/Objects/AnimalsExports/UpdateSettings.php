<?php
/**
 * AnimalsExports UpdateSettings Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsExports;

class UpdateSettings extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animalsExports';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'updateSettings';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Prevent adopted animals from being uploaded to Petfinder
     *
     * @var string
     */
    private $disableAnimalExportAdopted = null;

    /**
     * Prevent courtesy animals from being uploaded to other sites
     *
     * @var string
     */
    private $disableAnimalExportCourtesy = null;

    /**
     * Disable the link to the animal's web page
     *
     * @var string
     */
    private $disableAnimalExportAnimalWebPageLink = null;

    /**
     * Disable the link to your organization's website
     *
     * @var string
     */
    private $disableAnimalExportWebsiteLink = null;

    /**
     * Disable the link to your adoption form
     *
     * @var string
     */
    private $disableAnimalExportAdoptionFormLink = null;

    /**
     * Include the Animal Description Header in the animal description
     *
     * @var string
     */
    private $enableAnimalExportDescriptionHeader = null;

    /**
     * Include the Animal Description Footer in the animal description
     *
     * @var string
     */
    private $enableAnimalExportDescriptionFooter = null;

    /**
     * Use the RescueGroups.org Animal ID as a Unique ID
     *
     * @var string
     */
    private $enableAnimalExportUniqueAnimalID = null;

    /**
     * Show the foster/caretaker's first name
     *
     * @var string
     */
    private $enableAnimalExportContactFieldFirstname = null;

    /**
     * Show the foster/caretaker's last name
     *
     * @var string
     */
    private $enableAnimalExportContactFieldLastname = null;

    /**
     * Show the foster/caretaker's email address
     *
     * @var string
     */
    private $enableAnimalExportContactFieldEmail = null;

    /**
     * Show the foster/caretaker's home phone number
     *
     * @var string
     */
    private $enableAnimalExportContactFieldPhoneHome = null;

    /**
     * Show the foster/caretaker's cell phone number
     *
     * @var string
     */
    private $enableAnimalExportContactFieldPhoneCell = null;

    /**
     * Account to use for YouTube video upload
     *
     * @var string
     */
    private $setAnimalExportYouTubeAccount = null;


    /**
     * Set Prevent adopted animals from being uploaded to Petfinder
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalExportAdopted($value)
    {
        $this->disableAnimalExportAdopted = $value;

        return $this;
    }

    /**
     * Set Prevent courtesy animals from being uploaded to other sites
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalExportCourtesy($value)
    {
        $this->disableAnimalExportCourtesy = $value;

        return $this;
    }

    /**
     * Set Disable the link to the animal's web page
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalExportAnimalWebPageLink($value)
    {
        $this->disableAnimalExportAnimalWebPageLink = $value;

        return $this;
    }

    /**
     * Set Disable the link to your organization's website
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalExportWebsiteLink($value)
    {
        $this->disableAnimalExportWebsiteLink = $value;

        return $this;
    }

    /**
     * Set Disable the link to your adoption form
     *
     * @param string $value
     * @return $this
     */
    public function setDisableAnimalExportAdoptionFormLink($value)
    {
        $this->disableAnimalExportAdoptionFormLink = $value;

        return $this;
    }

    /**
     * Set Include the Animal Description Header in the animal description
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalExportDescriptionHeader($value)
    {
        $this->enableAnimalExportDescriptionHeader = $value;

        return $this;
    }

    /**
     * Set Include the Animal Description Footer in the animal description
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalExportDescriptionFooter($value)
    {
        $this->enableAnimalExportDescriptionFooter = $value;

        return $this;
    }

    /**
     * Set Use the RescueGroups.org Animal ID as a Unique ID
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalExportUniqueAnimalID($value)
    {
        $this->enableAnimalExportUniqueAnimalID = $value;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's first name
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalExportContactFieldFirstname($value)
    {
        $this->enableAnimalExportContactFieldFirstname = $value;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's last name
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalExportContactFieldLastname($value)
    {
        $this->enableAnimalExportContactFieldLastname = $value;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's email address
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalExportContactFieldEmail($value)
    {
        $this->enableAnimalExportContactFieldEmail = $value;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's home phone number
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalExportContactFieldPhoneHome($value)
    {
        $this->enableAnimalExportContactFieldPhoneHome = $value;

        return $this;
    }

    /**
     * Set Show the foster/caretaker's cell phone number
     *
     * @param string $value
     * @return $this
     */
    public function setEnableAnimalExportContactFieldPhoneCell($value)
    {
        $this->enableAnimalExportContactFieldPhoneCell = $value;

        return $this;
    }

    /**
     * Set Account to use for YouTube video upload
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalExportYouTubeAccount($value)
    {
        $this->setAnimalExportYouTubeAccount = $value;

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

        $value = [];
        if ($this->disableAnimalExportAdopted !== null) $value["disableAnimalExportAdopted"] = $this->disableAnimalExportAdopted;
        if ($this->disableAnimalExportCourtesy !== null) $value["disableAnimalExportCourtesy"] = $this->disableAnimalExportCourtesy;
        if ($this->disableAnimalExportAnimalWebPageLink !== null) $value["disableAnimalExportAnimalWebPageLink"] = $this->disableAnimalExportAnimalWebPageLink;
        if ($this->disableAnimalExportWebsiteLink !== null) $value["disableAnimalExportWebsiteLink"] = $this->disableAnimalExportWebsiteLink;
        if ($this->disableAnimalExportAdoptionFormLink !== null) $value["disableAnimalExportAdoptionFormLink"] = $this->disableAnimalExportAdoptionFormLink;
        if ($this->enableAnimalExportDescriptionHeader !== null) $value["enableAnimalExportDescriptionHeader"] = $this->enableAnimalExportDescriptionHeader;
        if ($this->enableAnimalExportDescriptionFooter !== null) $value["enableAnimalExportDescriptionFooter"] = $this->enableAnimalExportDescriptionFooter;
        if ($this->enableAnimalExportUniqueAnimalID !== null) $value["enableAnimalExportUniqueAnimalID"] = $this->enableAnimalExportUniqueAnimalID;
        if ($this->enableAnimalExportContactFieldFirstname !== null) $value["enableAnimalExportContactFieldFirstname"] = $this->enableAnimalExportContactFieldFirstname;
        if ($this->enableAnimalExportContactFieldLastname !== null) $value["enableAnimalExportContactFieldLastname"] = $this->enableAnimalExportContactFieldLastname;
        if ($this->enableAnimalExportContactFieldEmail !== null) $value["enableAnimalExportContactFieldEmail"] = $this->enableAnimalExportContactFieldEmail;
        if ($this->enableAnimalExportContactFieldPhoneHome !== null) $value["enableAnimalExportContactFieldPhoneHome"] = $this->enableAnimalExportContactFieldPhoneHome;
        if ($this->enableAnimalExportContactFieldPhoneCell !== null) $value["enableAnimalExportContactFieldPhoneCell"] = $this->enableAnimalExportContactFieldPhoneCell;
        if ($this->setAnimalExportYouTubeAccount !== null) $value["setAnimalExportYouTubeAccount"] = $this->setAnimalExportYouTubeAccount;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}