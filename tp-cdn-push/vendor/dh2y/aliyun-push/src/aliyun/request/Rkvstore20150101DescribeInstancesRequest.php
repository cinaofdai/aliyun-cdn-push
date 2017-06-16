<?php
/**
 * TOP API: r-kvstore.aliyuncs.com.DescribeInstances.2015-01-01 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Rkvstore20150101DescribeInstancesRequest
{
	/** 
	 * 指定实例ID时，需输入(全局唯一)16位字符串；
若查询多个实例ID时，使用英文半角”,”分隔各ID；置空时默认为查询该用户名下所有实例；
	 **/
	private $instanceIds;
	
	/** 
	 * 实例状态
Normal:正常
Creating：创建中
Changing：修改中
Inactive: 被禁用
	 **/
	private $instanceStatus;
	
	/** 
	 * 实例状态列表的页码，起始值为1，默认值为1
	 **/
	private $pageNumber;
	
	/** 
	 * 分页查询时设置的每页行数，最大值50行，默认值为10
	 **/
	private $pageSize;
	
	/** 
	 * 可用区
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
	
	public function setInstanceIds($instanceIds)
	{
		$this->instanceIds = $instanceIds;
		$this->apiParas["InstanceIds"] = $instanceIds;
	}

	public function getInstanceIds()
	{
		return $this->instanceIds;
	}

	public function setInstanceStatus($instanceStatus)
	{
		$this->instanceStatus = $instanceStatus;
		$this->apiParas["InstanceStatus"] = $instanceStatus;
	}

	public function getInstanceStatus()
	{
		return $this->instanceStatus;
	}

	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
		$this->apiParas["PageNumber"] = $pageNumber;
	}

	public function getPageNumber()
	{
		return $this->pageNumber;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["PageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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
		return "r-kvstore.aliyuncs.com.DescribeInstances.2015-01-01";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageNumber,65535,"pageNumber");
		RequestCheckUtil::checkMinValue($this->pageNumber,1,"pageNumber");
		RequestCheckUtil::checkMaxValue($this->pageSize,50,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}