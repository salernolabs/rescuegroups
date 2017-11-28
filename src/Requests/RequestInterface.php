<?php
/**
 * Request Interface
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author Eric
 */
namespace RescueGroups\Requests;

interface RequestInterface
{
    /**
     * Return true if login is required
     *
     * @return mixed
     */
    public function loginRequired();
}