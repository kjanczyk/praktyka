<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class EnsJobeetBundleEntityJobProxy extends \Ens\JobeetBundle\Entity\Job implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function setCompany($company)
    {
        $this->__load();
        return parent::setCompany($company);
    }

    public function getCompany()
    {
        $this->__load();
        return parent::getCompany();
    }

    public function setLogo($logo)
    {
        $this->__load();
        return parent::setLogo($logo);
    }

    public function getLogo()
    {
        $this->__load();
        return parent::getLogo();
    }

    public function setUrl($url)
    {
        $this->__load();
        return parent::setUrl($url);
    }

    public function getUrl()
    {
        $this->__load();
        return parent::getUrl();
    }

    public function setPosition($position)
    {
        $this->__load();
        return parent::setPosition($position);
    }

    public function getPosition()
    {
        $this->__load();
        return parent::getPosition();
    }

    public function setLocation($location)
    {
        $this->__load();
        return parent::setLocation($location);
    }

    public function getLocation()
    {
        $this->__load();
        return parent::getLocation();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setHowToApply($howToApply)
    {
        $this->__load();
        return parent::setHowToApply($howToApply);
    }

    public function getHowToApply()
    {
        $this->__load();
        return parent::getHowToApply();
    }

    public function setToken($token)
    {
        $this->__load();
        return parent::setToken($token);
    }

    public function getToken()
    {
        $this->__load();
        return parent::getToken();
    }

    public function setIsPublic($isPublic)
    {
        $this->__load();
        return parent::setIsPublic($isPublic);
    }

    public function getIsPublic()
    {
        $this->__load();
        return parent::getIsPublic();
    }

    public function setIsActivated($isActivated)
    {
        $this->__load();
        return parent::setIsActivated($isActivated);
    }

    public function getIsActivated()
    {
        $this->__load();
        return parent::getIsActivated();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setExpiresAt($expiresAt)
    {
        $this->__load();
        return parent::setExpiresAt($expiresAt);
    }

    public function getExpiresAt()
    {
        $this->__load();
        return parent::getExpiresAt();
    }

    public function setCreatedAt($createdAt)
    {
        $this->__load();
        return parent::setCreatedAt($createdAt);
    }

    public function getCreatedAt()
    {
        $this->__load();
        return parent::getCreatedAt();
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->__load();
        return parent::setUpdatedAt($updatedAt);
    }

    public function getUpdatedAt()
    {
        $this->__load();
        return parent::getUpdatedAt();
    }

    public function setCategory(\Ens\JobeetBundle\Entity\Category $category)
    {
        $this->__load();
        return parent::setCategory($category);
    }

    public function getCategory()
    {
        $this->__load();
        return parent::getCategory();
    }

    public function setCreatedAtValue()
    {
        $this->__load();
        return parent::setCreatedAtValue();
    }

    public function setUpdatedAtValue()
    {
        $this->__load();
        return parent::setUpdatedAtValue();
    }

    public function getCompanySlug()
    {
        $this->__load();
        return parent::getCompanySlug();
    }

    public function getPositionSlug()
    {
        $this->__load();
        return parent::getPositionSlug();
    }

    public function getLocationSlug()
    {
        $this->__load();
        return parent::getLocationSlug();
    }

    public function setExpiresAtValue()
    {
        $this->__load();
        return parent::setExpiresAtValue();
    }

    public function getWebPath()
    {
        $this->__load();
        return parent::getWebPath();
    }

    public function getAbsolutePath()
    {
        $this->__load();
        return parent::getAbsolutePath();
    }

    public function preUpload()
    {
        $this->__load();
        return parent::preUpload();
    }

    public function upload()
    {
        $this->__load();
        return parent::upload();
    }

    public function removeUpload()
    {
        $this->__load();
        return parent::removeUpload();
    }

    public function setTokenValue()
    {
        $this->__load();
        return parent::setTokenValue();
    }

    public function isExpired()
    {
        $this->__load();
        return parent::isExpired();
    }

    public function expiresSoon()
    {
        $this->__load();
        return parent::expiresSoon();
    }

    public function getDaysBeforeExpires()
    {
        $this->__load();
        return parent::getDaysBeforeExpires();
    }

    public function publish()
    {
        $this->__load();
        return parent::publish();
    }

    public function extend()
    {
        $this->__load();
        return parent::extend();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'type', 'company', 'logo', 'url', 'position', 'location', 'description', 'how_to_apply', 'token', 'is_public', 'is_activated', 'email', 'expires_at', 'created_at', 'updated_at', 'category');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}