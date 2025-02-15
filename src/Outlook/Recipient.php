<?php

/**
 * Modified: 2020-05-24T21:58:36+00:00 
 */
namespace Office365\Outlook;

use Office365\Complex;

class Recipient extends Complex
{
    function __construct(?EmailAddress $emailAddress=null)
    {
        $this->EmailAddress = $emailAddress;
        parent::__construct();
    }

    /**
     * @var EmailAddress
     */
    public $EmailAddress;
}