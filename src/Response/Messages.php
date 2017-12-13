<?php
/**
 * RescueGroups Messages Response
 *
 * @package RescueGroups
 * @subpackage Response
 * @author Eric
 */
namespace RescueGroups\Response;

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

    /**
     * You can use this sending it into an exception or an error
     */
    public function __toString()
    {
        $output = '';
        foreach ($this->general as $message)
        {
            if (!empty($output))
                $output .= '; ';

            $output .= $message->messageID . ' - ' . $message->messageText;
        }

        foreach ($this->record as $message)
        {
            if (!empty($output))
                $output .= '; ';

            $output .= $message->messageID . ' - ' . $message->messageText;
        }

        return $output;
    }
}