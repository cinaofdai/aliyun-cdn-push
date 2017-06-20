<?php
/**
 * TOP API: mts.aliyuncs.com.SubmitJobs.2014-06-18 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Mts20140618SubmitJobsRequest
{
	/** 
	 * 输入
	 **/
	private $input;
	
	/** 
	 * 输出Bucket
	 **/
	private $outputBucket;
	
	/** 
	 * 输出Bucket所在数据中心
	 **/
	private $outputLocation;
	
	/** 
	 * 输出列表
	 **/
	private $outputs;
	
	/** 
	 * 管道ID
	 **/
	private $pipelineId;
	
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
	
	public function setInput($input)
	{
		$this->input = $input;
		$this->apiParas["Input"] = $input;
	}

	public function getInput()
	{
		return $this->input;
	}

	public function setOutputBucket($outputBucket)
	{
		$this->outputBucket = $outputBucket;
		$this->apiParas["OutputBucket"] = $outputBucket;
	}

	public function getOutputBucket()
	{
		return $this->outputBucket;
	}

	public function setOutputLocation($outputLocation)
	{
		$this->outputLocation = $outputLocation;
		$this->apiParas["OutputLocation"] = $outputLocation;
	}

	public function getOutputLocation()
	{
		return $this->outputLocation;
	}

	public function setOutputs($outputs)
	{
		$this->outputs = $outputs;
		$this->apiParas["Outputs"] = $outputs;
	}

	public function getOutputs()
	{
		return $this->outputs;
	}

	public function setPipelineId($pipelineId)
	{
		$this->pipelineId = $pipelineId;
		$this->apiParas["PipelineId"] = $pipelineId;
	}

	public function getPipelineId()
	{
		return $this->pipelineId;
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
		return "mts.aliyuncs.com.SubmitJobs.2014-06-18";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->input,"input");
		RequestCheckUtil::checkNotNull($this->outputBucket,"outputBucket");
		RequestCheckUtil::checkNotNull($this->outputs,"outputs");
		RequestCheckUtil::checkNotNull($this->pipelineId,"pipelineId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}