<?php
/**
 * RescueGroups Messages Responses
 *
 * @package RescueGroups
 * @subpackage Responses
 * @author Eric
 */
namespace RescueGroups\Responses;

class Messages
{
    /**
     * @var string[]
     */
    public $general = [];

    /**
     * @var string[]
     */
    public $record = [];

    /**
     * Messages constructor.
     * @param $data
     */
    public function __construct($data)
    {
        if (!empty($data->generalMessages))
        {
            $this->general = $data->generalMessages;
        }

        if (!empty($data->recordMessages))
        {
            $this->record = $data->recordMessages;
        }
    }
}