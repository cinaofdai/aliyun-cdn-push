<?php
/**
 * TOP API: dns.aliyuncs.com.AddDomainRecord.2015-01-09 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Dns20150109AddDomainRecordRequest
{
	/** 
	 * 要添加解析的域名
	 **/
	private $domainName;
	
	/** 
	 * 解析线路
	 **/
	private $line;
	
	/** 
	 * MX解析必须的优先级
	 **/
	private $priority;
	
	/** 
	 * 解析host值
	 **/
	private $rR;
	
	/** 
	 * 解析生存时间
	 **/
	private $tTL;
	
	/** 
	 * 解析类型
	 **/
	private $type;
	
	/** 
	 * 解析值
	 **/
	private $value;
	
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
	
	public function setDomainName($domainName)
	{
		$this->domainName = $domainName;
		$this->apiParas["DomainName"] = $domainName;
	}

	public function getDomainName()
	{
		return $this->domainName;
	}

	public function setLine($line)
	{
		$this->line = $line;
		$this->apiParas["Line"] = $line;
	}

	public function getLine()
	{
		return $this->line;
	}

	public function setPriority($priority)
	{
		$this->priority = $priority;
		$this->apiParas["Priority"] = $priority;
	}

	public function getPriority()
	{
		return $this->priority;
	}

	public function setrR($rR)
	{
		$this->rR = $rR;
		$this->apiParas["RR"] = $rR;
	}

	public function getrR()
	{
		return $this->rR;
	}

	public function settTL($tTL)
	{
		$this->tTL = $tTL;
		$this->apiParas["TTL"] = $tTL;
	}

	public function gettTL()
	{
		return $this->tTL;
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

	public function setValue($value)
	{
		$this->value = $value;
		$this->apiParas["Value"] = $value;
	}

	public function getValue()
	{
		return $this->value;
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
		return "dns.aliyuncs.com.AddDomainRecord.2015-01-09";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->domainName,"domainName");
		RequestCheckUtil::checkNotNull($this->rR,"rR");
		RequestCheckUtil::checkNotNull($this->type,"type");
		RequestCheckUtil::checkNotNull($this->value,"value");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}