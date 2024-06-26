<?php

/**
 * Generated  2024-04-20T08:07:39+00:00 16.0.24803.12007
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
/**
 * Represents 
 * storage-related metrics.
 */
class StorageMetrics extends ClientObject
{
    /**
     * @return string
     */
    public function getLastModified()
    {
        if (!$this->isPropertyAvailable("LastModified")) {
            return null;
        }
        return $this->getProperty("LastModified");
    }
    /**
     * @var string
     */
    public function setLastModified($value)
    {
        $this->setProperty("LastModified", $value, true);
    }
    /**
     * @return integer
     */
    public function getTotalFileCount()
    {
        if (!$this->isPropertyAvailable("TotalFileCount")) {
            return null;
        }
        return $this->getProperty("TotalFileCount");
    }
    /**
     * @var integer
     */
    public function setTotalFileCount($value)
    {
        $this->setProperty("TotalFileCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getTotalFileStreamSize()
    {
        if (!$this->isPropertyAvailable("TotalFileStreamSize")) {
            return null;
        }
        return $this->getProperty("TotalFileStreamSize");
    }
    /**
     * @var integer
     */
    public function setTotalFileStreamSize($value)
    {
        $this->setProperty("TotalFileStreamSize", $value, true);
    }
    /**
     * @return integer
     */
    public function getTotalSize()
    {
        if (!$this->isPropertyAvailable("TotalSize")) {
            return null;
        }
        return $this->getProperty("TotalSize");
    }
    /**
     * @var integer
     */
    public function setTotalSize($value)
    {
        $this->setProperty("TotalSize", $value, true);
    }
    /**
     * @return integer
     */
    public function getAdditionalFileStreamSize()
    {
        return $this->getProperty("AdditionalFileStreamSize");
    }
    /**
     * @var integer
     */
    public function setAdditionalFileStreamSize($value)
    {
        return $this->setProperty("AdditionalFileStreamSize", $value, true);
    }
}