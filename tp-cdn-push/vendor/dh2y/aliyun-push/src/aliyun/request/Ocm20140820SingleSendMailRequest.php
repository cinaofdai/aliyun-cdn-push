<?php
/**
 * TOP API: ocm.aliyuncs.com.SingleSendMail.2014-08-20 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Ocm20140820SingleSendMailRequest
{
	/** 
	 * 0为默认，1为指定address
	 **/
	private $addressType;
	
	/** 
	 * 发信人地址（域名子账户）
	 **/
	private $fromAddress;
	
	/** 
	 * 邮件html正文
	 **/
	private $htmlBody;
	
	/** 
	 * 是否使用系统配置的回信地址
	 **/
	private $replyToAddress;
	
	/** 
	 * 邮件出题
	 **/
	private $subject;
	
	/** 
	 * 邮件text正文
	 **/
	private $textBody;
	
	/** 
	 * 目标地址为List对象email
	 **/
	private $toAddress;
	
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
	
	public function setAddressType($addressType)
	{
		$this->addressType = $addressType;
		$this->apiParas["addressType"] = $addressType;
	}

	public function getAddressType()
	{
		return $this->addressType;
	}

	public function setFromAddress($fromAddress)
	{
		$this->fromAddress = $fromAddress;
		$this->apiParas["fromAddress"] = $fromAddress;
	}

	public function getFromAddress()
	{
		return $this->fromAddress;
	}

	public function setHtmlBody($htmlBody)
	{
		$this->htmlBody = $htmlBody;
		$this->apiParas["htmlBody"] = $htmlBody;
	}

	public function getHtmlBody()
	{
		return $this->htmlBody;
	}

	public function setReplyToAddress($replyToAddress)
	{
		$this->replyToAddress = $replyToAddress;
		$this->apiParas["replyToAddress"] = $replyToAddress;
	}

	public function getReplyToAddress()
	{
		return $this->replyToAddress;
	}

	public function setSubject($subject)
	{
		$this->subject = $subject;
		$this->apiParas["subject"] = $subject;
	}

	public function getSubject()
	{
		return $this->subject;
	}

	public function setTextBody($textBody)
	{
		$this->textBody = $textBody;
		$this->apiParas["textBody"] = $textBody;
	}

	public function getTextBody()
	{
		return $this->textBody;
	}

	public function setToAddress($toAddress)
	{
		$this->toAddress = $toAddress;
		$this->apiParas["toAddress"] = $toAddress;
	}

	public function getToAddress()
	{
		return $this->toAddress;
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
		return "ocm.aliyuncs.com.SingleSendMail.2014-08-20";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->addressType,"addressType");
		RequestCheckUtil::checkNotNull($this->fromAddress,"fromAddress");
		RequestCheckUtil::checkMaxLength($this->fromAddress,100,"fromAddress");
		RequestCheckUtil::checkNotNull($this->subject,"subject");
		RequestCheckUtil::checkNotNull($this->toAddress,"toAddress");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}