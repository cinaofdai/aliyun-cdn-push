<?php
/**
 * TOP API: r-kvstore.aliyuncs.com.DescribeHistoryMonitorValues.2015-01-01 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Rkvstore20150101DescribeHistoryMonitorValuesRequest
{
	/** 
	 * 历史监控结束时间点；
ISO8601 表示法，并使用UTC时间。格式为： YYYY-MM-DDThh:mm:ssZ
	 **/
	private $endTime;
	
	/** 
	 * 实例ID
	 **/
	private $instanceId;
	
	/** 
	 * 监控信息采样间隔
	 **/
	private $intervalForHistory;
	
	/** 
	 * 监控项名，若多个用英文半角“,”分隔，置空时返回所有监控项.
支持多个监控项和多实例查询：
1. 不传MonitorKey，即获取该实例的所有监控项
2. 传一个MonitorKey，即获取某个监控项
3. 传多个MonitorKey，即获取多个监控项
	 **/
	private $monitorKeys;
	
	/** 
	 * 历史监控开始时间点；
ISO8601 表示法，并使用UTC时间。格式为： YYYY-MM-DDThh:mm:ssZ
	 **/
	private $startTime;
	
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
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["EndTime"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setInstanceId($instanceId)
	{
		$this->instanceId = $instanceId;
		$this->apiParas["InstanceId"] = $instanceId;
	}

	public function getInstanceId()
	{
		return $this->instanceId;
	}

	public function setIntervalForHistory($intervalForHistory)
	{
		$this->intervalForHistory = $intervalForHistory;
		$this->apiParas["IntervalForHistory"] = $intervalForHistory;
	}

	public function getIntervalForHistory()
	{
		return $this->intervalForHistory;
	}

	public function setMonitorKeys($monitorKeys)
	{
		$this->monitorKeys = $monitorKeys;
		$this->apiParas["MonitorKeys"] = $monitorKeys;
	}

	public function getMonitorKeys()
	{
		return $this->monitorKeys;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["StartTime"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
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
		return "r-kvstore.aliyuncs.com.DescribeHistoryMonitorValues.2015-01-01";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->instanceId,"instanceId");
		RequestCheckUtil::checkNotNull($this->intervalForHistory,"intervalForHistory");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}