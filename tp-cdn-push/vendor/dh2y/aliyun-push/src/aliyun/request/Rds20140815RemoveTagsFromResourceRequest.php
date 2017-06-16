<?php
/**
 * TOP API: rds.aliyuncs.com.RemoveTagsFromResource.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Rds20140815RemoveTagsFromResourceRequest
{
	/** 
	 * DBInstanceId
	 **/
	private $dBInstanceId;
	
	/** 
	 * 标签key
	 **/
	private $tag1Key;
	
	/** 
	 * Tag.1.value
	 **/
	private $tag1Value;
	
	/** 
	 * Tag.2.key
	 **/
	private $tag2Key;
	
	/** 
	 * Tag.2.value
	 **/
	private $tag2Value;
	
	/** 
	 * Tag.3.key
	 **/
	private $tag3Key;
	
	/** 
	 * Tag.3.value
	 **/
	private $tag3Value;
	
	/** 
	 * Tag.4.key
	 **/
	private $tag4Key;
	
	/** 
	 * Tag.4.value
	 **/
	private $tag4Value;
	
	/** 
	 * Tag.5.key
	 **/
	private $tag5Key;
	
	/** 
	 * Tag.5.value
	 **/
	private $tag5Value;
	
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
	
	public function setdBInstanceId($dBInstanceId)
	{
		$this->dBInstanceId = $dBInstanceId;
		$this->apiParas["DBInstanceId"] = $dBInstanceId;
	}

	public function getdBInstanceId()
	{
		return $this->dBInstanceId;
	}

	public function setTag1Key($tag1Key)
	{
		$this->tag1Key = $tag1Key;
		$this->apiParas["Tag.1.key"] = $tag1Key;
	}

	public function getTag1Key()
	{
		return $this->tag1Key;
	}

	public function setTag1Value($tag1Value)
	{
		$this->tag1Value = $tag1Value;
		$this->apiParas["Tag.1.value"] = $tag1Value;
	}

	public function getTag1Value()
	{
		return $this->tag1Value;
	}

	public function setTag2Key($tag2Key)
	{
		$this->tag2Key = $tag2Key;
		$this->apiParas["Tag.2.key"] = $tag2Key;
	}

	public function getTag2Key()
	{
		return $this->tag2Key;
	}

	public function setTag2Value($tag2Value)
	{
		$this->tag2Value = $tag2Value;
		$this->apiParas["Tag.2.value"] = $tag2Value;
	}

	public function getTag2Value()
	{
		return $this->tag2Value;
	}

	public function setTag3Key($tag3Key)
	{
		$this->tag3Key = $tag3Key;
		$this->apiParas["Tag.3.key"] = $tag3Key;
	}

	public function getTag3Key()
	{
		return $this->tag3Key;
	}

	public function setTag3Value($tag3Value)
	{
		$this->tag3Value = $tag3Value;
		$this->apiParas["Tag.3.value"] = $tag3Value;
	}

	public function getTag3Value()
	{
		return $this->tag3Value;
	}

	public function setTag4Key($tag4Key)
	{
		$this->tag4Key = $tag4Key;
		$this->apiParas["Tag.4.key"] = $tag4Key;
	}

	public function getTag4Key()
	{
		return $this->tag4Key;
	}

	public function setTag4Value($tag4Value)
	{
		$this->tag4Value = $tag4Value;
		$this->apiParas["Tag.4.value"] = $tag4Value;
	}

	public function getTag4Value()
	{
		return $this->tag4Value;
	}

	public function setTag5Key($tag5Key)
	{
		$this->tag5Key = $tag5Key;
		$this->apiParas["Tag.5.key"] = $tag5Key;
	}

	public function getTag5Key()
	{
		return $this->tag5Key;
	}

	public function setTag5Value($tag5Value)
	{
		$this->tag5Value = $tag5Value;
		$this->apiParas["Tag.5.value"] = $tag5Value;
	}

	public function getTag5Value()
	{
		return $this->tag5Value;
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
		return "rds.aliyuncs.com.RemoveTagsFromResource.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}