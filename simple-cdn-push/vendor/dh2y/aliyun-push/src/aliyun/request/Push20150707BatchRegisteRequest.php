<?php
/**
 * TOP API: push.aliyuncs.com.batchRegiste.201507-07 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Push20150707BatchRegisteRequest
{
	/** 
	 * 阿里云appid
	 **/
	private $appid;
	
	/** 
	 * 一次注册设备数，目前限制最多一次注册1000个设备 .
	 **/
	private $limit;
	
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
	
	public function setAppid($appid)
	{
		$this->appid = $appid;
		$this->apiParas["Appid"] = $appid;
	}

	public function getAppid()
	{
		return $this->appid;
	}

	public function setLimit($limit)
	{
		$this->limit = $limit;
		$this->apiParas["Limit"] = $limit;
	}

	public function getLimit()
	{
		return $this->limit;
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
		return "push.aliyuncs.com.batchRegiste.201507-07";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appid,"appid");
		RequestCheckUtil::checkNotNull($this->limit,"limit");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}