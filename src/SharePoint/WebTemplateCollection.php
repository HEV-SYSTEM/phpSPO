<?php


namespace Office365\SharePoint;


use Office365\Runtime\ClientObject;
use Office365\Runtime\ClientRuntimeContext;
use Office365\Runtime\ResourcePath;

class WebTemplateCollection extends BaseEntityCollection
{
    public function __construct(ClientRuntimeContext $ctx, ?ResourcePath $resourcePath = null, ?ClientObject $parent = null)
    {
        parent::__construct($ctx, $resourcePath, WebTemplate::class, $parent);
    }

}