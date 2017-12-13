<?php
/**
 * Request Interface
 *
 * @package RescueGroups
 * @subpackage Request
 * @author Eric
 */
namespace RescueGroups\Request;

interface RequestInterface
{
    /**
     * Return true if login is required
     *
     * @return mixed
     */
    public function loginRequired();
}