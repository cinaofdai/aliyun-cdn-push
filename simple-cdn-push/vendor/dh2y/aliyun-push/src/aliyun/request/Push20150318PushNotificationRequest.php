<?php
/**
 * TOP API: push.aliyuncs.com.pushNotification.2015-03-18 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Push20150318PushNotificationRequest
{
	/** 
	 * 用户账号列表,以换行区分,仅sendType为3时有效
	 **/
	private $account;
	
	/** 
	 * 自定义的kv结构,开发者扩展用
	 **/
	private $androidExtraMap;
	
	/** 
	 * 通知声音
	 **/
	private $androidMusic;
	
	/** 
	 * 通知类型 1:震动 2:响铃
	 **/
	private $androidNotifyType;
	
	/** 
	 * 打开app指定位置
	 **/
	private $androidOpenActivity;
	
	/** 
	 * 点击通知后动作
	 **/
	private $androidOpenType;
	
	/** 
	 * 打开应用,网页
	 **/
	private $androidOpenUrl;
	
	/** 
	 * 防打扰时长,取值范围为1~23
	 **/
	private $antiHarassDuration;
	
	/** 
	 * 防打扰开始时间点,取值范围为0~23
	 **/
	private $antiHarassStartTime;
	
	/** 
	 * 应用标识
	 **/
	private $appId;
	
	/** 
	 * 批次编号,用于活动效果统计
	 **/
	private $batchNumber;
	
	/** 
	 * 设备编号列表,以换行区分,仅sendType为4时有效
	 **/
	private $deviceId;
	
	/** 
	 * 设备类型,取值范围为:0~3云推送支持多种设备,各 种设备类型编号如下:IOS设备:deviceType&amp;1=1; Andriod设备:deviceType&amp;2=2;如果存在此字段,则向 指定的设备类型推送消息。默认为全部(3);
	 **/
	private $deviceType;
	
	/** 
	 * 自定义的kv结构,开发者扩展用
	 **/
	private $iosExtraMap;
	
	/** 
	 * 角标
	 **/
	private $iosFooter;
	
	/** 
	 * 默认音乐
	 **/
	private $iosMusic;
	
	/** 
	 * 推送时间,若空表示立即推送,推送时间不能早于当前时间
	 **/
	private $pushTime;
	
	/** 
	 * 推送类型,取值范围:1~4; 1:所有人,无需指定tag、 deviceType等2:一群人,必须指定tag3:指定用户,根据 用户账号列表文件发送消息4:指定设备,根据设备编码列 表文件发送消息默认值为1
	 **/
	private $sendType;
	
	/** 
	 * 摘要
	 **/
	private $summary;
	
	/** 
	 * 标签名称,仅支持1个标签,仅sendType为2时有效
	 **/
	private $tag;
	
	/** 
	 * 离线消息保存时长,取值范围为1~72,若不填,则表示不保存离线消息
	 **/
	private $timeout;
	
	/** 
	 * 标题
	 **/
	private $title;
	
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
	
	public function setAccount($account)
	{
		$this->account = $account;
		$this->apiParas["Account"] = $account;
	}

	public function getAccount()
	{
		return $this->account;
	}

	public function setAndroidExtraMap($androidExtraMap)
	{
		$this->androidExtraMap = $androidExtraMap;
		$this->apiParas["AndroidExtraMap"] = $androidExtraMap;
	}

	public function getAndroidExtraMap()
	{
		return $this->androidExtraMap;
	}

	public function setAndroidMusic($androidMusic)
	{
		$this->androidMusic = $androidMusic;
		$this->apiParas["AndroidMusic"] = $androidMusic;
	}

	public function getAndroidMusic()
	{
		return $this->androidMusic;
	}

	public function setAndroidNotifyType($androidNotifyType)
	{
		$this->androidNotifyType = $androidNotifyType;
		$this->apiParas["AndroidNotifyType"] = $androidNotifyType;
	}

	public function getAndroidNotifyType()
	{
		return $this->androidNotifyType;
	}

	public function setAndroidOpenActivity($androidOpenActivity)
	{
		$this->androidOpenActivity = $androidOpenActivity;
		$this->apiParas["AndroidOpenActivity"] = $androidOpenActivity;
	}

	public function getAndroidOpenActivity()
	{
		return $this->androidOpenActivity;
	}

	public function setAndroidOpenType($androidOpenType)
	{
		$this->androidOpenType = $androidOpenType;
		$this->apiParas["AndroidOpenType"] = $androidOpenType;
	}

	public function getAndroidOpenType()
	{
		return $this->androidOpenType;
	}

	public function setAndroidOpenUrl($androidOpenUrl)
	{
		$this->androidOpenUrl = $androidOpenUrl;
		$this->apiParas["AndroidOpenUrl"] = $androidOpenUrl;
	}

	public function getAndroidOpenUrl()
	{
		return $this->androidOpenUrl;
	}

	public function setAntiHarassDuration($antiHarassDuration)
	{
		$this->antiHarassDuration = $antiHarassDuration;
		$this->apiParas["AntiHarassDuration"] = $antiHarassDuration;
	}

	public function getAntiHarassDuration()
	{
		return $this->antiHarassDuration;
	}

	public function setAntiHarassStartTime($antiHarassStartTime)
	{
		$this->antiHarassStartTime = $antiHarassStartTime;
		$this->apiParas["AntiHarassStartTime"] = $antiHarassStartTime;
	}

	public function getAntiHarassStartTime()
	{
		return $this->antiHarassStartTime;
	}

	public function setAppId($appId)
	{
		$this->appId = $appId;
		$this->apiParas["AppId"] = $appId;
	}

	public function getAppId()
	{
		return $this->appId;
	}

	public function setBatchNumber($batchNumber)
	{
		$this->batchNumber = $batchNumber;
		$this->apiParas["BatchNumber"] = $batchNumber;
	}

	public function getBatchNumber()
	{
		return $this->batchNumber;
	}

	public function setDeviceId($deviceId)
	{
		$this->deviceId = $deviceId;
		$this->apiParas["DeviceId"] = $deviceId;
	}

	public function getDeviceId()
	{
		return $this->deviceId;
	}

	public function setDeviceType($deviceType)
	{
		$this->deviceType = $deviceType;
		$this->apiParas["DeviceType"] = $deviceType;
	}

	public function getDeviceType()
	{
		return $this->deviceType;
	}

	public function setIosExtraMap($iosExtraMap)
	{
		$this->iosExtraMap = $iosExtraMap;
		$this->apiParas["IosExtraMap"] = $iosExtraMap;
	}

	public function getIosExtraMap()
	{
		return $this->iosExtraMap;
	}

	public function setIosFooter($iosFooter)
	{
		$this->iosFooter = $iosFooter;
		$this->apiParas["IosFooter"] = $iosFooter;
	}

	public function getIosFooter()
	{
		return $this->iosFooter;
	}

	public function setIosMusic($iosMusic)
	{
		$this->iosMusic = $iosMusic;
		$this->apiParas["IosMusic"] = $iosMusic;
	}

	public function getIosMusic()
	{
		return $this->iosMusic;
	}

	public function setPushTime($pushTime)
	{
		$this->pushTime = $pushTime;
		$this->apiParas["PushTime"] = $pushTime;
	}

	public function getPushTime()
	{
		return $this->pushTime;
	}

	public function setSendType($sendType)
	{
		$this->sendType = $sendType;
		$this->apiParas["SendType"] = $sendType;
	}

	public function getSendType()
	{
		return $this->sendType;
	}

	public function setSummary($summary)
	{
		$this->summary = $summary;
		$this->apiParas["Summary"] = $summary;
	}

	public function getSummary()
	{
		return $this->summary;
	}

	public function setTag($tag)
	{
		$this->tag = $tag;
		$this->apiParas["Tag"] = $tag;
	}

	public function getTag()
	{
		return $this->tag;
	}

	public function setTimeout($timeout)
	{
		$this->timeout = $timeout;
		$this->apiParas["Timeout"] = $timeout;
	}

	public function getTimeout()
	{
		return $this->timeout;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["Title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
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
		return "push.aliyuncs.com.pushNotification.2015-03-18";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appId,"appId");
		RequestCheckUtil::checkNotNull($this->deviceType,"deviceType");
		RequestCheckUtil::checkNotNull($this->sendType,"sendType");
		RequestCheckUtil::checkNotNull($this->summary,"summary");
		RequestCheckUtil::checkNotNull($this->title,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}