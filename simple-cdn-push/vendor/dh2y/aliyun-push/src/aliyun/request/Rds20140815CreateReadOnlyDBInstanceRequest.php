<?php
/**
 * TOP API: rds.aliyuncs.com.CreateReadOnlyDBInstance.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Rds20140815CreateReadOnlyDBInstanceRequest
{
	/** 
	 * 用于保证幂等性
	 **/
	private $clientToken;
	
	/** 
	 * 实例规格，可选值：见实例规格附表
	 **/
	private $dBInstanceClass;
	
	/** 
	 * 不能以http://,https开头 开始以中文，英文字母开头 可以包含中文，英文字符，_，-，数字字符長度2~256
	 **/
	private $dBInstanceDescription;
	
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * 自定义存储空间，取值范围：mysql为[5,1000]，sql server为[10，1000]。
单位：GB
	 **/
	private $dBInstanceStorage;
	
	/** 
	 * 仅仅支持MySQL5.6
	 **/
	private $engineVersion;
	
	/** 
	 * VPC：创建VPC实例 Classic：创建Classic实例 不填，默认创建Classic实例
	 **/
	private $instanceNetworkType;
	
	/** 
	 * Postpaid，按量付费，目前只有这一种
	 **/
	private $payType;
	
	/** 
	 * 用户可以指定VSwitchId下的vpcIp，如果不输入，系统通过vpcId,和VSwitchId 自动分配。 如果PrivateIpAddress不在vswitch 包含的vpcip 地址段内，这报错。
	 **/
	private $privateIpAddress;
	
	/** 
	 * 数据中心，长度不超过50个字符
	 **/
	private $regionId;
	
	/** 
	 * VPCId
	 **/
	private $vPCId;
	
	/** 
	 * VSwitchId
	 **/
	private $vSwitchId;
	
	/** 
	 * 可用区通过函数DescribeRegions查看
	 **/
	private $zoneId;
	
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
	
	public function setClientToken($clientToken)
	{
		$this->clientToken = $clientToken;
		$this->apiParas["ClientToken"] = $clientToken;
	}

	public function getClientToken()
	{
		return $this->clientToken;
	}

	public function setdBInstanceClass($dBInstanceClass)
	{
		$this->dBInstanceClass = $dBInstanceClass;
		$this->apiParas["DBInstanceClass"] = $dBInstanceClass;
	}

	public function getdBInstanceClass()
	{
		return $this->dBInstanceClass;
	}

	public function setdBInstanceDescription($dBInstanceDescription)
	{
		$this->dBInstanceDescription = $dBInstanceDescription;
		$this->apiParas["DBInstanceDescription"] = $dBInstanceDescription;
	}

	public function getdBInstanceDescription()
	{
		return $this->dBInstanceDescription;
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

	public function setdBInstanceStorage($dBInstanceStorage)
	{
		$this->dBInstanceStorage = $dBInstanceStorage;
		$this->apiParas["DBInstanceStorage"] = $dBInstanceStorage;
	}

	public function getdBInstanceStorage()
	{
		return $this->dBInstanceStorage;
	}

	public function setEngineVersion($engineVersion)
	{
		$this->engineVersion = $engineVersion;
		$this->apiParas["EngineVersion"] = $engineVersion;
	}

	public function getEngineVersion()
	{
		return $this->engineVersion;
	}

	public function setInstanceNetworkType($instanceNetworkType)
	{
		$this->instanceNetworkType = $instanceNetworkType;
		$this->apiParas["InstanceNetworkType"] = $instanceNetworkType;
	}

	public function getInstanceNetworkType()
	{
		return $this->instanceNetworkType;
	}

	public function setPayType($payType)
	{
		$this->payType = $payType;
		$this->apiParas["PayType"] = $payType;
	}

	public function getPayType()
	{
		return $this->payType;
	}

	public function setPrivateIpAddress($privateIpAddress)
	{
		$this->privateIpAddress = $privateIpAddress;
		$this->apiParas["PrivateIpAddress"] = $privateIpAddress;
	}

	public function getPrivateIpAddress()
	{
		return $this->privateIpAddress;
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

	public function setvPCId($vPCId)
	{
		$this->vPCId = $vPCId;
		$this->apiParas["VPCId"] = $vPCId;
	}

	public function getvPCId()
	{
		return $this->vPCId;
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

	public function setZoneId($zoneId)
	{
		$this->zoneId = $zoneId;
		$this->apiParas["ZoneId"] = $zoneId;
	}

	public function getZoneId()
	{
		return $this->zoneId;
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
		return "rds.aliyuncs.com.CreateReadOnlyDBInstance.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->clientToken,"clientToken");
		RequestCheckUtil::checkNotNull($this->dBInstanceClass,"dBInstanceClass");
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->dBInstanceStorage,"dBInstanceStorage");
		RequestCheckUtil::checkNotNull($this->engineVersion,"engineVersion");
		RequestCheckUtil::checkNotNull($this->payType,"payType");
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
		RequestCheckUtil::checkNotNull($this->zoneId,"zoneId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}