<?php
/**
 * TOP API: rds.aliyuncs.com.DescribeBackupTasks.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Rds20140815DescribeBackupTasksRequest
{
	/** 
	 * 备份任务ID
	 **/
	private $backupJobId;
	
	/** 
	 * 备份任务类型
	 **/
	private $backupMode;
	
	/** 
	 * 备份任务状态
	 **/
	private $backupStatus;
	
	/** 
	 * 实例名称
	 **/
	private $dBInstanceId;
	
	/** 
	 * resourceOwnerAccount
	 **/
	private $resourceOwnerAccount;
	
	/** 
	 * resourceOwnerId
	 **/
	private $resourceOwnerId;
	
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
	
	public function setBackupJobId($backupJobId)
	{
		$this->backupJobId = $backupJobId;
		$this->apiParas["BackupJobId"] = $backupJobId;
	}

	public function getBackupJobId()
	{
		return $this->backupJobId;
	}

	public function setBackupMode($backupMode)
	{
		$this->backupMode = $backupMode;
		$this->apiParas["BackupMode"] = $backupMode;
	}

	public function getBackupMode()
	{
		return $this->backupMode;
	}

	public function setBackupStatus($backupStatus)
	{
		$this->backupStatus = $backupStatus;
		$this->apiParas["BackupStatus"] = $backupStatus;
	}

	public function getBackupStatus()
	{
		return $this->backupStatus;
	}

	public function setdBInstanceId($dBInstanceId)
	{
		$this->dBInstanceId = $dBInstanceId;
		$this->apiParas["DBInstanceId"] = $dBInstanceId;
	}

	public function getdBInstanceId()
	{
		return $this->dBInstanceId;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount)
	{
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->apiParas["resourceOwnerAccount"] = $resourceOwnerAccount;
	}

	public function getResourceOwnerAccount()
	{
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerId($resourceOwnerId)
	{
		$this->resourceOwnerId = $resourceOwnerId;
		$this->apiParas["resourceOwnerId"] = $resourceOwnerId;
	}

	public function getResourceOwnerId()
	{
		return $this->resourceOwnerId;
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
		return "rds.aliyuncs.com.DescribeBackupTasks.2014-08-15";
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