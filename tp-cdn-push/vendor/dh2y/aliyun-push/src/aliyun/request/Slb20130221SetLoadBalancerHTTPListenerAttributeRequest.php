<?php
/**
 * TOP API: slb.aliyuncs.com.SetLoadBalancerHTTPListenerAttribute.2013-02-21 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Slb20130221SetLoadBalancerHTTPListenerAttributeRequest
{
	/** 
	 * Cookie
	 **/
	private $cookie;
	
	/** 
	 * CookieTimeout
	 **/
	private $cookieTimeout;
	
	/** 
	 * Domain
	 **/
	private $domain;
	
	/** 
	 * HealthCheck
	 **/
	private $healthCheck;
	
	/** 
	 * HealthCheckTimeout
	 **/
	private $healthCheckTimeout;
	
	/** 
	 * HealthyThreshold
	 **/
	private $healthyThreshold;
	
	/** 
	 * Interval
	 **/
	private $interval;
	
	/** 
	 * ListenerPort
	 **/
	private $listenerPort;
	
	/** 
	 * slb id
	 **/
	private $loadBalancerId;
	
	/** 
	 * Scheduler
	 **/
	private $scheduler;
	
	/** 
	 * StickySession
	 **/
	private $stickySession;
	
	/** 
	 * StickySessionType
	 **/
	private $stickySessionType;
	
	/** 
	 * UnhealthyThreshold
	 **/
	private $unhealthyThreshold;
	
	/** 
	 * URI
	 **/
	private $uri;
	
	/** 
	 * XForwardedFor
	 **/
	private $xForwardedFor;
	
	/**
	 * 仅用于渠道商发起API调用时，指定访问的资源拥有者的ID
	 **/
	private $ownerId;
	
	/**
	 *仅用于渠道商发起API调用时，指定访问的资源拥有者的账号
	 **/
    private  $ownerAccount;
    
    /**
     *API调用者试图通过API调用来访问别人拥有但已经授权给他的资源时，
     *通过使用该参数来声明此次操作涉及到的资源是谁名下的,该参数仅官网用户可用
     **/
    private $resourceOwnerAccount;
    
	private $apiParas = array();
	
	public function setCookie($cookie)
	{
		$this->cookie = $cookie;
		$this->apiParas["cookie"] = $cookie;
	}

	public function getCookie()
	{
		return $this->cookie;
	}

	public function setCookieTimeout($cookieTimeout)
	{
		$this->cookieTimeout = $cookieTimeout;
		$this->apiParas["cookieTimeout"] = $cookieTimeout;
	}

	public function getCookieTimeout()
	{
		return $this->cookieTimeout;
	}

	public function setDomain($domain)
	{
		$this->domain = $domain;
		$this->apiParas["domain"] = $domain;
	}

	public function getDomain()
	{
		return $this->domain;
	}

	public function setHealthCheck($healthCheck)
	{
		$this->healthCheck = $healthCheck;
		$this->apiParas["healthCheck"] = $healthCheck;
	}

	public function getHealthCheck()
	{
		return $this->healthCheck;
	}

	public function setHealthCheckTimeout($healthCheckTimeout)
	{
		$this->healthCheckTimeout = $healthCheckTimeout;
		$this->apiParas["healthCheckTimeout"] = $healthCheckTimeout;
	}

	public function getHealthCheckTimeout()
	{
		return $this->healthCheckTimeout;
	}

	public function setHealthyThreshold($healthyThreshold)
	{
		$this->healthyThreshold = $healthyThreshold;
		$this->apiParas["healthyThreshold"] = $healthyThreshold;
	}

	public function getHealthyThreshold()
	{
		return $this->healthyThreshold;
	}

	public function setInterval($interval)
	{
		$this->interval = $interval;
		$this->apiParas["interval"] = $interval;
	}

	public function getInterval()
	{
		return $this->interval;
	}

	public function setListenerPort($listenerPort)
	{
		$this->listenerPort = $listenerPort;
		$this->apiParas["listenerPort"] = $listenerPort;
	}

	public function getListenerPort()
	{
		return $this->listenerPort;
	}

	public function setLoadBalancerId($loadBalancerId)
	{
		$this->loadBalancerId = $loadBalancerId;
		$this->apiParas["loadBalancerId"] = $loadBalancerId;
	}

	public function getLoadBalancerId()
	{
		return $this->loadBalancerId;
	}

	public function setScheduler($scheduler)
	{
		$this->scheduler = $scheduler;
		$this->apiParas["scheduler"] = $scheduler;
	}

	public function getScheduler()
	{
		return $this->scheduler;
	}

	public function setStickySession($stickySession)
	{
		$this->stickySession = $stickySession;
		$this->apiParas["stickySession"] = $stickySession;
	}

	public function getStickySession()
	{
		return $this->stickySession;
	}

	public function setStickySessionType($stickySessionType)
	{
		$this->stickySessionType = $stickySessionType;
		$this->apiParas["stickySessionType"] = $stickySessionType;
	}

	public function getStickySessionType()
	{
		return $this->stickySessionType;
	}

	public function setUnhealthyThreshold($unhealthyThreshold)
	{
		$this->unhealthyThreshold = $unhealthyThreshold;
		$this->apiParas["unhealthyThreshold"] = $unhealthyThreshold;
	}

	public function getUnhealthyThreshold()
	{
		return $this->unhealthyThreshold;
	}

	public function setUri($uri)
	{
		$this->uri = $uri;
		$this->apiParas["uri"] = $uri;
	}

	public function getUri()
	{
		return $this->uri;
	}

	public function setxForwardedFor($xForwardedFor)
	{
		$this->xForwardedFor = $xForwardedFor;
		$this->apiParas["xForwardedFor"] = $xForwardedFor;
	}

	public function getxForwardedFor()
	{
		return $this->xForwardedFor;
	}

	
	public function setOwnerId($ownerId)
	{
		$this->ownerId = $ownerId;
		$this->apiParas["OwnerId"] = $ownerId;
	}
	
	public function getOwnerId()
	{
		return $this->ownerId;
	}
	
	public function setOwnerAccount($ownerAccount)
	{
		$this->ownerAccount = $ownerAccount;
		$this->apiParas["OwnerAccount"] = $ownerAccount;
	}
	
	public function getOwnerAccount()
	{
		return $this->ownerAccount;
	}
	
	public function setResourceOwnerAccount($resourceOwnerAccount)
	{
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->apiParas["ResourceOwnerAccount"] = $resourceOwnerAccount;
	}
	
	public function getResourceOwnerAccount()
	{
		return $this->resourceOwnerAccount;
	}

	public function getApiMethodName()
	{
		return "slb.aliyuncs.com.SetLoadBalancerHTTPListenerAttribute.2013-02-21";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->cookie,200,"cookie");
		RequestCheckUtil::checkMaxValue($this->cookieTimeout,86400,"cookieTimeout");
		RequestCheckUtil::checkMinValue($this->cookieTimeout,0,"cookieTimeout");
		RequestCheckUtil::checkMaxLength($this->domain,80,"domain");
		RequestCheckUtil::checkMaxValue($this->healthCheckTimeout,1000,"healthCheckTimeout");
		RequestCheckUtil::checkMinValue($this->healthCheckTimeout,1,"healthCheckTimeout");
		RequestCheckUtil::checkMaxValue($this->healthyThreshold,1000,"healthyThreshold");
		RequestCheckUtil::checkMinValue($this->healthyThreshold,1,"healthyThreshold");
		RequestCheckUtil::checkMaxValue($this->interval,1000,"interval");
		RequestCheckUtil::checkMinValue($this->interval,1,"interval");
		RequestCheckUtil::checkNotNull($this->listenerPort,"listenerPort");
		RequestCheckUtil::checkMaxValue($this->listenerPort,65535,"listenerPort");
		RequestCheckUtil::checkMinValue($this->listenerPort,1,"listenerPort");
		RequestCheckUtil::checkNotNull($this->loadBalancerId,"loadBalancerId");
		RequestCheckUtil::checkMaxValue($this->unhealthyThreshold,1000,"unhealthyThreshold");
		RequestCheckUtil::checkMinValue($this->unhealthyThreshold,1,"unhealthyThreshold");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}