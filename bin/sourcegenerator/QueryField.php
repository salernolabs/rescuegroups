<?php
/**
 * Class QueryField
 *
 *
 */
class QueryField
{
    /**
     * @var string
     */
    public $friendlyName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sdkFieldName;

    /**
     * @var string
     */
    public $parameterName;

    /**
     * @var string
     */
    public $required = "0";

    /**
     * QueryField constructor.
     * @param $fieldName
     * @param $sdkFieldName
     * @param $fieldData
     */
    public function __construct($fieldName, $sdkFieldName, $fieldData)
    {
        $this->sdkFieldName = $sdkFieldName;
        $this->parameterName = ucfirst($sdkFieldName);

        switch ($fieldData->type)
        {
            case 'key':
                $this->type = 'integer';
                break;

            case 'date':
                $this->type = '\DateTime';
                break;

            case 'datetime':
                $this->type = '\DateTime';
                break;

            case 'decimal':
                $this->type = 'float';
                break;

            default:
                $this->type = 'string';
                break;
        }

        $this->friendlyName = $fieldData->friendlyname;
        $this->name = $fieldData->name;

        if ($fieldData->friendlyname == 'ID' || (!empty($fieldData->properties[0]) && $fieldData->properties[0] == 'required'))
        {
            $this->required = "1";
        }

        if (empty($this->friendlyName))
        {
            $this->friendlyName = $this->sdkFieldName;
        }
    }
}
