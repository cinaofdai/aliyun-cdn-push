<?php
/**
 * TOP API: push.aliyuncs.com.batchGetDeviceInfo.2015-07-07 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Push20150707BatchGetDeviceInfoRequest
{
	/** 
	 * 阿里云appid
	 **/
	private $appid;
	
	/** 
	 * 对应的设备ID，多个以逗号分隔. 比如 :device1,device2
	 **/
	private $devices;
	
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

	public function setDevices($devices)
	{
		$this->devices = $devices;
		$this->apiParas["Devices"] = $devices;
	}

	public function getDevices()
	{
		return $this->devices;
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
		return "push.aliyuncs.com.batchGetDeviceInfo.2015-07-07";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appid,"appid");
		RequestCheckUtil::checkNotNull($this->devices,"devices");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}