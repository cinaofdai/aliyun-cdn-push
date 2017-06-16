<?php
/**
 * TOP API: m-kvstore.aliyuncs.com.DescribeInstances.2015-03-01 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Mkvstore20150301DescribeInstancesRequest
{
	/** 
	 * 实例ID， 若多个实例ID使用英文半角”, ”分隔，置空时默认为所有实例ID
(全局唯一);16位字符串
	 **/
	private $instanceIds;
	
	/** 
	 * Available：使用中
Unavailable：已禁用
Creating：创建中
Changing：修改中
为空时返回所有状态
	 **/
	private $instanceStatus;
	
	/** 
	 * 实例所属网络类型，值：CLASSIC、VPC
	 **/
	private $networkType;
	
	/** 
	 * 实例状态列表的页码，起始值为1，默认值为1
	 **/
	private $pageNumber;
	
	/** 
	 * 分页查询时设置的每页行数，最大值50行，默认值为10
	 **/
	private $pageSize;
	
	/** 
	 * VPC类型OCS实例的私网IP地址，若多个IP地址的话以英文半角","分隔
	 **/
	private $privateIpAddresses;
	
	/** 
	 * cn-hangzhou  华东杭州
cn-qingdao  华北青岛
地域-城市
	 **/
	private $regionId;
	
	/** 
	 * VPC类型OCS实例的虚拟交换机ID
	 **/
	private $vSwitchId;
	
	/** 
	 * VPC类型OCS实例的专用网络（VPC）ID
	 **/
	private $vpcId;
	
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

	public function setNetworkType($networkType)
	{
		$this->networkType = $networkType;
		$this->apiParas["NetworkType"] = $networkType;
	}

	public function getNetworkType()
	{
		return $this->networkType;
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

	public function setPrivateIpAddresses($privateIpAddresses)
	{
		$this->privateIpAddresses = $privateIpAddresses;
		$this->apiParas["PrivateIpAddresses"] = $privateIpAddresses;
	}

	public function getPrivateIpAddresses()
	{
		return $this->privateIpAddresses;
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

	public function setvSwitchId($vSwitchId)
	{
		$this->vSwitchId = $vSwitchId;
		$this->apiParas["VSwitchId"] = $vSwitchId;
	}

	public function getvSwitchId()
	{
		return $this->vSwitchId;
	}

	public function setVpcId($vpcId)
	{
		$this->vpcId = $vpcId;
		$this->apiParas["VpcId"] = $vpcId;
	}

	public function getVpcId()
	{
		return $this->vpcId;
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
		return "m-kvstore.aliyuncs.com.DescribeInstances.2015-03-01";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->pageNumber,1,"pageNumber");
		RequestCheckUtil::checkMaxValue($this->pageSize,50,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}