<?php

namespace Symfony\Config\Security\FirewallConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Logout'.\DIRECTORY_SEPARATOR.'DeleteCookieConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class LogoutConfig 
{
    private $csrfParameter;
    private $csrfTokenGenerator;
    private $csrfTokenId;
    private $path;
    private $target;
    private $invalidateSession;
    private $deleteCookies;
    
    /**
     * @default '_csrf_token'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function csrfParameter($value): static
    {
        $this->csrfParameter = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function csrfTokenGenerator($value): static
    {
        $this->csrfTokenGenerator = $value;
    
        return $this;
    }
    
    /**
     * @default 'logout'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function csrfTokenId($value): static
    {
        $this->csrfTokenId = $value;
    
        return $this;
    }
    
    /**
     * @default '/logout'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): static
    {
        $this->path = $value;
    
        return $this;
    }
    
    /**
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function target($value): static
    {
        $this->target = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function invalidateSession($value): static
    {
        $this->invalidateSession = $value;
    
        return $this;
    }
    
    public function deleteCookie(string $name, array $value = []): \Symfony\Config\Security\FirewallConfig\Logout\DeleteCookieConfig
    {
        if (!isset($this->deleteCookies[$name])) {
            return $this->deleteCookies[$name] = new \Symfony\Config\Security\FirewallConfig\Logout\DeleteCookieConfig($value);
        }
        if ([] === $value) {
            return $this->deleteCookies[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "deleteCookie()" has already been initialized. You cannot pass values the second time you call deleteCookie().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['csrf_parameter'])) {
            $this->csrfParameter = $value['csrf_parameter'];
            unset($value['csrf_parameter']);
        }
    
        if (isset($value['csrf_token_generator'])) {
            $this->csrfTokenGenerator = $value['csrf_token_generator'];
            unset($value['csrf_token_generator']);
        }
    
        if (isset($value['csrf_token_id'])) {
            $this->csrfTokenId = $value['csrf_token_id'];
            unset($value['csrf_token_id']);
        }
    
        if (isset($value['path'])) {
            $this->path = $value['path'];
            unset($value['path']);
        }
    
        if (isset($value['target'])) {
            $this->target = $value['target'];
            unset($value['target']);
        }
    
        if (isset($value['invalidate_session'])) {
            $this->invalidateSession = $value['invalidate_session'];
            unset($value['invalidate_session']);
        }
    
        if (isset($value['delete_cookies'])) {
            $this->deleteCookies = array_map(function ($v) { return new \Symfony\Config\Security\FirewallConfig\Logout\DeleteCookieConfig($v); }, $value['delete_cookies']);
            unset($value['delete_cookies']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->csrfParameter) {
            $output['csrf_parameter'] = $this->csrfParameter;
        }
        if (null !== $this->csrfTokenGenerator) {
            $output['csrf_token_generator'] = $this->csrfTokenGenerator;
        }
        if (null !== $this->csrfTokenId) {
            $output['csrf_token_id'] = $this->csrfTokenId;
        }
        if (null !== $this->path) {
            $output['path'] = $this->path;
        }
        if (null !== $this->target) {
            $output['target'] = $this->target;
        }
        if (null !== $this->invalidateSession) {
            $output['invalidate_session'] = $this->invalidateSession;
        }
        if (null !== $this->deleteCookies) {
            $output['delete_cookies'] = array_map(function ($v) { return $v->toArray(); }, $this->deleteCookies);
        }
    
        return $output;
    }

}
