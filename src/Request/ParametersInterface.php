<?php
/**
 * Request Parameters Interface
 *
 * @package RescueGroups
 * @subpackage Request
 * @author Eric
 */
namespace RescueGroups\Request;

interface ParametersInterface
{
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray);
}