<?php
/**
 * TOP API: dns.aliyuncs.com.DescribeDomainRecords.2015-01-09 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Dns20150109DescribeDomainRecordsRequest
{
	/** 
	 * 需要获取解析列表的域名
	 **/
	private $domainName;
	
	/** 
	 * 当前页数，起始值为1，默认为1
	 **/
	private $pageNumber;
	
	/** 
	 * 分页查询时设置的每页行数，最大值500，默认为20
	 **/
	private $pageSize;
	
	/** 
	 * 主机记录的关键字，按照”%RRKeyWord%”模式搜索，不区分大小写
	 **/
	private $rRKeyWord;
	
	/** 
	 * 解析类型的关键字，按照全匹配搜索，不区分大小写
	 **/
	private $typeKeyWord;
	
	/** 
	 * 记录值的关键字，按照”%ValueKeyWord%”模式搜索，不区分大小写
	 **/
	private $valueKeyWord;
	
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

	public function setrRKeyWord($rRKeyWord)
	{
		$this->rRKeyWord = $rRKeyWord;
		$this->apiParas["RRKeyWord"] = $rRKeyWord;
	}

	public function getrRKeyWord()
	{
		return $this->rRKeyWord;
	}

	public function setTypeKeyWord($typeKeyWord)
	{
		$this->typeKeyWord = $typeKeyWord;
		$this->apiParas["TypeKeyWord"] = $typeKeyWord;
	}

	public function getTypeKeyWord()
	{
		return $this->typeKeyWord;
	}

	public function setValueKeyWord($valueKeyWord)
	{
		$this->valueKeyWord = $valueKeyWord;
		$this->apiParas["ValueKeyWord"] = $valueKeyWord;
	}

	public function getValueKeyWord()
	{
		return $this->valueKeyWord;
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
		return "dns.aliyuncs.com.DescribeDomainRecords.2015-01-09";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->domainName,"domainName");
		RequestCheckUtil::checkMaxLength($this->domainName,1024,"domainName");
		RequestCheckUtil::checkMinValue($this->pageNumber,1,"pageNumber");
		RequestCheckUtil::checkMaxValue($this->pageSize,500,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkMaxLength($this->typeKeyWord,20,"typeKeyWord");
		RequestCheckUtil::checkMaxLength($this->valueKeyWord,1024,"valueKeyWord");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}