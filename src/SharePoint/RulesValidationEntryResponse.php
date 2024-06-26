<?php

/**
 * Generated  2024-04-20T08:07:39+00:00 16.0.24803.12007
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
class RulesValidationEntryResponse extends ClientValue
{
    /**
     * @var integer
     */
    public $Action;
    /**
     * @var string
     */
    public $BusinessJustification;
    /**
     * @var string
     */
    public $LastUpdatedDateTime;
    /**
     * @var ReviewerInfo
     */
    public $Reviewer;
    /**
     * @var RulesDefinition
     */
    public $Rule;
    /**
     * @var string
     */
    public $AISuggestionText;
}