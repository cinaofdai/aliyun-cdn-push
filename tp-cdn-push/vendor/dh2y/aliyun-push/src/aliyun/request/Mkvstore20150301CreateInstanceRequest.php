<?php
/**
 * TOP API: m-kvstore.aliyuncs.com.CreateInstance.2015-03-01 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Mkvstore20150301CreateInstanceRequest
{
	/** 
	 * 说明：实例容量设置单位：MByte输入范围请见OCS规格参数表
	 **/
	private $capacity;
	
	/** 
	 * 实例昵称长度为2-128个字符，以大小写英文字母或中文开头，不支持字符@/:="<>{[]}和空格
	 **/
	private $instanceName;
	
	/** 
	 * OCS实例的网络类型：classic或vpc。默认为classic
	 **/
	private $networkType;
	
	/** 
	 * 说明：实例密码规则：需同时且只能包含大写字母、小写字母和数字长度8~30个字符
	 **/
	private $password;
	
	/** 
	 * OCS实例所属vpc内的私网IP地址。当NetworkType参数为vpc时有效。如果不带本参数，则系统通过VpcId和VSwitchId自动分配。如果此参数对应的私网IP地址不在VSwitchId包含的IP地址段内，则创建失败。
	 **/
	private $privateIpAddress;
	
	/** 
	 * 华东杭州：cn-hangzhou 华北青岛：cn-qingdao
	 **/
	private $regionId;
	
	/** 
	 * 用于保证幂等性
	 **/
	private $token;
	
	/** 
	 * OCS实例所属vpc实例的虚拟交换机ID。如果NetworkType参数为vpc，则本参数为必须。
	 **/
	private $vSwitchId;
	
	/** 
	 * OCS实例所属vpc实例id。如果NetworkType参数为vpc，则本参数为必须。
	 **/
	private $vpcId;
	
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

	public function setInstanceName($instanceName)
	{
		$this->instanceName = $instanceName;
		$this->apiParas["InstanceName"] = $instanceName;
	}

	public function getInstanceName()
	{
		return $this->instanceName;
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

	public function setPassword($password)
	{
		$this->password = $password;
		$this->apiParas["Password"] = $password;
	}

	public function getPassword()
	{
		return $this->password;
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

	public function setToken($token)
	{
		$this->token = $token;
		$this->apiParas["Token"] = $token;
	}

	public function getToken()
	{
		return $this->token;
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
		return "m-kvstore.aliyuncs.com.CreateInstance.2015-03-01";
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