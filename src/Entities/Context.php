<?php
/**
 * Context
 *
 * @author edgebal
 */

namespace Minds\UnleashClient\Entities;

class Context
{
    /** @var string */
    protected $userId;

    /** @var string[] */
    protected $userGroups;

    /** @var string */
    protected $sessionId;

    /** @var string */
    protected $remoteAddress;

    /** @var string */
    protected $hostName;

    /** @var array */
    protected $properties;

    /**
     * Gets the context user ID
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * Sets the context user ID
     * @param string $userId
     * @return Context
     */
    public function setUserId(string $userId): Context
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Gets the context user groups
     * @return string[]|null
     */
    public function getUserGroups(): ?array
    {
        return $this->userGroups;
    }

    /**
     * Sets the context user groups
     * @param string[] $userGroups
     * @return Context
     */
    public function setUserGroups(array $userGroups): Context
    {
        $this->userGroups = $userGroups;
        return $this;
    }

    /**
     * Gets the context session ID
     * @return string|null
     */
    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    /**
     * Sets the context session ID
     * @param string $sessionId
     * @return Context
     */
    public function setSessionId(string $sessionId): Context
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * Gets the context remote address
     * @return string|null
     */
    public function getRemoteAddress(): ?string
    {
        return $this->remoteAddress;
    }

    /**
     * Sets the context remote address
     * @param string $remoteAddress
     * @return Context
     */
    public function setRemoteAddress(string $remoteAddress): Context
    {
        $this->remoteAddress = $remoteAddress;
        return $this;
    }

    /**
     * Gets the context host name
     * @return string|null
     */
    public function getHostName(): ?string
    {
        return $this->hostName;
    }

    /**
     * Sets the context host name
     * @param string $hostName
     * @return Context
     */
    public function setHostName(string $hostName): Context
    {
        $this->hostName = $hostName;
        return $this;
    }

    /**
     * Gets all properties
     * @return array
     */
    public function getProperties(): ?array
    {
        return $this->properties;
    }

    /**
     * Set a single property
     * @param string $key
     * @param string $value
     * @return Context
     */
    public function setProperty(string $key, string $value): Context
    {
        $this->properties[$key] = $value;
        return $this;
    }

    /**
     * Remove a single property
     * @param string $key
     * @return Context
     */
    public function removeProperty(string $key): Context
    {
        unset($this->properties[$key]);
        return $this;
    }

    /**
     * Get a single property
     * @param string $key
     * @return string
     */
    public function getProperty(string $key): ?string
    {
        return $this->properties[$key];
    }
}
