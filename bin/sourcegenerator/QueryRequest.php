<?php
/**
 * Class QueryRequest
 */
class QueryRequest
{
    /**
     * @var array
     */
    static private $parameterAddList;

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

        if ($requestData->permissions == 'Public')
        {
            $this->loginRequired = 'false';
        }

        if (!empty($requestData->fields))
        {
            $foundKey = false;
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

                if (!$foundKey && $fieldData->type == 'key')
                {
                    $foundKey = true;
                    $field->isKey = true;
                }

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
    public function isEdit()
    {
        return ($this->requestName == 'edit');
    }

    /**
     * @return bool
     */
    public function isAdd()
    {
        $nonObject = static::getParameterAddList();

        if (!empty($nonObject[$this->typeName]))
        {
            return false;
        }

        return ($this->requestName == 'add');
    }

    /**
     * @return bool
     */
    public function isParameterAdd()
    {
        $nonObject = static::getParameterAddList();

        return !empty($nonObject[$this->typeName]) && $this->requestName == 'add';
    }

    /**
     * @return bool
     */
    public function isRegular()
    {
        return !$this->isSearch() && !$this->isList() && !$this->isAdd() && !$this->isParameterAdd() && !$this->isEdit();
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

    /**
     * Get parameter add list
     *
     * @return array
     */
    static private function getParameterAddList()
    {
        if (!empty(static::$parameterAddList)) return static::$parameterAddList;

        static::$parameterAddList = [
            'animalFiles' => 1,
            'animalsAdoptions' => 1,
            'callsLogentries' => 1,
            'coloniesCaretakers' => 1,
            'contactFiles' => 1,
            'contacts' => 1,
            'donations' => 1,
            'inventoryfiles' => 1,
            'inventoryitems' => 1,
            'memorials' => 1,
            'microchipRegistrations' => 1,
            'users' => 1,
            'webfiles' => 1,
            'webimages' => 1
        ];

        return static::$parameterAddList;
    }
}
