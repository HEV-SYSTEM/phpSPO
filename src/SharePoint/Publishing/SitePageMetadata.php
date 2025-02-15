<?php

/**
 * Generated  2024-10-28T19:35:46+00:00 16.0.25409.12005
 */
namespace Office365\SharePoint\Publishing;

use Office365\SharePoint\BaseEntity;
use Office365\SharePoint\SPResourcePath;
class SitePageMetadata extends BaseEntity
{
    /**
     * @return string
     */
    public function getAbsoluteUrl()
    {
        if (!$this->isPropertyAvailable("AbsoluteUrl")) {
            return null;
        }
        return $this->getProperty("AbsoluteUrl");
    }
    /**
     * @var string
     */
    public function setAbsoluteUrl($value)
    {
        $this->setProperty("AbsoluteUrl", $value, true);
    }
    /**
     * @return array
     */
    public function getAuthorByline()
    {
        if (!$this->isPropertyAvailable("AuthorByline")) {
            return null;
        }
        return $this->getProperty("AuthorByline");
    }
    /**
     * @var array
     */
    public function setAuthorByline($value)
    {
        $this->setProperty("AuthorByline", $value, true);
    }
    /**
     * @return string
     */
    public function getBannerImageUrl()
    {
        if (!$this->isPropertyAvailable("BannerImageUrl")) {
            return null;
        }
        return $this->getProperty("BannerImageUrl");
    }
    /**
     * @var string
     */
    public function setBannerImageUrl($value)
    {
        $this->setProperty("BannerImageUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getBannerThumbnailUrl()
    {
        if (!$this->isPropertyAvailable("BannerThumbnailUrl")) {
            return null;
        }
        return $this->getProperty("BannerThumbnailUrl");
    }
    /**
     * @var string
     */
    public function setBannerThumbnailUrl($value)
    {
        $this->setProperty("BannerThumbnailUrl", $value, true);
    }
    /**
     * @return integer
     */
    public function getCommentCount()
    {
        if (!$this->isPropertyAvailable("CommentCount")) {
            return null;
        }
        return $this->getProperty("CommentCount");
    }
    /**
     * @var integer
     */
    public function setCommentCount($value)
    {
        $this->setProperty("CommentCount", $value, true);
    }
    /**
     * @return bool
     */
    public function getCommentsDisabled()
    {
        if (!$this->isPropertyAvailable("CommentsDisabled")) {
            return null;
        }
        return $this->getProperty("CommentsDisabled");
    }
    /**
     * @var bool
     */
    public function setCommentsDisabled($value)
    {
        $this->setProperty("CommentsDisabled", $value, true);
    }
    /**
     * @return string
     */
    public function getContentTypeId()
    {
        if (!$this->isPropertyAvailable("ContentTypeId")) {
            return null;
        }
        return $this->getProperty("ContentTypeId");
    }
    /**
     * @var string
     */
    public function setContentTypeId($value)
    {
        $this->setProperty("ContentTypeId", $value, true);
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        if (!$this->isPropertyAvailable("Description")) {
            return null;
        }
        return $this->getProperty("Description");
    }
    /**
     * @var string
     */
    public function setDescription($value)
    {
        $this->setProperty("Description", $value, true);
    }
    /**
     * @return bool
     */
    public function getDoesUserHaveEditPermission()
    {
        if (!$this->isPropertyAvailable("DoesUserHaveEditPermission")) {
            return null;
        }
        return $this->getProperty("DoesUserHaveEditPermission");
    }
    /**
     * @var bool
     */
    public function setDoesUserHaveEditPermission($value)
    {
        $this->setProperty("DoesUserHaveEditPermission", $value, true);
    }
    /**
     * @return string
     */
    public function getFileName()
    {
        if (!$this->isPropertyAvailable("FileName")) {
            return null;
        }
        return $this->getProperty("FileName");
    }
    /**
     * @var string
     */
    public function setFileName($value)
    {
        $this->setProperty("FileName", $value, true);
    }
    /**
     * @return string
     */
    public function getFirstPublished()
    {
        if (!$this->isPropertyAvailable("FirstPublished")) {
            return null;
        }
        return $this->getProperty("FirstPublished");
    }
    /**
     * @var string
     */
    public function setFirstPublished($value)
    {
        $this->setProperty("FirstPublished", $value, true);
    }
    /**
     * @return string
     */
    public function getFirstPublishedRelativeTime()
    {
        if (!$this->isPropertyAvailable("FirstPublishedRelativeTime")) {
            return null;
        }
        return $this->getProperty("FirstPublishedRelativeTime");
    }
    /**
     * @var string
     */
    public function setFirstPublishedRelativeTime($value)
    {
        $this->setProperty("FirstPublishedRelativeTime", $value, true);
    }
    /**
     * @return integer
     */
    public function getId()
    {
        if (!$this->isPropertyAvailable("Id")) {
            return null;
        }
        return $this->getProperty("Id");
    }
    /**
     * @var integer
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsPageCheckedOutToCurrentUser()
    {
        if (!$this->isPropertyAvailable("IsPageCheckedOutToCurrentUser")) {
            return null;
        }
        return $this->getProperty("IsPageCheckedOutToCurrentUser");
    }
    /**
     * @var bool
     */
    public function setIsPageCheckedOutToCurrentUser($value)
    {
        $this->setProperty("IsPageCheckedOutToCurrentUser", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsWebWelcomePage()
    {
        if (!$this->isPropertyAvailable("IsWebWelcomePage")) {
            return null;
        }
        return $this->getProperty("IsWebWelcomePage");
    }
    /**
     * @var bool
     */
    public function setIsWebWelcomePage($value)
    {
        $this->setProperty("IsWebWelcomePage", $value, true);
    }
    /**
     * @return integer
     */
    public function getLikeCount()
    {
        if (!$this->isPropertyAvailable("LikeCount")) {
            return null;
        }
        return $this->getProperty("LikeCount");
    }
    /**
     * @var integer
     */
    public function setLikeCount($value)
    {
        $this->setProperty("LikeCount", $value, true);
    }
    /**
     * @return string
     */
    public function getListId()
    {
        if (!$this->isPropertyAvailable("ListId")) {
            return null;
        }
        return $this->getProperty("ListId");
    }
    /**
     * @var string
     */
    public function setListId($value)
    {
        $this->setProperty("ListId", $value, true);
    }
    /**
     * @return string
     */
    public function getModified()
    {
        if (!$this->isPropertyAvailable("Modified")) {
            return null;
        }
        return $this->getProperty("Modified");
    }
    /**
     * @var string
     */
    public function setModified($value)
    {
        $this->setProperty("Modified", $value, true);
    }
    /**
     * @return string
     */
    public function getModifiedRelativeTime()
    {
        if (!$this->isPropertyAvailable("ModifiedRelativeTime")) {
            return null;
        }
        return $this->getProperty("ModifiedRelativeTime");
    }
    /**
     * @var string
     */
    public function setModifiedRelativeTime($value)
    {
        $this->setProperty("ModifiedRelativeTime", $value, true);
    }
    /**
     * @return string
     */
    public function getPageLayoutType()
    {
        if (!$this->isPropertyAvailable("PageLayoutType")) {
            return null;
        }
        return $this->getProperty("PageLayoutType");
    }
    /**
     * @var string
     */
    public function setPageLayoutType($value)
    {
        $this->setProperty("PageLayoutType", $value, true);
    }
    /**
     * @return integer
     */
    public function getPromotedState()
    {
        if (!$this->isPropertyAvailable("PromotedState")) {
            return null;
        }
        return $this->getProperty("PromotedState");
    }
    /**
     * @var integer
     */
    public function setPromotedState($value)
    {
        $this->setProperty("PromotedState", $value, true);
    }
    /**
     * @return string
     */
    public function getPublishStartDate()
    {
        if (!$this->isPropertyAvailable("PublishStartDate")) {
            return null;
        }
        return $this->getProperty("PublishStartDate");
    }
    /**
     * @var string
     */
    public function setPublishStartDate($value)
    {
        $this->setProperty("PublishStartDate", $value, true);
    }
    /**
     * @return bool
     */
    public function getSocialBarOnSitePagesDisabled()
    {
        if (!$this->isPropertyAvailable("SocialBarOnSitePagesDisabled")) {
            return null;
        }
        return $this->getProperty("SocialBarOnSitePagesDisabled");
    }
    /**
     * @var bool
     */
    public function setSocialBarOnSitePagesDisabled($value)
    {
        $this->setProperty("SocialBarOnSitePagesDisabled", $value, true);
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        if (!$this->isPropertyAvailable("Title")) {
            return null;
        }
        return $this->getProperty("Title");
    }
    /**
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
    /**
     * @return string
     */
    public function getTopicHeader()
    {
        if (!$this->isPropertyAvailable("TopicHeader")) {
            return null;
        }
        return $this->getProperty("TopicHeader");
    }
    /**
     * @var string
     */
    public function setTopicHeader($value)
    {
        $this->setProperty("TopicHeader", $value, true);
    }
    /**
     * @return string
     */
    public function getUniqueId()
    {
        if (!$this->isPropertyAvailable("UniqueId")) {
            return null;
        }
        return $this->getProperty("UniqueId");
    }
    /**
     * @var string
     */
    public function setUniqueId($value)
    {
        $this->setProperty("UniqueId", $value, true);
    }
    /**
     * @return string
     */
    public function getUrl()
    {
        if (!$this->isPropertyAvailable("Url")) {
            return null;
        }
        return $this->getProperty("Url");
    }
    /**
     * @var string
     */
    public function setUrl($value)
    {
        $this->setProperty("Url", $value, true);
    }
    /**
     * @return string
     */
    public function getVersion()
    {
        if (!$this->isPropertyAvailable("Version")) {
            return null;
        }
        return $this->getProperty("Version");
    }
    /**
     * @var string
     */
    public function setVersion($value)
    {
        $this->setProperty("Version", $value, true);
    }
    /**
     * @return SitePageVersionInfo
     */
    public function getVersionInfo()
    {
        if (!$this->isPropertyAvailable("VersionInfo")) {
            return null;
        }
        return $this->getProperty("VersionInfo");
    }
    /**
     * @var SitePageVersionInfo
     */
    public function setVersionInfo($value)
    {
        $this->setProperty("VersionInfo", $value, true);
    }
    /**
     * @return SPResourcePath
     */
    public function getPath()
    {
        if (!$this->isPropertyAvailable("Path")) {
            return null;
        }
        return $this->getProperty("Path");
    }
    /**
     * @var SPResourcePath
     */
    public function setPath($value)
    {
        $this->setProperty("Path", $value, true);
    }
    /**
     * @return string
     */
    public function getCategories()
    {
        if (!$this->isPropertyAvailable("Categories")) {
            return null;
        }
        return $this->getProperty("Categories");
    }
    /**
     * @var string
     */
    public function setCategories($value)
    {
        $this->setProperty("Categories", $value, true);
    }
    /**
     * @return integer
     */
    public function getAssetFolderId()
    {
        return $this->getProperty("AssetFolderId");
    }
    /**
     * @var integer
     */
    public function setAssetFolderId($value)
    {
        return $this->setProperty("AssetFolderId", $value, true);
    }
    /**
     * @return string
     */
    public function getCallToAction()
    {
        return $this->getProperty("CallToAction");
    }
    /**
     * @var string
     */
    public function setCallToAction($value)
    {
        return $this->setProperty("CallToAction", $value, true);
    }
    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->getProperty("Created");
    }
    /**
     * @var string
     */
    public function setCreated($value)
    {
        return $this->setProperty("Created", $value, true);
    }
    /**
     * @return bool
     */
    public function getHasUserRecentlyModified()
    {
        return $this->getProperty("HasUserRecentlyModified");
    }
    /**
     * @var bool
     */
    public function setHasUserRecentlyModified($value)
    {
        return $this->setProperty("HasUserRecentlyModified", $value, true);
    }
}