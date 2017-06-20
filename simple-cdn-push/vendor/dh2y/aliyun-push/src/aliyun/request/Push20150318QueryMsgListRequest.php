<?php
/**
 * TOP API: push.aliyuncs.com.queryMsgList.2015-03-18 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Push20150318QueryMsgListRequest
{
	/** 
	 * 应用标识
	 **/
	private $appId;
	
	/** 
	 * 一次查询的条数
	 **/
	private $limit;
	
	/** 
	 * 查询起始的分页页数
	 **/
	private $start;
	
	/** 
	 * 消息状态0表示待发送1表示已发送2表示发送失败3表示已接受4表示已打开5表示已删除空表示全部
	 **/
	private $status;
	
	/** 
	 * 查询结束时间的unix时间戳
	 **/
	private $timeEnd;
	
	/** 
	 * 查询开始时间的unix时间戳
	 **/
	private $timeStart;
	
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
	
	public function setAppId($appId)
	{
		$this->appId = $appId;
		$this->apiParas["AppId"] = $appId;
	}

	public function getAppId()
	{
		return $this->appId;
	}

	public function setLimit($limit)
	{
		$this->limit = $limit;
		$this->apiParas["Limit"] = $limit;
	}

	public function getLimit()
	{
		return $this->limit;
	}

	public function setStart($start)
	{
		$this->start = $start;
		$this->apiParas["Start"] = $start;
	}

	public function getStart()
	{
		return $this->start;
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

	public function setTimeEnd($timeEnd)
	{
		$this->timeEnd = $timeEnd;
		$this->apiParas["TimeEnd"] = $timeEnd;
	}

	public function getTimeEnd()
	{
		return $this->timeEnd;
	}

	public function setTimeStart($timeStart)
	{
		$this->timeStart = $timeStart;
		$this->apiParas["TimeStart"] = $timeStart;
	}

	public function getTimeStart()
	{
		return $this->timeStart;
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
		return "push.aliyuncs.com.queryMsgList.2015-03-18";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appId,"appId");
		RequestCheckUtil::checkNotNull($this->limit,"limit");
		RequestCheckUtil::checkNotNull($this->start,"start");
		RequestCheckUtil::checkNotNull($this->timeEnd,"timeEnd");
		RequestCheckUtil::checkNotNull($this->timeStart,"timeStart");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}