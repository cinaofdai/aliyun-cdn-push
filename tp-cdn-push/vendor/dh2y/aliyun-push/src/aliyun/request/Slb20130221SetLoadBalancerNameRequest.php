<?php
/**
 * TOP API: slb.aliyuncs.com.SetLoadBalancerName.2013-02-21 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Slb20130221SetLoadBalancerNameRequest
{
	/** 
	 * slb id
	 **/
	private $loadBalancerId;
	
	/** 
	 * SLB实例别名，由中文、字母、数字、"-"组成，最长64个字符或64个中文字。
	 **/
	private $loadBalancerName;
	
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
	
	public function setLoadBalancerId($loadBalancerId)
	{
		$this->loadBalancerId = $loadBalancerId;
		$this->apiParas["loadBalancerId"] = $loadBalancerId;
	}

	public function getLoadBalancerId()
	{
		return $this->loadBalancerId;
	}

	public function setLoadBalancerName($loadBalancerName)
	{
		$this->loadBalancerName = $loadBalancerName;
		$this->apiParas["loadBalancerName"] = $loadBalancerName;
	}

	public function getLoadBalancerName()
	{
		return $this->loadBalancerName;
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
		return "slb.aliyuncs.com.SetLoadBalancerName.2013-02-21";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->loadBalancerId,"loadBalancerId");
		RequestCheckUtil::checkNotNull($this->loadBalancerName,"loadBalancerName");
		RequestCheckUtil::checkMaxLength($this->loadBalancerName,64,"loadBalancerName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}