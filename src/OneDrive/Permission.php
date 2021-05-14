<?php

/**
 * Modified: 2020-05-29T07:19:37+00:00
 */
namespace Office365\OneDrive;

use Office365\Common\IdentitySet;
use Office365\Entity;


/**
 *  "The Permission resource provides information about a sharing permission granted for a DriveItem resource."
 */
class Permission extends Entity
{
    /**
     * @return array
     */
    public function getRoles()
    {
        if (!$this->isPropertyAvailable("Roles")) {
            return null;
        }
        return $this->getProperty("Roles");
    }
    /**
     * @var array
     */
    public function setRoles($value)
    {
        $this->setProperty("Roles", $value, true);
    }
    /**
     * @return string
     */
    public function getShareId()
    {
        if (!$this->isPropertyAvailable("ShareId")) {
            return null;
        }
        return $this->getProperty("ShareId");
    }
    /**
     * @var string
     */
    public function setShareId($value)
    {
        $this->setProperty("ShareId", $value, true);
    }
    /**
     * @return IdentitySet
     */
    public function getGrantedTo()
    {
        if (!$this->isPropertyAvailable("GrantedTo")) {
            return null;
        }
        return $this->getProperty("GrantedTo");
    }
    /**
     * @var IdentitySet
     */
    public function setGrantedTo($value)
    {
        $this->setProperty("GrantedTo", $value, true);
    }
    /**
     * @return ItemReference
     */
    public function getInheritedFrom()
    {
        if (!$this->isPropertyAvailable("InheritedFrom")) {
            return null;
        }
        return $this->getProperty("InheritedFrom");
    }
    /**
     * @var ItemReference
     */
    public function setInheritedFrom($value)
    {
        $this->setProperty("InheritedFrom", $value, true);
    }
    /**
     * @return SharingInvitation
     */
    public function getInvitation()
    {
        if (!$this->isPropertyAvailable("Invitation")) {
            return null;
        }
        return $this->getProperty("Invitation");
    }
    /**
     * @var SharingInvitation
     */
    public function setInvitation($value)
    {
        $this->setProperty("Invitation", $value, true);
    }
    /**
     * @return SharingLink
     */
    public function getLink()
    {
        if (!$this->isPropertyAvailable("Link")) {
            return null;
        }
        return $this->getProperty("Link");
    }
    /**
     * @var SharingLink
     */
    public function setLink($value)
    {
        $this->setProperty("Link", $value, true);
    }
    /**
     * @return bool
     */
    public function getHasPassword()
    {
        if (!$this->isPropertyAvailable("HasPassword")) {
            return null;
        }
        return $this->getProperty("HasPassword");
    }
    /**
     * @var bool
     */
    public function setHasPassword($value)
    {
        $this->setProperty("HasPassword", $value, true);
    }
}