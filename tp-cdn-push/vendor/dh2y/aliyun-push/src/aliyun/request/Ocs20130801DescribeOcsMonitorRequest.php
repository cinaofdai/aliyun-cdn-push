<?php
/**
 * TOP API: ocs.aliyuncs.com.DescribeOcsMonitor.2013-08-01 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Ocs20130801DescribeOcsMonitorRequest
{
	/** 
	 * 监控项名， 若多个监控项使用英文半角”,”分隔，置空时返回所有监控项
请见资源监控表
	 **/
	private $monitorKey;
	
	/** 
	 * 实例ID， 若多个实例ID使用英文半角”, ”分隔，置空时默认为所有实例ID
(全局唯一);16位字符串
	 **/
	private $ocsInstanceId;
	
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
	
	public function setMonitorKey($monitorKey)
	{
		$this->monitorKey = $monitorKey;
		$this->apiParas["MonitorKey"] = $monitorKey;
	}

	public function getMonitorKey()
	{
		return $this->monitorKey;
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
		return "ocs.aliyuncs.com.DescribeOcsMonitor.2013-08-01";
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