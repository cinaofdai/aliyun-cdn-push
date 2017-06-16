<?php
/**
 * TOP API: r-kvstore.aliyuncs.com.CreateInstance.2015-01-01 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Rkvstore20150101CreateInstanceRequest
{
	/** 
	 * 说明：实例容量设置
单位：MByte
输入范围请见redisa规格参数表
	 **/
	private $capacity;
	
	/** 
	 * 创建实例时的配置参数
	 **/
	private $config;
	
	/** 
	 * 实例昵称
	 **/
	private $instanceName;
	
	/** 
	 * 说明：实例密码
规则：大写字母、小写字母、数字、下划线，至少包含3种或以上。
长度8~32位
	 **/
	private $password;
	
	/** 
	 * 华东杭州：cn-hangzhou 
华北青岛：cn-qingdao
	 **/
	private $regionId;
	
	/** 
	 * 用于保证幂等性
	 **/
	private $token;
	
	/** 
	 * RegionId下级可用区编码
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
	
	public function setCapacity($capacity)
	{
		$this->capacity = $capacity;
		$this->apiParas["Capacity"] = $capacity;
	}

	public function getCapacity()
	{
		return $this->capacity;
	}

	public function setConfig($config)
	{
		$this->config = $config;
		$this->apiParas["Config"] = $config;
	}

	public function getConfig()
	{
		return $this->config;
	}

	public function setInstanceName($instanceName)
	{
		$this->instanceName = $instanceName;
		$this->apiParas["InstanceName"] = $instanceName;
	}

	public function getInstanceName()
	{
		return $this->instanceName;
	}

	public function setPassword($password)
	{
		$this->password = $password;
		$this->apiParas["Password"] = $password;
	}

	public function getPassword()
	{
		return $this->password;
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

	public function setToken($token)
	{
		$this->token = $token;
		$this->apiParas["Token"] = $token;
	}

	public function getToken()
	{
		return $this->token;
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
		return "r-kvstore.aliyuncs.com.CreateInstance.2015-01-01";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->capacity,"capacity");
		RequestCheckUtil::checkMaxLength($this->instanceName,256,"instanceName");
		RequestCheckUtil::checkNotNull($this->password,"password");
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}