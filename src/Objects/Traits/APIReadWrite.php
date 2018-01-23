<?php
/**
 * API Reading and Writing helper trait
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author Eric
 */
namespace RescueGroups\Objects\Traits;

trait APIReadWrite
{
    /**
     * Map from API
     *
     * @param $inputObject
     */
    private function mapFromAPI($inputObject)
    {
        foreach ($inputObject as $field => $value)
        {
            $mappingField = !empty(static::$apiMapping['input'][$field]) ? static::$apiMapping['input'][$field] : $field;

            $this->$mappingField = $value;
        }
    }

    /**
     * Map to API
     *
     * @param $includeId
     * @return array
     */
    private function mapToAPI($includeId)
    {
        $output = [];
        foreach ($this as $field => $value)
        {
            if ($value === null) continue;

            if (!$includeId && !empty(static::$apiMapping['id']) && $field == static::$apiMapping['id']) continue;

            $mappingField = !empty(static::$apiMapping['output'][$field]) ? static::$apiMapping['output'][$field] : $field;

            $output[$mappingField] = $value;
        }

        return $output;
    }
}