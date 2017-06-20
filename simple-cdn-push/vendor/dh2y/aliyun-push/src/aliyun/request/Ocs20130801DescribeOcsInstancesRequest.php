<?php
/**
 * TOP API: ocs.aliyuncs.com.DescribeOcsInstances.2013-08-01 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Ocs20130801DescribeOcsInstancesRequest
{
	/** 
	 * 实例ID， 若多个实例ID使用英文半角”, ”分隔，置空时默认为所有实例ID
(全局唯一);16位字符串
	 **/
	private $ocsInstanceId;
	
	/** 
	 * Available：使用中
Unavailable：已禁用
Creating：创建中
Changing：修改中
为空时返回所有状态
	 **/
	private $ocsInstanceStatus;
	
	/** 
	 * cn-hangzhou  华东杭州
cn-qingdao  华北青岛
地域-城市
	 **/
	private $regionId;
	
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
	
	public function setOcsInstanceId($ocsInstanceId)
	{
		$this->ocsInstanceId = $ocsInstanceId;
		$this->apiParas["OcsInstanceId"] = $ocsInstanceId;
	}

	public function getOcsInstanceId()
	{
		return $this->ocsInstanceId;
	}

	public function setOcsInstanceStatus($ocsInstanceStatus)
	{
		$this->ocsInstanceStatus = $ocsInstanceStatus;
		$this->apiParas["OcsInstanceStatus"] = $ocsInstanceStatus;
	}

	public function getOcsInstanceStatus()
	{
		return $this->ocsInstanceStatus;
	}

	public function setRegionId($regionId)
	{
		$this->regionId = $regionId;
		$this->apiParas["RegionId"] = $regionId;
	}

	public function getRegionId()
	{
		return $this->regionId;
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
		return "ocs.aliyuncs.com.DescribeOcsInstances.2013-08-01";
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