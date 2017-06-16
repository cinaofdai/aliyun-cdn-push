<?php
/**
 * TOP API: rds.aliyuncs.com.DescribeDBInstances.2013-05-28 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Rds20130528DescribeDBInstancesRequest
{
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * 实例ip网络类型
	 **/
	private $dBInstanceNetType;
	
	/** 
	 * 实例状态
	 **/
	private $dBInstanceStatus;
	
	/** 
	 * 数据库类型
	 **/
	private $engine;
	
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

	public function setdBInstanceNetType($dBInstanceNetType)
	{
		$this->dBInstanceNetType = $dBInstanceNetType;
		$this->apiParas["DBInstanceNetType"] = $dBInstanceNetType;
	}

	public function getdBInstanceNetType()
	{
		return $this->dBInstanceNetType;
	}

	public function setdBInstanceStatus($dBInstanceStatus)
	{
		$this->dBInstanceStatus = $dBInstanceStatus;
		$this->apiParas["DBInstanceStatus"] = $dBInstanceStatus;
	}

	public function getdBInstanceStatus()
	{
		return $this->dBInstanceStatus;
	}

	public function setEngine($engine)
	{
		$this->engine = $engine;
		$this->apiParas["Engine"] = $engine;
	}

	public function getEngine()
	{
		return $this->engine;
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
		return "rds.aliyuncs.com.DescribeDBInstances.2013-05-28";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}