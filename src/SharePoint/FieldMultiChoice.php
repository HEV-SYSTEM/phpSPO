<?php

/**
 * Generated  2024-10-28T19:35:46+00:00 16.0.25409.12005
 */
namespace Office365\SharePoint;

/**
 * Specifies 
 * a field 
 * (2) that contains one or more values from a set of specified values. 
 * The NoCrawl and SchemaXmlWithResourceTokens properties are 
 * not included in the default scalar property set 
 * for this type.
 */
class FieldMultiChoice extends Field
{
    /**
     * Specifies 
     * whether the field (2) can accept 
     * values other than those specified in Microsoft.Sharepoint.Client.FieldMultiChoice.Choices, 
     * as specified in section 3.2.5.51.1.1.2.
     * @return bool
     */
    public function getFillInChoice()
    {
        if (!$this->isPropertyAvailable("FillInChoice")) {
            return null;
        }
        return $this->getProperty("FillInChoice");
    }
    /**
     * Specifies 
     * whether the field (2) can accept 
     * values other than those specified in Microsoft.Sharepoint.Client.FieldMultiChoice.Choices, 
     * as specified in section 3.2.5.51.1.1.2.
     * @var bool
     */
    public function setFillInChoice($value)
    {
        $this->setProperty("FillInChoice", $value, true);
    }
    /**
     * Specifies 
     * the internal values corresponding to Choices. It MUST be 
     * NULL or an XML fragment that 
     * conforms to MAPPINGDEFINITION, as specified in [MS-WSSFO3] 
     * section 2.2.7.3.13.
     * @return string
     */
    public function getMappings()
    {
        if (!$this->isPropertyAvailable("Mappings")) {
            return null;
        }
        return $this->getProperty("Mappings");
    }
    /**
     * Specifies 
     * the internal values corresponding to Choices. It MUST be 
     * NULL or an XML fragment that 
     * conforms to MAPPINGDEFINITION, as specified in [MS-WSSFO3] 
     * section 2.2.7.3.13.
     * @var string
     */
    public function setMappings($value)
    {
        $this->setProperty("Mappings", $value, true);
    }
    /**
     * Accessibility: Read/WriteSpecifies 
     * values that are available for selection in the field (2).
     * @return array
     */
    public function getChoices()
    {
        if (!$this->isPropertyAvailable("Choices")) {
            return null;
        }
        return $this->getProperty("Choices");
    }
    /**
     * Accessibility: Read/WriteSpecifies 
     * values that are available for selection in the field (2).
     * @var array
     */
    public function setChoices($value)
    {
        $this->setProperty("Choices", $value, true);
    }
    /**
     * @return bool
     */
    public function getUnlimitedLengthInDocumentLibrary()
    {
        return $this->getProperty("UnlimitedLengthInDocumentLibrary");
    }
    /**
     * @var bool
     */
    public function setUnlimitedLengthInDocumentLibrary($value)
    {
        return $this->setProperty("UnlimitedLengthInDocumentLibrary", $value, true);
    }
}