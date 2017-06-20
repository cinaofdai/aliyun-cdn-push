<?php

/**
 * Rds云产品账户
 * @author auto create
 */
class Account
{
	
	/** 
	 * 帐号备注信息
	 **/
	public $accountDescription;
	
	/** 
	 * DB操作帐号名称
	 **/
	public $accountName;
	
	/** 
	 * 帐号状态
	 **/
	public $accountStatus;
	
	/** 
	 * Database Privilege对象
	 **/
	public $databasePrivilege;
	
	/** 
	 * 帐号所属实例名称
	 **/
	public $dbInstanceId;	
}
?>