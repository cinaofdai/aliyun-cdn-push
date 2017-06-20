<?php

/**
 * 资源
 * @author auto create
 */
class Resource
{
	
	/** 
	 * 备份占用空间，单位：Byte
	 **/
	public $backupSize;
	
	/** 
	 * 数据文件占用空间，单位：Byte
	 **/
	public $dataSize;
	
	/** 
	 * 实例id
	 **/
	public $dbInstanceId;
	
	/** 
	 * 已用空间（DataSize+ LogSize），单位：Byte
	 **/
	public $diskUsed;
	
	/** 
	 * 数据库类型
	 **/
	public $engine;
	
	/** 
	 * 日志占用空间，单位：Byte
	 **/
	public $logSize;
	
	/** 
	 * 流入流量，单位：Byte
	 **/
	public $networkIn;
	
	/** 
	 * 流出流量，单位：Byte
	 **/
	public $networkOut;	
}
?>