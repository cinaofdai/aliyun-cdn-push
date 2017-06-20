<?php
/**
 * TOP API: ocs.aliyuncs.com.ModifyOcsInstanceAttribute.2013-08-01 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Ocs20130801ModifyOcsInstanceAttributeRequest
{
	/** 
	 * 实例密码
由字母、数字或下划线组成，长度为6~32位，字母区别大小写。
	 **/
	private $newPassword;
	
	/** 
	 * (全局唯一);16位字符串
	 **/
	private $ocsInstanceId;
	
	/** 
	 * 实例名称
	 **/
	private $ocsInstanceName;
	
	/** 
	 * 实例旧密码，若不输入旧密码，则直接修改新密码。
	 **/
	private $oldPassword;
	
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
	
	public function setNewPassword($newPassword)
	{
		$this->newPassword = $newPassword;
		$this->apiParas["NewPassword"] = $newPassword;
	}

	public function getNewPassword()
	{
		return $this->newPassword;
	}

	public function setOcsInstanceId($ocsInstanceId)
	{
		$this->ocsInstanceId = $ocsInstanceId;
		$this->apiParas["OcsInstanceId"] = $ocsInstanceId;
	}

	public function getOcsInstanceId()
	{
		return $this->ocsInstanceId;
	}

	public function setOcsInstanceName($ocsInstanceName)
	{
		$this->ocsInstanceName = $ocsInstanceName;
		$this->apiParas["OcsInstanceName"] = $ocsInstanceName;
	}

	public function getOcsInstanceName()
	{
		return $this->ocsInstanceName;
	}

	public function setOldPassword($oldPassword)
	{
		$this->oldPassword = $oldPassword;
		$this->apiParas["OldPassword"] = $oldPassword;
	}

	public function getOldPassword()
	{
		return $this->oldPassword;
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
		return "ocs.aliyuncs.com.ModifyOcsInstanceAttribute.2013-08-01";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ocsInstanceId,"ocsInstanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}