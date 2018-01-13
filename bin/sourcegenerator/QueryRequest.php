<?php
/**
 * Class QueryRequest
 */
class QueryRequest
{
    /**
     * @var string
     */
    public $className;

    /**
     * @var string
     */
    public $requestName;

    /**
     * @var string
     */
    public $requestClassName;

    /**
     * @var string
     */
    public $responseClassName;

    /**
     * @var string
     */
    public $typeName;

    /**
     * @var string
     */
    public $objectAction;

    /**
     * @var string
     */
    public $loginRequired = 'true';

    /**
     * @var QueryField[]
     */
    public $fields = [];

    /**
     * @var \DateTime
     */
    public $date;

    /**
     * QueryRequest constructor.
     */
    public function __construct($className, $type, $request, $requestData)
    {
        $this->date = new \DateTime();

        $this->className = $className;
        $this->typeName = $type;
        $this->requestName = $request;
        $this->objectAction = $request;
        $this->responseClassName = $this->getResponseObjectClassName($this->className);

        $this->requestClassName = ucfirst($request);
        if ($this->requestClassName == 'List')
        {
            $this->requestClassName = 'GetList';
        }

        if (!empty($requestData->fields))
        {
            foreach ($requestData->fields as $fieldName => $fieldData)
            {
                if (empty($fieldData->type)) return;

                //Create friendly field name
                $sdkFieldName = $fieldName;

                //AnimalQualities is the exception here, the field would be blank because it's name is animalQualities
                if ($this->className != 'AnimalQualities' && $this->className != 'EventAnimalAttendance')
                    $sdkFieldName = lcfirst(str_replace($type, '', $fieldName));

                if ($sdkFieldName == 'iD') $sdkFieldName = 'id';

                $field = new QueryField($fieldName, $sdkFieldName, $fieldData);
                $this->fields[] = $field;
            }
        }
    }

    /**
     * @return bool
     */
    public function isSearch()
    {
        return ($this->requestName == 'search' || $this->requestName == 'publicSearch');
    }

    /**
     * @return bool
     */
    public function isList()
    {
        return ($this->requestName == 'list' || $this->requestName == 'publicList');
    }

    /**
     * @return bool
     */
    public function needsParametersInterface()
    {
        return !empty($this->fields);
    }

    /**
     * Get response object class name
     *
     * @param $responseClassName
     * @return string
     */
    private function getResponseObjectClassName($responseClassName)
    {
        if (substr($responseClassName, -7) != 'Species')
        {
            if (substr($responseClassName, -3) == 'ses')
            {
                $responseClassName = substr($responseClassName, 0, -2);
            }
            elseif (substr($responseClassName, -3) == 'ies')
            {
                $responseClassName = substr($responseClassName, 0, -3) . 'y';
            }
            elseif (substr($responseClassName, -1) == 's')
            {
                $responseClassName = substr($responseClassName, 0, -1);
            }
        }

        return $responseClassName;
    }
}
