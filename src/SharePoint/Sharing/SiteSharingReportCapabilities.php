<?php

/**
 * Updated By PHP Office365 Generator 2019-10-12T20:10:10+00:00 16.0.19402.12016
 */
namespace Office365\PHP\Client\SharePoint\Sharing;

use Office365\PHP\Client\Runtime\ClientValueObject;

class SiteSharingReportCapabilities extends ClientValueObject
{
    /**
     * @var bool
     */
    public $canCancelSharingReport;
    /**
     * @var bool
     */
    public $canCreateSharingReport;
    /**
     * @var string
     */
    public $createSharingReportNotAllowedReason;
    
    public $jobData;
    /**
     * @var string
     */
    public $stopSharingReportNotAllowedReason;
}