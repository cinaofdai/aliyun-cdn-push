@echo off

rem -------------------------------------------------------------
rem  thinkPHP command line bootstrap script for Windows.
rem  @author dh2y <xiaodai54_long@163.com>
rem -------------------------------------------------------------

@setlocal

set THINK_PATH=%~dp0

if "%PHP_COMMAND%" == "" set PHP_COMMAND=php.exe

"%PHP_COMMAND%" "%THINK_PATH%think" %*

@endlocal
