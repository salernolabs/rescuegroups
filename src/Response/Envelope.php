<?php
/**
 * RescueGroups API Envelope
 *
 * @package RescueGroups
 * @subpackage Response
 * @author Eric
 */
namespace RescueGroups\Response;

class Envelope
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var Messages
     */
    public $messages;

    /**
     * @var int
     */
    public $foundRows = 0;

    /**
     * @var mixed
     */
    public $data;

    /**
     * Envelope constructor.
     * @param $data
     */
    public function __construct($data)
    {
        if (isset($data->status))
        {
            $this->status = $data->status;
        }

        if (isset($data->messages))
        {
            $this->messages = new Messages($data->messages);
        }
        else
        {
            $this->messages = new Messages(null);
        }

        if (isset($data->foundRows))
        {
            $this->foundRows = $data->foundRows;
        }
    }
}