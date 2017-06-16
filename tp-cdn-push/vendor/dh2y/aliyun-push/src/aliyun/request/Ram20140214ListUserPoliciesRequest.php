<?php
/**
 * TOP API: ram.aliyuncs.com.ListUserPolicies.2014-02-14 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Ram20140214ListUserPoliciesRequest
{
	/** 
	 * input data
	 **/
	private $accountSpace;
	
	/** 
	 * input data
	 **/
	private $userName;
	
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
	
	public function setAccountSpace($accountSpace)
	{
		$this->accountSpace = $accountSpace;
		$this->apiParas["AccountSpace"] = $accountSpace;
	}

	public function getAccountSpace()
	{
		return $this->accountSpace;
	}

	public function setUserName($userName)
	{
		$this->userName = $userName;
		$this->apiParas["UserName"] = $userName;
	}

	public function getUserName()
	{
		return $this->userName;
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
		return "ram.aliyuncs.com.ListUserPolicies.2014-02-14";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->accountSpace,128,"accountSpace");
		RequestCheckUtil::checkNotNull($this->userName,"userName");
		RequestCheckUtil::checkMaxLength($this->userName,128,"userName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}