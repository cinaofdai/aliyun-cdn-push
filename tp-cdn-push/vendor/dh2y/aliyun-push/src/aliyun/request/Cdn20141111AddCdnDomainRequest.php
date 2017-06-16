<?php
/**
 * TOP API: cdn.aliyuncs.com.AddCdnDomain.2014-11-11 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Cdn20141111AddCdnDomainRequest
{
	/** 
	 * 加速域名的业务类型；  取值：web：图片及小文件分发、download：大文件下载加速、video：流媒体加速
	 **/
	private $cdnType;
	
	/** 
	 * domainName
	 **/
	private $domainName;
	
	/** 
	 * 源站类型  取值：ipaddr：IP源站，domain：域名源站，oss：OSS Bucket为源站
	 **/
	private $sourceType;
	
	/** 
	 * 回源地址，可以是IP或域名；IP支持最多100个，以;号区分，域名只能输入一个。IP与域名不能同时输入。
	 **/
	private $sources;
	
	/** 
	 * 是否使用https域名，默认不开启  取值：0不开启、1开启
	 **/
	private $sslFlag;
	
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
	
	public function setCdnType($cdnType)
	{
		$this->cdnType = $cdnType;
		$this->apiParas["CdnType"] = $cdnType;
	}

	public function getCdnType()
	{
		return $this->cdnType;
	}

	public function setDomainName($domainName)
	{
		$this->domainName = $domainName;
		$this->apiParas["DomainName"] = $domainName;
	}

	public function getDomainName()
	{
		return $this->domainName;
	}

	public function setSourceType($sourceType)
	{
		$this->sourceType = $sourceType;
		$this->apiParas["SourceType"] = $sourceType;
	}

	public function getSourceType()
	{
		return $this->sourceType;
	}

	public function setSources($sources)
	{
		$this->sources = $sources;
		$this->apiParas["Sources"] = $sources;
	}

	public function getSources()
	{
		return $this->sources;
	}

	public function setSslFlag($sslFlag)
	{
		$this->sslFlag = $sslFlag;
		$this->apiParas["SslFlag"] = $sslFlag;
	}

	public function getSslFlag()
	{
		return $this->sslFlag;
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
		return "cdn.aliyuncs.com.AddCdnDomain.2014-11-11";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cdnType,"cdnType");
		RequestCheckUtil::checkNotNull($this->domainName,"domainName");
		RequestCheckUtil::checkNotNull($this->sourceType,"sourceType");
		RequestCheckUtil::checkNotNull($this->sources,"sources");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}