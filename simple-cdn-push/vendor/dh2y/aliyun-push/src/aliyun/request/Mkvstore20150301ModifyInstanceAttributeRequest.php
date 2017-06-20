<?php
/**
 * TOP API: m-kvstore.aliyuncs.com.ModifyInstanceAttribute.2015-03-01 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Mkvstore20150301ModifyInstanceAttributeRequest
{
	/** 
	 * (全局唯一);16位字符串
	 **/
	private $instanceId;
	
	/** 
	 * 实例名称
长度为2-128个字符，以大小写英文字母或中文开头，不支持字符@/:="<>{[]}和空格
	 **/
	private $instanceName;
	
	/** 
	 * 实例密码
需同时且只能包含大写、小写字母和数字，长度为8~30个字符。
	 **/
	private $newPassword;
	
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

	public function setInstanceName($instanceName)
	{
		$this->instanceName = $instanceName;
		$this->apiParas["InstanceName"] = $instanceName;
	}

	public function getInstanceName()
	{
		return $this->instanceName;
	}

	public function setNewPassword($newPassword)
	{
		$this->newPassword = $newPassword;
		$this->apiParas["NewPassword"] = $newPassword;
	}

	public function getNewPassword()
	{
		return $this->newPassword;
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
		return "m-kvstore.aliyuncs.com.ModifyInstanceAttribute.2015-03-01";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->instanceId,"instanceId");
		RequestCheckUtil::checkMaxLength($this->instanceName,128,"instanceName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}