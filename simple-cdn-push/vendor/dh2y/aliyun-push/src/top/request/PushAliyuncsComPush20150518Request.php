<?php
/**
 * TOP API: push.aliyuncs.com.push.20150518 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class PushAliyuncsComPush20150518Request
{
	/** 
	 * 用户账号列表,以换行区分,仅sendType为3时有效
	 **/
	private $account;
	
	/** 
	 * Android对应的activity,仅仅当androidOpenType=2有效
	 **/
	private $androidActivity;
	
	/** 
	 * 自定义的kv结构,开发者扩展用 针对android
	 **/
	private $androidExtParameters;
	
	/** 
	 * android通知声音
	 **/
	private $androidMusic;
	
	/** 
	 * 点击通知后动作,1:打开应用 2: 打开应用Activity 3:打开 url
	 **/
	private $androidOpenType;
	
	/** 
	 * Android收到推送后打开对应的url,仅仅当androidOpenType=3有效
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
	 * 推送内容
	 **/
	private $body;
	
	/** 
	 * 推送接收设备，多个以逗号分隔
	 **/
	private $deviceId;
	
	/** 
	 * 设备类型,取值范围为:0~3云推送支持多种设备,各 种设备类型编号如下: 0:IOS设备; 1:Andriod设备 3:全部. 默认为3.
	 **/
	private $deviceType;
	
	/** 
	 * iOS应用图标右上角角标
	 **/
	private $iOSBadge;
	
	/** 
	 * 自定义的kv结构,开发者扩展用 针对iOS设备
	 **/
	private $iOSExtParameters;
	
	/** 
	 * iOS通知声音
	 **/
	private $iOSMusic;
	
	/** 
	 * 省份ID
	 **/
	private $provinceId;
	
	/** 
	 * 推送时间,若空表示立即推送,推送时间不能早于当前时间
	 **/
	private $pushTime;
	
	/** 
	 * 当APP不在线时候，是否通过通知提醒
	 **/
	private $remind;
	
	/** 
	 * 推送类型,取值范围:1~4; 1:所有人,无需指定tag、 deviceType等2:一群人,必须指定tag3:指定用户,根据 用户账号列表文件发送消息4:指定设备,根据设备编码列 表文件发送消息默认值为1
	 **/
	private $sendType;
	
	/** 
	 * 状态属性.
	 **/
	private $status;
	
	/** 
	 * 离线消息是否保存,若保存, 在推送时候，用户即使不在线，下一次上线则会收到
	 **/
	private $storeOffline;
	
	/** 
	 * 通知的摘要
	 **/
	private $summery;
	
	/** 
	 * 离线消息保存时长,取值范围为1~72,若不填,则表示不保存离线消息
	 **/
	private $timeout;
	
	/** 
	 * 推送的标题内容.
	 **/
	private $title;
	
	/** 
	 * 推送的类型，0:表示消息 1:表示通知. 默认为消息.
	 **/
	private $type;
	
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

	public function setAndroidActivity($androidActivity)
	{
		$this->androidActivity = $androidActivity;
		$this->apiParas["AndroidActivity"] = $androidActivity;
	}

	public function getAndroidActivity()
	{
		return $this->androidActivity;
	}

	public function setAndroidExtParameters($androidExtParameters)
	{
		$this->androidExtParameters = $androidExtParameters;
		$this->apiParas["AndroidExtParameters"] = $androidExtParameters;
	}

	public function getAndroidExtParameters()
	{
		return $this->androidExtParameters;
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

	public function setBody($body)
	{
		$this->body = $body;
		$this->apiParas["Body"] = $body;
	}

	public function getBody()
	{
		return $this->body;
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

	public function setiOSBadge($iOSBadge)
	{
		$this->iOSBadge = $iOSBadge;
		$this->apiParas["IOSBadge"] = $iOSBadge;
	}

	public function getiOSBadge()
	{
		return $this->iOSBadge;
	}

	public function setiOSExtParameters($iOSExtParameters)
	{
		$this->iOSExtParameters = $iOSExtParameters;
		$this->apiParas["IOSExtParameters"] = $iOSExtParameters;
	}

	public function getiOSExtParameters()
	{
		return $this->iOSExtParameters;
	}

	public function setiOSMusic($iOSMusic)
	{
		$this->iOSMusic = $iOSMusic;
		$this->apiParas["IOSMusic"] = $iOSMusic;
	}

	public function getiOSMusic()
	{
		return $this->iOSMusic;
	}

	public function setProvinceId($provinceId)
	{
		$this->provinceId = $provinceId;
		$this->apiParas["ProvinceId"] = $provinceId;
	}

	public function getProvinceId()
	{
		return $this->provinceId;
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

	public function setRemind($remind)
	{
		$this->remind = $remind;
		$this->apiParas["Remind"] = $remind;
	}

	public function getRemind()
	{
		return $this->remind;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["Status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStoreOffline($storeOffline)
	{
		$this->storeOffline = $storeOffline;
		$this->apiParas["StoreOffline"] = $storeOffline;
	}

	public function getStoreOffline()
	{
		return $this->storeOffline;
	}

	public function setSummery($summery)
	{
		$this->summery = $summery;
		$this->apiParas["Summery"] = $summery;
	}

	public function getSummery()
	{
		return $this->summery;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["Type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "push.aliyuncs.com.push.20150518";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appId,"appId");
		RequestCheckUtil::checkNotNull($this->body,"body");
		RequestCheckUtil::checkNotNull($this->deviceType,"deviceType");
		RequestCheckUtil::checkNotNull($this->remind,"remind");
		RequestCheckUtil::checkNotNull($this->sendType,"sendType");
		RequestCheckUtil::checkNotNull($this->storeOffline,"storeOffline");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
