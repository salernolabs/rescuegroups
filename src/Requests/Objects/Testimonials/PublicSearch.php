<?php
/**
 * Testimonials PublicSearch Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\Testimonials;

class PublicSearch implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $testimonialID = null;

    /**
     * Location
     * @var string
     */
    private $testimonialLocation = null;

    /**
     * Distance
     * @var string
     */
    private $testimonialLocationDistance = null;

    /**
     * City, State
     * @var string
     */
    private $testimonialLocationCitystate = null;

    /**
     * Service
     * @var string
     */
    private $testimonialService = null;

    /**
     * User first name
     * @var string
     */
    private $testimonialUserFirstname = null;

    /**
     * Date
     * @var \DateTime
     */
    private $testimonialCreatedDate = null;

    /**
     * Testimonial
     * @var string
     */
    private $testimonialContent = null;


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return true;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'testimonials';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'publicSearch';
    }

    /**
     * Set ID
     *
     * @param integer $testimonialID
     * @return $this
     */
    public function setTestimonialID($testimonialID)
    {
        $this->testimonialID = $testimonialID;

        return $this;
    }

    /**
     * Set Location
     *
     * @param string $testimonialLocation
     * @return $this
     */
    public function setTestimonialLocation($testimonialLocation)
    {
        $this->testimonialLocation = $testimonialLocation;

        return $this;
    }

    /**
     * Set Distance
     *
     * @param string $testimonialLocationDistance
     * @return $this
     */
    public function setTestimonialLocationDistance($testimonialLocationDistance)
    {
        $this->testimonialLocationDistance = $testimonialLocationDistance;

        return $this;
    }

    /**
     * Set City, State
     *
     * @param string $testimonialLocationCitystate
     * @return $this
     */
    public function setTestimonialLocationCitystate($testimonialLocationCitystate)
    {
        $this->testimonialLocationCitystate = $testimonialLocationCitystate;

        return $this;
    }

    /**
     * Set Service
     *
     * @param string $testimonialService
     * @return $this
     */
    public function setTestimonialService($testimonialService)
    {
        $this->testimonialService = $testimonialService;

        return $this;
    }

    /**
     * Set User first name
     *
     * @param string $testimonialUserFirstname
     * @return $this
     */
    public function setTestimonialUserFirstname($testimonialUserFirstname)
    {
        $this->testimonialUserFirstname = $testimonialUserFirstname;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $testimonialCreatedDate
     * @return $this
     */
    public function setTestimonialCreatedDate($testimonialCreatedDate)
    {
        $this->testimonialCreatedDate = $testimonialCreatedDate;

        return $this;
    }

    /**
     * Set Testimonial
     *
     * @param string $testimonialContent
     * @return $this
     */
    public function setTestimonialContent($testimonialContent)
    {
        $this->testimonialContent = $testimonialContent;

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
        if ($this->testimonialID !== null) $parameterArray['testimonialID'] = $this->testimonialID;
        if ($this->testimonialLocation !== null) $parameterArray['testimonialLocation'] = $this->testimonialLocation;
        if ($this->testimonialLocationDistance !== null) $parameterArray['testimonialLocationDistance'] = $this->testimonialLocationDistance;
        if ($this->testimonialLocationCitystate !== null) $parameterArray['testimonialLocationCitystate'] = $this->testimonialLocationCitystate;
        if ($this->testimonialService !== null) $parameterArray['testimonialService'] = $this->testimonialService;
        if ($this->testimonialUserFirstname !== null) $parameterArray['testimonialUserFirstname'] = $this->testimonialUserFirstname;
        if ($this->testimonialCreatedDate !== null) $parameterArray['testimonialCreatedDate'] = $this->testimonialCreatedDate;
        if ($this->testimonialContent !== null) $parameterArray['testimonialContent'] = $this->testimonialContent;

        $this->addSearchParameters($parameterArray);

    }
}