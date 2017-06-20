<?php
/**
 * TOP API: push.aliyuncs.com.queryBindList.2015-03-18 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Push20150318QueryBindListRequest
{
	/** 
	 * 账号
	 **/
	private $account;
	
	/** 
	 * 应用标识
	 **/
	private $appId;
	
	/** 
	 * 设备类型 1:IOS ,2:Andorid 3:ALl
	 **/
	private $deviceType;
	
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
	
	public function setAccount($account)
	{
		$this->account = $account;
		$this->apiParas["Account"] = $account;
	}

	public function getAccount()
	{
		return $this->account;
	}

	public function setAppId($appId)
	{
		$this->appId = $appId;
		$this->apiParas["AppId"] = $appId;
	}

	public function getAppId()
	{
		return $this->appId;
	}

	public function setDeviceType($deviceType)
	{
		$this->deviceType = $deviceType;
		$this->apiParas["DeviceType"] = $deviceType;
	}

	public function getDeviceType()
	{
		return $this->deviceType;
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
		return "push.aliyuncs.com.queryBindList.2015-03-18";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->account,"account");
		RequestCheckUtil::checkNotNull($this->appId,"appId");
		RequestCheckUtil::checkNotNull($this->deviceType,"deviceType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}