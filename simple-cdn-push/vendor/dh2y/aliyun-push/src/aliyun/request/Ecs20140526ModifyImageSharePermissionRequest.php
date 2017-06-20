<?php
/**
 * TOP API: ecs.aliyuncs.com.ModifyImageSharePermission.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Ecs20140526ModifyImageSharePermissionRequest
{
	/** 
	 * 添加镜像共享的账号email,n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $addAccount1;
	
	/** 
	 * 添加镜像共享的账号email,n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $addAccount10;
	
	/** 
	 * 添加镜像共享的账号email,n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $addAccount2;
	
	/** 
	 * 添加镜像共享的账号email,n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $addAccount3;
	
	/** 
	 * 添加镜像共享的账号email,n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $addAccount4;
	
	/** 
	 * 添加镜像共享的账号email,n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $addAccount5;
	
	/** 
	 * 添加镜像共享的账号email,n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $addAccount6;
	
	/** 
	 * 添加镜像共享的账号email,n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $addAccount7;
	
	/** 
	 * 添加镜像共享的账号email,n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $addAccount8;
	
	/** 
	 * 添加镜像共享的账号email,n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $addAccount9;
	
	/** 
	 * 源自定义镜像的ID
	 **/
	private $imageId;
	
	/** 
	 * 源自定义镜像的regionId
	 **/
	private $regionId;
	
	/** 
	 * 删除镜像共享的账号email， n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $removeAccount1;
	
	/** 
	 * 删除镜像共享的账号email， n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $removeAccount10;
	
	/** 
	 * 删除镜像共享的账号email， n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $removeAccount2;
	
	/** 
	 * 删除镜像共享的账号email， n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $removeAccount3;
	
	/** 
	 * 删除镜像共享的账号email， n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $removeAccount4;
	
	/** 
	 * 删除镜像共享的账号email， n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $removeAccount5;
	
	/** 
	 * 删除镜像共享的账号email， n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $removeAccount6;
	
	/** 
	 * 删除镜像共享的账号email， n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $removeAccount7;
	
	/** 
	 * 删除镜像共享的账号email， n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $removeAccount8;
	
	/** 
	 * 删除镜像共享的账号email， n的取值范围[1-10],超过10系统会忽略该参数
	 **/
	private $removeAccount9;
	
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
	
	public function setAddAccount1($addAccount1)
	{
		$this->addAccount1 = $addAccount1;
		$this->apiParas["AddAccount.1"] = $addAccount1;
	}

	public function getAddAccount1()
	{
		return $this->addAccount1;
	}

	public function setAddAccount10($addAccount10)
	{
		$this->addAccount10 = $addAccount10;
		$this->apiParas["AddAccount.10"] = $addAccount10;
	}

	public function getAddAccount10()
	{
		return $this->addAccount10;
	}

	public function setAddAccount2($addAccount2)
	{
		$this->addAccount2 = $addAccount2;
		$this->apiParas["AddAccount.2"] = $addAccount2;
	}

	public function getAddAccount2()
	{
		return $this->addAccount2;
	}

	public function setAddAccount3($addAccount3)
	{
		$this->addAccount3 = $addAccount3;
		$this->apiParas["AddAccount.3"] = $addAccount3;
	}

	public function getAddAccount3()
	{
		return $this->addAccount3;
	}

	public function setAddAccount4($addAccount4)
	{
		$this->addAccount4 = $addAccount4;
		$this->apiParas["AddAccount.4"] = $addAccount4;
	}

	public function getAddAccount4()
	{
		return $this->addAccount4;
	}

	public function setAddAccount5($addAccount5)
	{
		$this->addAccount5 = $addAccount5;
		$this->apiParas["AddAccount.5"] = $addAccount5;
	}

	public function getAddAccount5()
	{
		return $this->addAccount5;
	}

	public function setAddAccount6($addAccount6)
	{
		$this->addAccount6 = $addAccount6;
		$this->apiParas["AddAccount.6"] = $addAccount6;
	}

	public function getAddAccount6()
	{
		return $this->addAccount6;
	}

	public function setAddAccount7($addAccount7)
	{
		$this->addAccount7 = $addAccount7;
		$this->apiParas["AddAccount.7"] = $addAccount7;
	}

	public function getAddAccount7()
	{
		return $this->addAccount7;
	}

	public function setAddAccount8($addAccount8)
	{
		$this->addAccount8 = $addAccount8;
		$this->apiParas["AddAccount.8"] = $addAccount8;
	}

	public function getAddAccount8()
	{
		return $this->addAccount8;
	}

	public function setAddAccount9($addAccount9)
	{
		$this->addAccount9 = $addAccount9;
		$this->apiParas["AddAccount.9"] = $addAccount9;
	}

	public function getAddAccount9()
	{
		return $this->addAccount9;
	}

	public function setImageId($imageId)
	{
		$this->imageId = $imageId;
		$this->apiParas["ImageId"] = $imageId;
	}

	public function getImageId()
	{
		return $this->imageId;
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

	public function setRemoveAccount1($removeAccount1)
	{
		$this->removeAccount1 = $removeAccount1;
		$this->apiParas["RemoveAccount.1"] = $removeAccount1;
	}

	public function getRemoveAccount1()
	{
		return $this->removeAccount1;
	}

	public function setRemoveAccount10($removeAccount10)
	{
		$this->removeAccount10 = $removeAccount10;
		$this->apiParas["RemoveAccount.10"] = $removeAccount10;
	}

	public function getRemoveAccount10()
	{
		return $this->removeAccount10;
	}

	public function setRemoveAccount2($removeAccount2)
	{
		$this->removeAccount2 = $removeAccount2;
		$this->apiParas["RemoveAccount.2"] = $removeAccount2;
	}

	public function getRemoveAccount2()
	{
		return $this->removeAccount2;
	}

	public function setRemoveAccount3($removeAccount3)
	{
		$this->removeAccount3 = $removeAccount3;
		$this->apiParas["RemoveAccount.3"] = $removeAccount3;
	}

	public function getRemoveAccount3()
	{
		return $this->removeAccount3;
	}

	public function setRemoveAccount4($removeAccount4)
	{
		$this->removeAccount4 = $removeAccount4;
		$this->apiParas["RemoveAccount.4"] = $removeAccount4;
	}

	public function getRemoveAccount4()
	{
		return $this->removeAccount4;
	}

	public function setRemoveAccount5($removeAccount5)
	{
		$this->removeAccount5 = $removeAccount5;
		$this->apiParas["RemoveAccount.5"] = $removeAccount5;
	}

	public function getRemoveAccount5()
	{
		return $this->removeAccount5;
	}

	public function setRemoveAccount6($removeAccount6)
	{
		$this->removeAccount6 = $removeAccount6;
		$this->apiParas["RemoveAccount.6"] = $removeAccount6;
	}

	public function getRemoveAccount6()
	{
		return $this->removeAccount6;
	}

	public function setRemoveAccount7($removeAccount7)
	{
		$this->removeAccount7 = $removeAccount7;
		$this->apiParas["RemoveAccount.7"] = $removeAccount7;
	}

	public function getRemoveAccount7()
	{
		return $this->removeAccount7;
	}

	public function setRemoveAccount8($removeAccount8)
	{
		$this->removeAccount8 = $removeAccount8;
		$this->apiParas["RemoveAccount.8"] = $removeAccount8;
	}

	public function getRemoveAccount8()
	{
		return $this->removeAccount8;
	}

	public function setRemoveAccount9($removeAccount9)
	{
		$this->removeAccount9 = $removeAccount9;
		$this->apiParas["RemoveAccount.9"] = $removeAccount9;
	}

	public function getRemoveAccount9()
	{
		return $this->removeAccount9;
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
		return "ecs.aliyuncs.com.ModifyImageSharePermission.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->imageId,"imageId");
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}