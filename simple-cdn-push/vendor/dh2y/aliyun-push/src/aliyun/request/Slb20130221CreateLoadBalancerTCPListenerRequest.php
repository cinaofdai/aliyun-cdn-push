<?php
/**
 * TOP API: slb.aliyuncs.com.CreateLoadBalancerTCPListener.2013-02-21 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Slb20130221CreateLoadBalancerTCPListenerRequest
{
	/** 
	 * BackendServerPort
	 **/
	private $backendServerPort;
	
	/** 
	 * ConnectPort
	 **/
	private $connectPort;
	
	/** 
	 * ConnectTimeout
	 **/
	private $connectTimeout;
	
	/** 
	 * HealthCheck
	 **/
	private $healthCheck;
	
	/** 
	 * Interval
	 **/
	private $interval;
	
	/** 
	 * ListenerPort
	 **/
	private $listenerPort;
	
	/** 
	 * ListenerStatus
	 **/
	private $listenerStatus;
	
	/** 
	 * slb id
	 **/
	private $loadBalancerId;
	
	/** 
	 * PersistenceTimeout
	 **/
	private $persistenceTimeout;
	
	/** 
	 * Scheduler
	 **/
	private $scheduler;
	
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
	
	public function setBackendServerPort($backendServerPort)
	{
		$this->backendServerPort = $backendServerPort;
		$this->apiParas["backendServerPort"] = $backendServerPort;
	}

	public function getBackendServerPort()
	{
		return $this->backendServerPort;
	}

	public function setConnectPort($connectPort)
	{
		$this->connectPort = $connectPort;
		$this->apiParas["connectPort"] = $connectPort;
	}

	public function getConnectPort()
	{
		return $this->connectPort;
	}

	public function setConnectTimeout($connectTimeout)
	{
		$this->connectTimeout = $connectTimeout;
		$this->apiParas["connectTimeout"] = $connectTimeout;
	}

	public function getConnectTimeout()
	{
		return $this->connectTimeout;
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

	public function setListenerStatus($listenerStatus)
	{
		$this->listenerStatus = $listenerStatus;
		$this->apiParas["listenerStatus"] = $listenerStatus;
	}

	public function getListenerStatus()
	{
		return $this->listenerStatus;
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

	public function setPersistenceTimeout($persistenceTimeout)
	{
		$this->persistenceTimeout = $persistenceTimeout;
		$this->apiParas["persistenceTimeout"] = $persistenceTimeout;
	}

	public function getPersistenceTimeout()
	{
		return $this->persistenceTimeout;
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
		return "slb.aliyuncs.com.CreateLoadBalancerTCPListener.2013-02-21";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->backendServerPort,"backendServerPort");
		RequestCheckUtil::checkMaxValue($this->backendServerPort,65535,"backendServerPort");
		RequestCheckUtil::checkMinValue($this->backendServerPort,1,"backendServerPort");
		RequestCheckUtil::checkMaxValue($this->connectPort,65535,"connectPort");
		RequestCheckUtil::checkMinValue($this->connectPort,1,"connectPort");
		RequestCheckUtil::checkMaxValue($this->connectTimeout,1000,"connectTimeout");
		RequestCheckUtil::checkMinValue($this->connectTimeout,1,"connectTimeout");
		RequestCheckUtil::checkMaxValue($this->interval,1000,"interval");
		RequestCheckUtil::checkMinValue($this->interval,1,"interval");
		RequestCheckUtil::checkNotNull($this->listenerPort,"listenerPort");
		RequestCheckUtil::checkMaxValue($this->listenerPort,65535,"listenerPort");
		RequestCheckUtil::checkMinValue($this->listenerPort,1,"listenerPort");
		RequestCheckUtil::checkNotNull($this->loadBalancerId,"loadBalancerId");
		RequestCheckUtil::checkMaxValue($this->persistenceTimeout,1000,"persistenceTimeout");
		RequestCheckUtil::checkMinValue($this->persistenceTimeout,0,"persistenceTimeout");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}