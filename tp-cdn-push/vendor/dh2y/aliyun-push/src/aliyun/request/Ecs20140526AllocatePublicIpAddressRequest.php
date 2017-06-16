<?php
/**
 * TOP API: ecs.aliyuncs.com.AllocatePublicIpAddress.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Ecs20140526AllocatePublicIpAddressRequest
{
	/** 
	 * 需要分配IP地址的实例ID
	 **/
	private $instanceId;
	
	/** 
	 * 要分配的IP地址
	 **/
	private $ipAddress;
	
	/** 
	 * 虚拟局域网Id，由技术服务手动分配。
	 **/
	private $vlanId;
	
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
	
	public function setInstanceId($instanceId)
	{
		$this->instanceId = $instanceId;
		$this->apiParas["InstanceId"] = $instanceId;
	}

	public function getInstanceId()
	{
		return $this->instanceId;
	}

	public function setIpAddress($ipAddress)
	{
		$this->ipAddress = $ipAddress;
		$this->apiParas["IpAddress"] = $ipAddress;
	}

	public function getIpAddress()
	{
		return $this->ipAddress;
	}

	public function setVlanId($vlanId)
	{
		$this->vlanId = $vlanId;
		$this->apiParas["VlanId"] = $vlanId;
	}

	public function getVlanId()
	{
		return $this->vlanId;
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
		return "ecs.aliyuncs.com.AllocatePublicIpAddress.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->instanceId,"instanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}