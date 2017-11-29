<?php
/**
 * Process Response After Completion Interface
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author Eric
 */
namespace RescueGroups\Requests;

interface ProcessResponseInterface
{
    /**
     * Process Response Interface
     *
     * @param \RescueGroups\API $api
     * @param $data
     * @return mixed
     */
    public function processResponse(\RescueGroups\API $api, $data);
}