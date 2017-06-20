<?php

/**
 * 备份
 * @author auto create
 */
class Backup
{
	
	/** 
	 * 是否提供备份文件下载链接URL
	 **/
	public $backupDownload;
	
	/** 
	 * 备份结束时间
	 **/
	public $backupEndTime;
	
	/** 
	 * 备份ID
	 **/
	public $backupSetId;
	
	/** 
	 * 备份文件大小
	 **/
	public $backupSetSize;
	
	/** 
	 * 备份状态
	 **/
	public $backupSetStatus;
	
	/** 
	 * 本次备份开始时间
	 **/
	public $backupStartTime;
	
	/** 
	 * 备份类型
	 **/
	public $backupType;
	
	/** 
	 * 实例名
	 **/
	public $dbInstanceName;
	
	/** 
	 * 备份模式
	 **/
	public $jobMode;	
}
?>