<?php
/**
 * TOP API: ocm.aliyuncs.com.SenderStatisticsByTagNameAndBatchID.2015-03-10 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Ocm20150310SenderStatisticsByTagNameAndBatchIDRequest
{
	/** 
	 * 批次名称
	 **/
	private $batchID;
	
	/** 
	 * 发送时间
	 **/
	private $dateTime;
	
	/** 
	 * 发信人地址（域名子账户）
	 **/
	private $fromAddress;
	
	/** 
	 * 标签名称
	 **/
	private $tagName;
	
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
	
	public function setBatchID($batchID)
	{
		$this->batchID = $batchID;
		$this->apiParas["BatchID"] = $batchID;
	}

	public function getBatchID()
	{
		return $this->batchID;
	}

	public function setDateTime($dateTime)
	{
		$this->dateTime = $dateTime;
		$this->apiParas["DateTime"] = $dateTime;
	}

	public function getDateTime()
	{
		return $this->dateTime;
	}

	public function setFromAddress($fromAddress)
	{
		$this->fromAddress = $fromAddress;
		$this->apiParas["FromAddress"] = $fromAddress;
	}

	public function getFromAddress()
	{
		return $this->fromAddress;
	}

	public function setTagName($tagName)
	{
		$this->tagName = $tagName;
		$this->apiParas["TagName"] = $tagName;
	}

	public function getTagName()
	{
		return $this->tagName;
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
		return "ocm.aliyuncs.com.SenderStatisticsByTagNameAndBatchID.2015-03-10";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->batchID,"batchID");
		RequestCheckUtil::checkNotNull($this->dateTime,"dateTime");
		RequestCheckUtil::checkNotNull($this->fromAddress,"fromAddress");
		RequestCheckUtil::checkMaxLength($this->fromAddress,100,"fromAddress");
		RequestCheckUtil::checkNotNull($this->tagName,"tagName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}