<?php

/**
 * Generated  2024-10-28T19:09:39+00:00 16.0.25409.12005
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
class UpdateReviewRequestDTO extends ClientValue
{
    /**
     * @var string
     */
    public $Action;
    /**
     * @var string
     */
    public $DocumentUri;
    /**
     * @var string
     */
    public $Comments;
    /**
     * @var string
     */
    public $ReviewerEmailOrUPN;
}