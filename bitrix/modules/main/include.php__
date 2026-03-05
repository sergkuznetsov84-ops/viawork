<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2023 Bitrix
 */

use Bitrix\Main;
use Bitrix\Main\Session\Legacy\HealerEarlySessionStart;

require_once(__DIR__."/start.php");

$application = Main\HttpApplication::getInstance();
$application->initializeExtendedKernel([
	"get" => $_GET,
	"post" => $_POST,
	"files" => $_FILES,
	"cookie" => $_COOKIE,
	"server" => $_SERVER,
	"env" => $_ENV
]);

if (class_exists('\Dev\Main\Migrator\ModuleUpdater'))
{
	\Dev\Main\Migrator\ModuleUpdater::checkUpdates('main', __DIR__);
}

if (defined('SITE_ID'))
{
	define('LANG', SITE_ID);
}

$context = $application->getContext();
$context->initializeCulture(defined('LANG') ? LANG : null, defined('LANGUAGE_ID') ? LANGUAGE_ID : null);

// needs to be after culture initialization
$application->start();

// constants for compatibility
$culture = $context->getCulture();
define('SITE_CHARSET', $culture->getCharset());
define('FORMAT_DATE', $culture->getFormatDate());
define('FORMAT_DATETIME', $culture->getFormatDatetime());
define('LANG_CHARSET', SITE_CHARSET);

$site = $context->getSiteObject();
if (!defined('LANG'))
{
	define('LANG', ($site ? $site->getLid() : $context->getLanguage()));
}
define('SITE_DIR', ($site ? $site->getDir() : ''));
if (!defined('SITE_SERVER_NAME'))
{
	define('SITE_SERVER_NAME', ($site ? $site->getServerName() : ''));
}
define('LANG_DIR', SITE_DIR);

if (!defined('LANGUAGE_ID'))
{
	define('LANGUAGE_ID', $context->getLanguage());
}
define('LANG_ADMIN_LID', LANGUAGE_ID);

if (!defined('SITE_ID'))
{
	define('SITE_ID', LANG);
}

/** @global $lang */
$lang = $context->getLanguage();

//define global application object
$GLOBALS["APPLICATION"] = new CMain;

if (!defined("POST_FORM_ACTION_URI"))
{
	define("POST_FORM_ACTION_URI", htmlspecialcharsbx(GetRequestUri()));
}

$GLOBALS["MESS"] = [];
$GLOBALS["ALL_LANG_FILES"] = [];
IncludeModuleLangFile(__DIR__."/tools.php");
IncludeModuleLangFile(__FILE__);

error_reporting(COption::GetOptionInt("main", "error_reporting", E_COMPILE_ERROR | E_ERROR | E_CORE_ERROR | E_PARSE) & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING & ~E_NOTICE);

if (!defined("BX_COMP_MANAGED_CACHE") && COption::GetOptionString("main", "component_managed_cache_on", "Y") <> "N")
{
	define("BX_COMP_MANAGED_CACHE", true);
}

// global functions
require_once(__DIR__."/filter_tools.php");

/*ZDUyZmZZTY1ZTAzMTg1MjRjZjQzN2I2NjdhNjM2NzNlOWRmNGI=*/$GLOBALS['_____799780187']= array(base64_decode('R2V0'.'TW9'.'kdWx'.'l'.'RXZlbnRz'),base64_decode('RXhlY'.'3V'.'0ZU1vZH'.'VsZ'.'UV2Z'.'W5'.'0R'.'Xg='));$GLOBALS['____508480237']= array(base64_decode('ZG'.'VmaW5l'),base64_decode('YmFzZ'.'TY0X'.'2'.'RlY29kZQ=='),base64_decode(''.'d'.'W'.'5z'.'ZXJpYWx'.'pemU'.'='),base64_decode('aXNf'.'YXJ'.'y'.'YXk'.'='),base64_decode('aW5'.'fY'.'XJy'.'YXk='),base64_decode('c2'.'VyaW'.'F'.'sa'.'X'.'pl'),base64_decode('YmFzZTY0X'.'2VuY29kZQ=='),base64_decode(''.'bWt0aW1l'),base64_decode('ZGF0Z'.'Q'.'='.'='),base64_decode('ZGF0Z'.'Q=='),base64_decode('c3Ryb'.'GVu'),base64_decode('bW'.'t0aW1'.'l'),base64_decode('Z'.'GF0'.'Z'.'Q=='),base64_decode('ZGF'.'0Z'.'Q=='),base64_decode('bWV0a'.'G9k'.'X2'.'V'.'4aXN0'.'cw='.'='),base64_decode('Y'.'2'.'Fs'.'bF91c2VyX2Z'.'1bmN'.'fY'.'XJyYXk='),base64_decode(''.'c3RybGVu'),base64_decode('c2VyaWFsaXpl'),base64_decode('YmFz'.'ZTY'.'0X2VuY'.'29'.'kZQ=='),base64_decode('c3Ryb'.'GVu'),base64_decode('aXN'.'fYXJyYXk='),base64_decode('c2'.'VyaWFsaX'.'p'.'l'),base64_decode('Ym'.'FzZTY0X2Vu'.'Y29kZ'.'Q=='),base64_decode('c2Vya'.'WF'.'saX'.'pl'),base64_decode('YmFz'.'ZTY0'.'X2VuY'.'29k'.'ZQ=='),base64_decode(''.'aXN'.'fYXJ'.'yYXk'.'='),base64_decode('aXN'.'f'.'YXJy'.'YXk'.'='),base64_decode(''.'aW5f'.'YXJyYXk='),base64_decode('aW5fYXJy'.'YXk='),base64_decode('b'.'Wt0aW1l'),base64_decode('ZG'.'F0Z'.'Q'.'=='),base64_decode(''.'ZGF0'.'Z'.'Q=='),base64_decode(''.'ZGF0ZQ=='),base64_decode('bWt0aW1'.'l'),base64_decode('Z'.'GF0'.'ZQ=='),base64_decode('ZG'.'F0ZQ=='),base64_decode('aW5f'.'YX'.'JyY'.'Xk='),base64_decode('c2V'.'yaW'.'Fs'.'a'.'Xpl'),base64_decode('Y'.'mFzZTY0X2'.'VuY29'.'k'.'Z'.'Q'.'=='),base64_decode('aW50d'.'mFs'),base64_decode('dGltZQ=='),base64_decode('Z'.'mlsZV9le'.'GlzdHM'.'='),base64_decode(''.'c3RyX3JlcG'.'xh'.'Y2U='),base64_decode('Y'.'2xhc3'.'NfZXhpc3Rz'),base64_decode(''.'Z'.'GVmaW5l'));if(!function_exists(__NAMESPACE__.'\\___1727377757')){function ___1727377757($_1692614546){static $_1826847323= false; if($_1826847323 == false) $_1826847323=array('SU5UUkFO'.'RVRf'.'R'.'URJV'.'ElPTg==','WQ==','bW'.'Fpbg='.'=','fmNwZl9tYXBfdmFsd'.'WU=','','','YW'.'xs'.'b3dlZ'.'F9jbG'.'Fzc2Vz','ZQ==',''.'Zg==','Z'.'Q==','Rg==','WA==','Zg'.'==','bWFpbg'.'==','fmNw'.'Zl9tYXBfdm'.'Fs'.'dWU=','UG9'.'ydGFs','Rg='.'=',''.'Z'.'Q==','ZQ==',''.'WA==','Rg'.'==','RA==','R'.'A'.'==','bQ==','ZA='.'=',''.'WQ==','Zg'.'==','Zg'.'='.'=','Zg==','Zg='.'=','UG9y'.'dGFs',''.'Rg==','Z'.'Q'.'==','ZQ='.'=',''.'WA'.'='.'=','Rg==',''.'RA='.'=','RA==','b'.'Q==','ZA='.'=','WQ='.'=','bWFpbg==','T24=','U2V0'.'dGluZ3NDaGFuZ'.'2'.'U'.'=','Z'.'g='.'=',''.'Zg==','Zg==','Zg'.'==','bWFpbg'.'==','f'.'mNwZl'.'9tY'.'XBfdmFsdW'.'U=','ZQ==','ZQ='.'=','RA'.'==','ZQ'.'='.'=','ZQ'.'='.'=','Zg==','Zg'.'==','Zg='.'=','Z'.'Q==','bWF'.'pbg='.'=','f'.'mNw'.'Zl'.'9t'.'YXBfdmFsdW'.'U'.'=',''.'ZQ==',''.'Z'.'g==','Zg='.'=','Z'.'g'.'='.'=','Zg==','bWFpbg==',''.'fmNwZl'.'9tYXB'.'fdmF'.'sdWU=','Z'.'Q==','Zg==','UG9'.'ydG'.'Fs','UG9y'.'dG'.'F'.'s','Z'.'Q==','ZQ==','UG9y'.'dGF'.'s','R'.'g='.'=',''.'WA==','R'.'g==','RA'.'==','Z'.'Q==','Z'.'Q'.'='.'=','RA==','bQ='.'=','Z'.'A==','WQ==','Z'.'Q==',''.'WA==','ZQ'.'='.'=',''.'Rg==','Z'.'Q==','RA'.'==','Zg='.'=','ZQ==','RA'.'==','Z'.'Q==','bQ==',''.'Z'.'A='.'=','WQ==',''.'Zg='.'=',''.'Zg==','Z'.'g==','Zg==',''.'Zg==','Zg'.'==','Zg==','Zg==','b'.'WFpb'.'g==','f'.'mNwZl9tY'.'XBfdmFsd'.'WU=','ZQ'.'='.'=','ZQ==','U'.'G9'.'yd'.'G'.'F'.'s','Rg'.'==',''.'WA==',''.'VFl'.'Q'.'RQ='.'=','REF'.'URQ==','Rk'.'VBVF'.'VSRVM=','RVhQSVJFRA='.'=','VF'.'lQ'.'R'.'Q==','RA='.'=','VFJZ'.'X0R'.'BWVNfQ09'.'VTlQ=','REFURQ==','VF'.'J'.'ZX0'.'RBWVNf'.'Q09VTlQ=','R'.'VhQSVJF'.'RA==',''.'R'.'k'.'V'.'BVFVSRVM=',''.'Zg==',''.'Z'.'g==','RE9DVU1F'.'TlRfU'.'k'.'9PVA==','L2JpdHJpeC9tb'.'2R1bGVz'.'Lw='.'=','L2luc'.'3R'.'hbGw'.'va'.'W'.'5kZXguc'.'G'.'hw',''.'Lg='.'=','Xw='.'=','c2V'.'hcmNo','Tg='.'=','','','Q'.'UNUSVZF','W'.'Q==','c29jaWFs'.'bmV'.'0'.'d2'.'9yaw'.'==','YW'.'xsb'.'3dfZ'.'nJpZ'.'W'.'xkcw==',''.'WQ==','S'.'UQ=','c'.'29jaWFsbmV0d29yaw==',''.'Y'.'Wxsb'.'3dfZ'.'nJp'.'ZWxk'.'cw='.'=','SUQ=','c29jaWFsb'.'mV0d29yaw='.'=','YW'.'xsb3'.'dfZ'.'nJ'.'p'.'ZWx'.'kcw='.'=','Tg'.'==','','','QUN'.'US'.'VZF',''.'WQ==','c29jaWFs'.'b'.'mV0d2'.'9y'.'a'.'w==',''.'YWx'.'s'.'b3d'.'fbW'.'ljcm'.'9ibG'.'9nX3'.'VzZXI=','WQ==',''.'SUQ'.'=','c2'.'9jaWFsbmV'.'0d29yaw==','YW'.'xsb3dfbWljcm9i'.'bG9nX3Vz'.'ZXI=',''.'SUQ=',''.'c29j'.'a'.'WFsbmV0d2'.'9yaw'.'==','YWxsb3dfbWlj'.'c'.'m9ibG'.'9'.'nX3VzZ'.'XI=','c29'.'jaWF'.'sb'.'mV'.'0d29yaw==','YWxsb3'.'dfbWl'.'jcm'.'9'.'i'.'bG9nX'.'2dyb3Vw','WQ==','S'.'UQ=','c29ja'.'WFsbmV'.'0'.'d29ya'.'w==',''.'Y'.'Wxsb3dfbWlj'.'cm9ibG9nX2d'.'yb3V'.'w','SUQ=','c29'.'ja'.'WFsbmV'.'0d29y'.'aw==','YWxsb3dfb'.'Wlj'.'cm9ibG9nX2d'.'y'.'b3Vw',''.'Tg==','','','Q'.'UNUSVZF','W'.'Q==','c'.'29j'.'aW'.'Fs'.'b'.'mV0d2'.'9yaw='.'=','YW'.'xsb'.'3d'.'fZmlsZ'.'XNfdXNlc'.'g==','W'.'Q==',''.'SUQ'.'=',''.'c29j'.'aW'.'FsbmV0'.'d'.'29yaw==','YWxsb3dfZm'.'l'.'sZXN'.'f'.'dXNlcg='.'=','SUQ=',''.'c29j'.'aW'.'F'.'sbmV0d2'.'9y'.'aw==','YWxs'.'b'.'3'.'d'.'fZml'.'sZXN'.'fdXNlcg==','Tg==','','','Q'.'UN'.'US'.'VZF','WQ==','c'.'29jaWFsbm'.'V0'.'d29yaw='.'=','Y'.'Wxsb'.'3dfYmxvZ191c2V'.'y','WQ==',''.'SU'.'Q=','c'.'29'.'jaWFs'.'bmV0d2'.'9'.'ya'.'w==','YW'.'x'.'sb3d'.'fYm'.'xvZ'.'191c2V'.'y',''.'SUQ'.'=','c2'.'9jaWFsbmV0d29ya'.'w==','YW'.'x'.'sb3df'.'Ymx'.'v'.'Z'.'191c2'.'Vy',''.'Tg'.'='.'=','','','QUNU'.'SV'.'ZF','WQ'.'==','c2'.'9'.'jaWFsbmV0'.'d'.'2'.'9'.'yaw==','YWxsb'.'3d'.'fc'.'GhvdG9fdX'.'N'.'lcg'.'==','W'.'Q'.'==','SUQ=','c29j'.'a'.'WFsbm'.'V0d29y'.'a'.'w='.'=',''.'YWxsb3dfc'.'Gh'.'vdG9fdXNlcg'.'==','SU'.'Q'.'=','c29jaW'.'Fsb'.'mV0'.'d29yaw'.'==','YWx'.'sb3dfcGhv'.'dG9f'.'dX'.'Nlcg==',''.'Tg==','','','QU'.'NUSVZF','WQ='.'=','c29'.'ja'.'WFs'.'bmV'.'0d'.'29y'.'a'.'w'.'==','Y'.'Wxsb3dfZm9ydW1fd'.'XNl'.'c'.'g'.'==',''.'W'.'Q='.'=','SUQ'.'=','c29j'.'aW'.'FsbmV'.'0d'.'29yaw==','YW'.'xs'.'b3'.'d'.'f'.'Z'.'m9y'.'dW1fdXNlcg==','SUQ=','c29jaWFs'.'bmV0'.'d2'.'9yaw==','YWxsb3'.'d'.'fZm9y'.'dW1fdXNlcg==',''.'Tg==','','','QUNU'.'SVZF','WQ==','c29jaWFsb'.'mV'.'0d29y'.'aw'.'='.'=','YWxs'.'b3dfdGFza3NfdXNlc'.'g==','WQ==','SUQ=','c29jaWFsbmV0d29'.'yaw='.'=','YWxs'.'b'.'3'.'d'.'f'.'dGF'.'z'.'a3NfdXNlc'.'g='.'=','SUQ=','c29jaWFsb'.'mV'.'0'.'d29'.'y'.'aw==','YWx'.'sb3d'.'fdGFz'.'a3NfdXNlc'.'g'.'='.'=','c2'.'9jaWFsbm'.'V0d29yaw'.'==','Y'.'Wxsb3dfdGFza3N'.'fZ3'.'Jvd'.'XA=','WQ==',''.'SUQ'.'=','c29jaWF'.'s'.'bmV0d29yaw==','YWxsb3d'.'fdG'.'Fza3NfZ3JvdXA=',''.'SU'.'Q=','c29jaWFs'.'bmV0d29'.'yaw==','Y'.'Wxsb'.'3'.'dfdGFz'.'a3Nf'.'Z3JvdXA=','dGFza3M'.'=',''.'T'.'g==','','','QUNUSVZ'.'F','WQ==',''.'c2'.'9jaW'.'FsbmV0d29yaw==','YWxsb3dfY2FsZW5kYXJ'.'f'.'dXNl'.'cg==','WQ==','SUQ=','c2'.'9'.'jaW'.'F'.'s'.'bm'.'V0d2'.'9yaw==','YWx'.'sb3dfY2FsZW5kYXJfdXNlcg==','SUQ=','c29jaWFsbmV0d'.'29ya'.'w'.'='.'=','YW'.'xs'.'b3dfY2Fs'.'ZW5kYX'.'J'.'fd'.'X'.'Nlcg==','c29jaW'.'FsbmV0d29y'.'aw==','YWxsb'.'3df'.'Y2Fs'.'Z'.'W5kYX'.'Jf'.'Z3'.'JvdXA=','WQ==',''.'SUQ=','c29'.'j'.'aW'.'Fsbm'.'V0d2'.'9yaw==','YWxsb'.'3dfY2Fs'.'ZW'.'5kYX'.'JfZ3Jv'.'dXA=','SUQ=','c2'.'9jaW'.'F'.'sbmV0d29ya'.'w==','YWxs'.'b3'.'df'.'Y'.'2FsZ'.'W5kY'.'XJfZ'.'3JvdXA'.'=','QUNUSV'.'ZF','WQ'.'==','Tg==','ZX'.'h0cmFuZXQ=','aWJsb2Nr',''.'T'.'2'.'5B'.'ZnRl'.'cklCb'.'G9ja0'.'VsZ'.'W1lbnRVcGRhdGU=','a'.'W'.'50cmFu'.'ZXQ=','Q'.'0l'.'udHJhbm'.'V0R'.'XZlbn'.'RIY'.'W'.'5k'.'bGVycw==',''.'U1BSZW'.'dpc3R'.'l'.'clV'.'wZGF0ZWRJ'.'dGVt','Q0'.'lud'.'HJhb'.'mV0'.'U2hhcmVwb2lu'.'d'.'Do6QWdlb'.'nR'.'MaXN'.'0'.'c'.'yg'.'pOw==','aW50cmFuZXQ=','Tg==','Q0'.'ludHJ'.'hbm'.'V0U2hhcmVwb2ludDo6QWdl'.'bnRRdWV1Z'.'Sgp'.'Ow==',''.'aW50c'.'m'.'FuZXQ=','T'.'g==',''.'Q0'.'lu'.'dHJh'.'bmV0'.'U2hhcmV'.'w'.'b2'.'lu'.'d'.'Do6QWdl'.'bnR'.'VcGRhdGUoKTs=','aW50cmFu'.'ZXQ=','Tg'.'='.'=','aWJsb'.'2Nr','T25BZn'.'RlcklCb'.'G9ja0VsZW1lbn'.'RBZGQ=','aW'.'50cmFuZX'.'Q=','Q'.'0l'.'udHJhb'.'mV0'.'RXZlbnRIYW5kb'.'GV'.'ycw==','U1BSZWdpc3RlclVwZGF0'.'Z'.'WRJdGV'.'t',''.'aWJ'.'s'.'b2Nr','T25BZ'.'nRl'.'cklCbG9ja0Vs'.'Z'.'W1l'.'b'.'nR'.'Vc'.'GRhdGU=','aW50cmF'.'uZXQ'.'=','Q'.'0lud'.'HJhbmV0RX'.'ZlbnRIYW5kb'.'GVycw==','U'.'1BSZWd'.'p'.'c3R'.'lcl'.'VwZGF0ZWR'.'J'.'dG'.'Vt','Q0l'.'udHJ'.'hbmV0U2hhcmVwb2lu'.'dDo'.'6QW'.'dlbn'.'R'.'Ma'.'XN0cygpOw==','aW50cmFuZ'.'XQ'.'=',''.'Q0lu'.'dH'.'JhbmV'.'0U'.'2hhcmV'.'wb2ludDo6QW'.'dlbnRRdWV'.'1'.'ZSgp'.'O'.'w==','aW50'.'c'.'mFuZ'.'XQ=','Q0lud'.'HJh'.'b'.'mV0U'.'2hhcmVwb2'.'l'.'udDo6Q'.'Wdl'.'bnR'.'VcGRhdGUo'.'KTs=','aW5'.'0cmF'.'uZ'.'XQ=',''.'Y3Jt','bWFpb'.'g==','T25C'.'Z'.'WZvcmV'.'Qcm9s'.'b'.'2c=','bW'.'Fpbg='.'=','Q1d'.'pe'.'m'.'FyZFNvbFBhbmVsSW5'.'0cmFuZXQ=','U2hvd'.'1BhbmVs','L21vZHVs'.'ZXMvaW'.'5'.'0'.'cmFuZXQv'.'cGFuZWxf'.'YnV0dG9u'.'LnBocA==','RU5DT0RF','WQ==');return base64_decode($_1826847323[$_1692614546]);}};$GLOBALS['____508480237'][0](___1727377757(0), ___1727377757(1));class CBXFeatures{ private static $_1223823554= 30; private static $_984627621= array( "Portal" => array( "CompanyCalendar", "CompanyPhoto", "CompanyVideo", "CompanyCareer", "StaffChanges", "StaffAbsence", "CommonDocuments", "MeetingRoomBookingSystem", "Wiki", "Learning", "Vote", "WebLink", "Subscribe", "Friends", "PersonalFiles", "PersonalBlog", "PersonalPhoto", "PersonalForum", "Blog", "Forum", "Gallery", "Board", "MicroBlog", "WebMessenger",), "Communications" => array( "Tasks", "Calendar", "Workgroups", "Jabber", "VideoConference", "Extranet", "SMTP", "Requests", "DAV", "intranet_sharepoint", "timeman", "Idea", "Meeting", "EventList", "Salary", "XDImport",), "Enterprise" => array( "BizProc", "Lists", "Support", "Analytics", "crm", "Controller", "LdapUnlimitedUsers",), "Holding" => array( "Cluster", "MultiSites",),); private static $_303253106= null; private static $_1506934190= null; private static function __154354810(){ if(self::$_303253106 === null){ self::$_303253106= array(); foreach(self::$_984627621 as $_1921200739 => $_955455674){ foreach($_955455674 as $_685055788) self::$_303253106[$_685055788]= $_1921200739;}} if(self::$_1506934190 === null){ self::$_1506934190= array(); $_968191703= COption::GetOptionString(___1727377757(2), ___1727377757(3), ___1727377757(4)); if($_968191703 != ___1727377757(5)){ $_968191703= $GLOBALS['____508480237'][1]($_968191703); $_968191703= $GLOBALS['____508480237'][2]($_968191703,[___1727377757(6) => false]); if($GLOBALS['____508480237'][3]($_968191703)){ self::$_1506934190= $_968191703;}} if(empty(self::$_1506934190)){ self::$_1506934190= array(___1727377757(7) => array(), ___1727377757(8) => array());}}} public static function InitiateEditionsSettings($_184100763){ self::__154354810(); $_1866726646= array(); foreach(self::$_984627621 as $_1921200739 => $_955455674){ $_1905543030= $GLOBALS['____508480237'][4]($_1921200739, $_184100763); self::$_1506934190[___1727377757(9)][$_1921200739]=($_1905543030? array(___1727377757(10)): array(___1727377757(11))); foreach($_955455674 as $_685055788){ self::$_1506934190[___1727377757(12)][$_685055788]= $_1905543030; if(!$_1905543030) $_1866726646[]= array($_685055788, false);}} $_2107413868= $GLOBALS['____508480237'][5](self::$_1506934190); $_2107413868= $GLOBALS['____508480237'][6]($_2107413868); COption::SetOptionString(___1727377757(13), ___1727377757(14), $_2107413868); foreach($_1866726646 as $_2104950605) self::__1991890788($_2104950605[(160*2-320)], $_2104950605[round(0+0.33333333333333+0.33333333333333+0.33333333333333)]);} public static function IsFeatureEnabled($_685055788){ if($_685055788 == '') return true; self::__154354810(); if(!isset(self::$_303253106[$_685055788])) return true; if(self::$_303253106[$_685055788] == ___1727377757(15)) $_2011083449= array(___1727377757(16)); elseif(isset(self::$_1506934190[___1727377757(17)][self::$_303253106[$_685055788]])) $_2011083449= self::$_1506934190[___1727377757(18)][self::$_303253106[$_685055788]]; else $_2011083449= array(___1727377757(19)); if($_2011083449[min(176,0,58.666666666667)] != ___1727377757(20) && $_2011083449[(1312/2-656)] != ___1727377757(21)){ return false;} elseif($_2011083449[(182*2-364)] == ___1727377757(22)){ if($_2011083449[round(0+0.5+0.5)]< $GLOBALS['____508480237'][7]((233*2-466),(982-2*491),(1036/2-518), Date(___1727377757(23)), $GLOBALS['____508480237'][8](___1727377757(24))- self::$_1223823554, $GLOBALS['____508480237'][9](___1727377757(25)))){ if(!isset($_2011083449[round(0+0.5+0.5+0.5+0.5)]) ||!$_2011083449[round(0+2)]) self::__125594863(self::$_303253106[$_685055788]); return false;}} return!isset(self::$_1506934190[___1727377757(26)][$_685055788]) || self::$_1506934190[___1727377757(27)][$_685055788];} public static function IsFeatureInstalled($_685055788){ if($GLOBALS['____508480237'][10]($_685055788) <= 0) return true; self::__154354810(); return(isset(self::$_1506934190[___1727377757(28)][$_685055788]) && self::$_1506934190[___1727377757(29)][$_685055788]);} public static function IsFeatureEditable($_685055788){ if($_685055788 == '') return true; self::__154354810(); if(!isset(self::$_303253106[$_685055788])) return true; if(self::$_303253106[$_685055788] == ___1727377757(30)) $_2011083449= array(___1727377757(31)); elseif(isset(self::$_1506934190[___1727377757(32)][self::$_303253106[$_685055788]])) $_2011083449= self::$_1506934190[___1727377757(33)][self::$_303253106[$_685055788]]; else $_2011083449= array(___1727377757(34)); if($_2011083449[(870-2*435)] != ___1727377757(35) && $_2011083449[min(154,0,51.333333333333)] != ___1727377757(36)){ return false;} elseif($_2011083449[(162*2-324)] == ___1727377757(37)){ if($_2011083449[round(0+0.2+0.2+0.2+0.2+0.2)]< $GLOBALS['____508480237'][11](min(6,0,2),(986-2*493), min(76,0,25.333333333333), Date(___1727377757(38)), $GLOBALS['____508480237'][12](___1727377757(39))- self::$_1223823554, $GLOBALS['____508480237'][13](___1727377757(40)))){ if(!isset($_2011083449[round(0+2)]) ||!$_2011083449[round(0+0.4+0.4+0.4+0.4+0.4)]) self::__125594863(self::$_303253106[$_685055788]); return false;}} return true;} private static function __1991890788($_685055788, $_139769025){ if($GLOBALS['____508480237'][14]("CBXFeatures", "On".$_685055788."SettingsChange")) $GLOBALS['____508480237'][15](array("CBXFeatures", "On".$_685055788."SettingsChange"), array($_685055788, $_139769025)); $_22497729= $GLOBALS['_____799780187'][0](___1727377757(41), ___1727377757(42).$_685055788.___1727377757(43)); while($_338562828= $_22497729->Fetch()) $GLOBALS['_____799780187'][1]($_338562828, array($_685055788, $_139769025));} public static function SetFeatureEnabled($_685055788, $_139769025= true, $_1344813795= true){ if($GLOBALS['____508480237'][16]($_685055788) <= 0) return; if(!self::IsFeatureEditable($_685055788)) $_139769025= false; $_139769025= (bool)$_139769025; self::__154354810(); $_2016943049=(!isset(self::$_1506934190[___1727377757(44)][$_685055788]) && $_139769025 || isset(self::$_1506934190[___1727377757(45)][$_685055788]) && $_139769025 != self::$_1506934190[___1727377757(46)][$_685055788]); self::$_1506934190[___1727377757(47)][$_685055788]= $_139769025; $_2107413868= $GLOBALS['____508480237'][17](self::$_1506934190); $_2107413868= $GLOBALS['____508480237'][18]($_2107413868); COption::SetOptionString(___1727377757(48), ___1727377757(49), $_2107413868); if($_2016943049 && $_1344813795) self::__1991890788($_685055788, $_139769025);} private static function __125594863($_1921200739){ if($GLOBALS['____508480237'][19]($_1921200739) <= 0 || $_1921200739 == "Portal") return; self::__154354810(); if(!isset(self::$_1506934190[___1727377757(50)][$_1921200739]) || self::$_1506934190[___1727377757(51)][$_1921200739][min(246,0,82)] != ___1727377757(52)) return; if(isset(self::$_1506934190[___1727377757(53)][$_1921200739][round(0+1+1)]) && self::$_1506934190[___1727377757(54)][$_1921200739][round(0+0.66666666666667+0.66666666666667+0.66666666666667)]) return; $_1866726646= array(); if(isset(self::$_984627621[$_1921200739]) && $GLOBALS['____508480237'][20](self::$_984627621[$_1921200739])){ foreach(self::$_984627621[$_1921200739] as $_685055788){ if(isset(self::$_1506934190[___1727377757(55)][$_685055788]) && self::$_1506934190[___1727377757(56)][$_685055788]){ self::$_1506934190[___1727377757(57)][$_685055788]= false; $_1866726646[]= array($_685055788, false);}} self::$_1506934190[___1727377757(58)][$_1921200739][round(0+0.5+0.5+0.5+0.5)]= true;} $_2107413868= $GLOBALS['____508480237'][21](self::$_1506934190); $_2107413868= $GLOBALS['____508480237'][22]($_2107413868); COption::SetOptionString(___1727377757(59), ___1727377757(60), $_2107413868); foreach($_1866726646 as $_2104950605) self::__1991890788($_2104950605[(806-2*403)], $_2104950605[round(0+1)]);} public static function ModifyFeaturesSettings($_184100763, $_955455674){ self::__154354810(); foreach($_184100763 as $_1921200739 => $_1042576440) self::$_1506934190[___1727377757(61)][$_1921200739]= $_1042576440; $_1866726646= array(); foreach($_955455674 as $_685055788 => $_139769025){ if(!isset(self::$_1506934190[___1727377757(62)][$_685055788]) && $_139769025 || isset(self::$_1506934190[___1727377757(63)][$_685055788]) && $_139769025 != self::$_1506934190[___1727377757(64)][$_685055788]) $_1866726646[]= array($_685055788, $_139769025); self::$_1506934190[___1727377757(65)][$_685055788]= $_139769025;} $_2107413868= $GLOBALS['____508480237'][23](self::$_1506934190); $_2107413868= $GLOBALS['____508480237'][24]($_2107413868); COption::SetOptionString(___1727377757(66), ___1727377757(67), $_2107413868); self::$_1506934190= false; foreach($_1866726646 as $_2104950605) self::__1991890788($_2104950605[min(118,0,39.333333333333)], $_2104950605[round(0+1)]);} public static function SaveFeaturesSettings($_148128538, $_1239917567){ self::__154354810(); $_1804616814= array(___1727377757(68) => array(), ___1727377757(69) => array()); if(!$GLOBALS['____508480237'][25]($_148128538)) $_148128538= array(); if(!$GLOBALS['____508480237'][26]($_1239917567)) $_1239917567= array(); if(!$GLOBALS['____508480237'][27](___1727377757(70), $_148128538)) $_148128538[]= ___1727377757(71); foreach(self::$_984627621 as $_1921200739 => $_955455674){ if(isset(self::$_1506934190[___1727377757(72)][$_1921200739])){ $_451938870= self::$_1506934190[___1727377757(73)][$_1921200739];} else{ $_451938870=($_1921200739 == ___1727377757(74)? array(___1727377757(75)): array(___1727377757(76)));} if($_451938870[(1028/2-514)] == ___1727377757(77) || $_451938870[(244*2-488)] == ___1727377757(78)){ $_1804616814[___1727377757(79)][$_1921200739]= $_451938870;} else{ if($GLOBALS['____508480237'][28]($_1921200739, $_148128538)) $_1804616814[___1727377757(80)][$_1921200739]= array(___1727377757(81), $GLOBALS['____508480237'][29]((848-2*424),(1264/2-632),(786-2*393), $GLOBALS['____508480237'][30](___1727377757(82)), $GLOBALS['____508480237'][31](___1727377757(83)), $GLOBALS['____508480237'][32](___1727377757(84)))); else $_1804616814[___1727377757(85)][$_1921200739]= array(___1727377757(86));}} $_1866726646= array(); foreach(self::$_303253106 as $_685055788 => $_1921200739){ if($_1804616814[___1727377757(87)][$_1921200739][min(156,0,52)] != ___1727377757(88) && $_1804616814[___1727377757(89)][$_1921200739][(936-2*468)] != ___1727377757(90)){ $_1804616814[___1727377757(91)][$_685055788]= false;} else{ if($_1804616814[___1727377757(92)][$_1921200739][(978-2*489)] == ___1727377757(93) && $_1804616814[___1727377757(94)][$_1921200739][round(0+0.2+0.2+0.2+0.2+0.2)]< $GLOBALS['____508480237'][33](min(208,0,69.333333333333), min(198,0,66),(876-2*438), Date(___1727377757(95)), $GLOBALS['____508480237'][34](___1727377757(96))- self::$_1223823554, $GLOBALS['____508480237'][35](___1727377757(97)))) $_1804616814[___1727377757(98)][$_685055788]= false; else $_1804616814[___1727377757(99)][$_685055788]= $GLOBALS['____508480237'][36]($_685055788, $_1239917567); if(!isset(self::$_1506934190[___1727377757(100)][$_685055788]) && $_1804616814[___1727377757(101)][$_685055788] || isset(self::$_1506934190[___1727377757(102)][$_685055788]) && $_1804616814[___1727377757(103)][$_685055788] != self::$_1506934190[___1727377757(104)][$_685055788]) $_1866726646[]= array($_685055788, $_1804616814[___1727377757(105)][$_685055788]);}} $_2107413868= $GLOBALS['____508480237'][37]($_1804616814); $_2107413868= $GLOBALS['____508480237'][38]($_2107413868); COption::SetOptionString(___1727377757(106), ___1727377757(107), $_2107413868); self::$_1506934190= false; foreach($_1866726646 as $_2104950605) self::__1991890788($_2104950605[(169*2-338)], $_2104950605[round(0+0.2+0.2+0.2+0.2+0.2)]);} public static function GetFeaturesList(){ self::__154354810(); $_1169672941= array(); foreach(self::$_984627621 as $_1921200739 => $_955455674){ if(isset(self::$_1506934190[___1727377757(108)][$_1921200739])){ $_451938870= self::$_1506934190[___1727377757(109)][$_1921200739];} else{ $_451938870=($_1921200739 == ___1727377757(110)? array(___1727377757(111)): array(___1727377757(112)));} $_1169672941[$_1921200739]= array( ___1727377757(113) => $_451938870[(890-2*445)], ___1727377757(114) => $_451938870[round(0+0.2+0.2+0.2+0.2+0.2)], ___1727377757(115) => array(),); $_1169672941[$_1921200739][___1727377757(116)]= false; if($_1169672941[$_1921200739][___1727377757(117)] == ___1727377757(118)){ $_1169672941[$_1921200739][___1727377757(119)]= $GLOBALS['____508480237'][39](($GLOBALS['____508480237'][40]()- $_1169672941[$_1921200739][___1727377757(120)])/ round(0+43200+43200)); if($_1169672941[$_1921200739][___1727377757(121)]> self::$_1223823554) $_1169672941[$_1921200739][___1727377757(122)]= true;} foreach($_955455674 as $_685055788) $_1169672941[$_1921200739][___1727377757(123)][$_685055788]=(!isset(self::$_1506934190[___1727377757(124)][$_685055788]) || self::$_1506934190[___1727377757(125)][$_685055788]);} return $_1169672941;} private static function __811760557($_356734987, $_423572849){ if(IsModuleInstalled($_356734987) == $_423572849) return true; $_1953478925= $_SERVER[___1727377757(126)].___1727377757(127).$_356734987.___1727377757(128); if(!$GLOBALS['____508480237'][41]($_1953478925)) return false; include_once($_1953478925); $_1934266123= $GLOBALS['____508480237'][42](___1727377757(129), ___1727377757(130), $_356734987); if(!$GLOBALS['____508480237'][43]($_1934266123)) return false; $_1355043943= new $_1934266123; if($_423572849){ if(!$_1355043943->InstallDB()) return false; $_1355043943->InstallEvents(); if(!$_1355043943->InstallFiles()) return false;} else{ if(CModule::IncludeModule(___1727377757(131))) CSearch::DeleteIndex($_356734987); UnRegisterModule($_356734987);} return true;} protected static function OnRequestsSettingsChange($_685055788, $_139769025){ self::__811760557("form", $_139769025);} protected static function OnLearningSettingsChange($_685055788, $_139769025){ self::__811760557("learning", $_139769025);} protected static function OnJabberSettingsChange($_685055788, $_139769025){ self::__811760557("xmpp", $_139769025);} protected static function OnVideoConferenceSettingsChange($_685055788, $_139769025){ self::__811760557("video", $_139769025);} protected static function OnBizProcSettingsChange($_685055788, $_139769025){ self::__811760557("bizprocdesigner", $_139769025);} protected static function OnListsSettingsChange($_685055788, $_139769025){ self::__811760557("lists", $_139769025);} protected static function OnWikiSettingsChange($_685055788, $_139769025){ self::__811760557("wiki", $_139769025);} protected static function OnSupportSettingsChange($_685055788, $_139769025){ self::__811760557("support", $_139769025);} protected static function OnControllerSettingsChange($_685055788, $_139769025){ self::__811760557("controller", $_139769025);} protected static function OnAnalyticsSettingsChange($_685055788, $_139769025){ self::__811760557("statistic", $_139769025);} protected static function OnVoteSettingsChange($_685055788, $_139769025){ self::__811760557("vote", $_139769025);} protected static function OnFriendsSettingsChange($_685055788, $_139769025){ if($_139769025) $_1823787957= "Y"; else $_1823787957= ___1727377757(132); $_1413550215= CSite::GetList(___1727377757(133), ___1727377757(134), array(___1727377757(135) => ___1727377757(136))); while($_1164341029= $_1413550215->Fetch()){ if(COption::GetOptionString(___1727377757(137), ___1727377757(138), ___1727377757(139), $_1164341029[___1727377757(140)]) != $_1823787957){ COption::SetOptionString(___1727377757(141), ___1727377757(142), $_1823787957, false, $_1164341029[___1727377757(143)]); COption::SetOptionString(___1727377757(144), ___1727377757(145), $_1823787957);}}} protected static function OnMicroBlogSettingsChange($_685055788, $_139769025){ if($_139769025) $_1823787957= "Y"; else $_1823787957= ___1727377757(146); $_1413550215= CSite::GetList(___1727377757(147), ___1727377757(148), array(___1727377757(149) => ___1727377757(150))); while($_1164341029= $_1413550215->Fetch()){ if(COption::GetOptionString(___1727377757(151), ___1727377757(152), ___1727377757(153), $_1164341029[___1727377757(154)]) != $_1823787957){ COption::SetOptionString(___1727377757(155), ___1727377757(156), $_1823787957, false, $_1164341029[___1727377757(157)]); COption::SetOptionString(___1727377757(158), ___1727377757(159), $_1823787957);} if(COption::GetOptionString(___1727377757(160), ___1727377757(161), ___1727377757(162), $_1164341029[___1727377757(163)]) != $_1823787957){ COption::SetOptionString(___1727377757(164), ___1727377757(165), $_1823787957, false, $_1164341029[___1727377757(166)]); COption::SetOptionString(___1727377757(167), ___1727377757(168), $_1823787957);}}} protected static function OnPersonalFilesSettingsChange($_685055788, $_139769025){ if($_139769025) $_1823787957= "Y"; else $_1823787957= ___1727377757(169); $_1413550215= CSite::GetList(___1727377757(170), ___1727377757(171), array(___1727377757(172) => ___1727377757(173))); while($_1164341029= $_1413550215->Fetch()){ if(COption::GetOptionString(___1727377757(174), ___1727377757(175), ___1727377757(176), $_1164341029[___1727377757(177)]) != $_1823787957){ COption::SetOptionString(___1727377757(178), ___1727377757(179), $_1823787957, false, $_1164341029[___1727377757(180)]); COption::SetOptionString(___1727377757(181), ___1727377757(182), $_1823787957);}}} protected static function OnPersonalBlogSettingsChange($_685055788, $_139769025){ if($_139769025) $_1823787957= "Y"; else $_1823787957= ___1727377757(183); $_1413550215= CSite::GetList(___1727377757(184), ___1727377757(185), array(___1727377757(186) => ___1727377757(187))); while($_1164341029= $_1413550215->Fetch()){ if(COption::GetOptionString(___1727377757(188), ___1727377757(189), ___1727377757(190), $_1164341029[___1727377757(191)]) != $_1823787957){ COption::SetOptionString(___1727377757(192), ___1727377757(193), $_1823787957, false, $_1164341029[___1727377757(194)]); COption::SetOptionString(___1727377757(195), ___1727377757(196), $_1823787957);}}} protected static function OnPersonalPhotoSettingsChange($_685055788, $_139769025){ if($_139769025) $_1823787957= "Y"; else $_1823787957= ___1727377757(197); $_1413550215= CSite::GetList(___1727377757(198), ___1727377757(199), array(___1727377757(200) => ___1727377757(201))); while($_1164341029= $_1413550215->Fetch()){ if(COption::GetOptionString(___1727377757(202), ___1727377757(203), ___1727377757(204), $_1164341029[___1727377757(205)]) != $_1823787957){ COption::SetOptionString(___1727377757(206), ___1727377757(207), $_1823787957, false, $_1164341029[___1727377757(208)]); COption::SetOptionString(___1727377757(209), ___1727377757(210), $_1823787957);}}} protected static function OnPersonalForumSettingsChange($_685055788, $_139769025){ if($_139769025) $_1823787957= "Y"; else $_1823787957= ___1727377757(211); $_1413550215= CSite::GetList(___1727377757(212), ___1727377757(213), array(___1727377757(214) => ___1727377757(215))); while($_1164341029= $_1413550215->Fetch()){ if(COption::GetOptionString(___1727377757(216), ___1727377757(217), ___1727377757(218), $_1164341029[___1727377757(219)]) != $_1823787957){ COption::SetOptionString(___1727377757(220), ___1727377757(221), $_1823787957, false, $_1164341029[___1727377757(222)]); COption::SetOptionString(___1727377757(223), ___1727377757(224), $_1823787957);}}} protected static function OnTasksSettingsChange($_685055788, $_139769025){ if($_139769025) $_1823787957= "Y"; else $_1823787957= ___1727377757(225); $_1413550215= CSite::GetList(___1727377757(226), ___1727377757(227), array(___1727377757(228) => ___1727377757(229))); while($_1164341029= $_1413550215->Fetch()){ if(COption::GetOptionString(___1727377757(230), ___1727377757(231), ___1727377757(232), $_1164341029[___1727377757(233)]) != $_1823787957){ COption::SetOptionString(___1727377757(234), ___1727377757(235), $_1823787957, false, $_1164341029[___1727377757(236)]); COption::SetOptionString(___1727377757(237), ___1727377757(238), $_1823787957);} if(COption::GetOptionString(___1727377757(239), ___1727377757(240), ___1727377757(241), $_1164341029[___1727377757(242)]) != $_1823787957){ COption::SetOptionString(___1727377757(243), ___1727377757(244), $_1823787957, false, $_1164341029[___1727377757(245)]); COption::SetOptionString(___1727377757(246), ___1727377757(247), $_1823787957);}} self::__811760557(___1727377757(248), $_139769025);} protected static function OnCalendarSettingsChange($_685055788, $_139769025){ if($_139769025) $_1823787957= "Y"; else $_1823787957= ___1727377757(249); $_1413550215= CSite::GetList(___1727377757(250), ___1727377757(251), array(___1727377757(252) => ___1727377757(253))); while($_1164341029= $_1413550215->Fetch()){ if(COption::GetOptionString(___1727377757(254), ___1727377757(255), ___1727377757(256), $_1164341029[___1727377757(257)]) != $_1823787957){ COption::SetOptionString(___1727377757(258), ___1727377757(259), $_1823787957, false, $_1164341029[___1727377757(260)]); COption::SetOptionString(___1727377757(261), ___1727377757(262), $_1823787957);} if(COption::GetOptionString(___1727377757(263), ___1727377757(264), ___1727377757(265), $_1164341029[___1727377757(266)]) != $_1823787957){ COption::SetOptionString(___1727377757(267), ___1727377757(268), $_1823787957, false, $_1164341029[___1727377757(269)]); COption::SetOptionString(___1727377757(270), ___1727377757(271), $_1823787957);}}} protected static function OnSMTPSettingsChange($_685055788, $_139769025){ self::__811760557("mail", $_139769025);} protected static function OnExtranetSettingsChange($_685055788, $_139769025){ $_1631295794= COption::GetOptionString("extranet", "extranet_site", ""); if($_1631295794){ $_996448548= new CSite; $_996448548->Update($_1631295794, array(___1727377757(272) =>($_139769025? ___1727377757(273): ___1727377757(274))));} self::__811760557(___1727377757(275), $_139769025);} protected static function OnDAVSettingsChange($_685055788, $_139769025){ self::__811760557("dav", $_139769025);} protected static function OntimemanSettingsChange($_685055788, $_139769025){ self::__811760557("timeman", $_139769025);} protected static function Onintranet_sharepointSettingsChange($_685055788, $_139769025){ if($_139769025){ RegisterModuleDependences("iblock", "OnAfterIBlockElementAdd", "intranet", "CIntranetEventHandlers", "SPRegisterUpdatedItem"); RegisterModuleDependences(___1727377757(276), ___1727377757(277), ___1727377757(278), ___1727377757(279), ___1727377757(280)); CAgent::AddAgent(___1727377757(281), ___1727377757(282), ___1727377757(283), round(0+100+100+100+100+100)); CAgent::AddAgent(___1727377757(284), ___1727377757(285), ___1727377757(286), round(0+100+100+100)); CAgent::AddAgent(___1727377757(287), ___1727377757(288), ___1727377757(289), round(0+1800+1800));} else{ UnRegisterModuleDependences(___1727377757(290), ___1727377757(291), ___1727377757(292), ___1727377757(293), ___1727377757(294)); UnRegisterModuleDependences(___1727377757(295), ___1727377757(296), ___1727377757(297), ___1727377757(298), ___1727377757(299)); CAgent::RemoveAgent(___1727377757(300), ___1727377757(301)); CAgent::RemoveAgent(___1727377757(302), ___1727377757(303)); CAgent::RemoveAgent(___1727377757(304), ___1727377757(305));}} protected static function OncrmSettingsChange($_685055788, $_139769025){ if($_139769025) COption::SetOptionString("crm", "form_features", "Y"); self::__811760557(___1727377757(306), $_139769025);} protected static function OnClusterSettingsChange($_685055788, $_139769025){ self::__811760557("cluster", $_139769025);} protected static function OnMultiSitesSettingsChange($_685055788, $_139769025){ if($_139769025) RegisterModuleDependences("main", "OnBeforeProlog", "main", "CWizardSolPanelIntranet", "ShowPanel", 100, "/modules/intranet/panel_button.php"); else UnRegisterModuleDependences(___1727377757(307), ___1727377757(308), ___1727377757(309), ___1727377757(310), ___1727377757(311), ___1727377757(312));} protected static function OnIdeaSettingsChange($_685055788, $_139769025){ self::__811760557("idea", $_139769025);} protected static function OnMeetingSettingsChange($_685055788, $_139769025){ self::__811760557("meeting", $_139769025);} protected static function OnXDImportSettingsChange($_685055788, $_139769025){ self::__811760557("xdimport", $_139769025);}} $GLOBALS['____508480237'][44](___1727377757(313), ___1727377757(314));/**/			//Do not remove this

require_once(__DIR__."/autoload.php");

// Component 2.0 template engines
$GLOBALS['arCustomTemplateEngines'] = [];

// User fields manager
$GLOBALS['USER_FIELD_MANAGER'] = new CUserTypeManager;

// todo: remove global
$GLOBALS['BX_MENU_CUSTOM'] = CMenuCustom::getInstance();

if (file_exists(($_fname = __DIR__."/classes/general/update_db_updater.php")))
{
	$US_HOST_PROCESS_MAIN = false;
	include($_fname);
}

if (file_exists(($_fname = $_SERVER["DOCUMENT_ROOT"]."/bitrix/init.php")))
{
	include_once($_fname);
}

if (($_fname = getLocalPath("php_interface/init.php", BX_PERSONAL_ROOT)) !== false)
{
	include_once($_SERVER["DOCUMENT_ROOT"].$_fname);
}

if (($_fname = getLocalPath("php_interface/".SITE_ID."/init.php", BX_PERSONAL_ROOT)) !== false)
{
	include_once($_SERVER["DOCUMENT_ROOT"].$_fname);
}

//global var, is used somewhere
$GLOBALS["sDocPath"] = $GLOBALS["APPLICATION"]->GetCurPage();

if ((!(defined("STATISTIC_ONLY") && STATISTIC_ONLY && mb_substr($GLOBALS["APPLICATION"]->GetCurPage(), 0, mb_strlen(BX_ROOT."/admin/")) != BX_ROOT."/admin/")) && COption::GetOptionString("main", "include_charset", "Y")=="Y" && LANG_CHARSET <> '')
{
	header("Content-Type: text/html; charset=".LANG_CHARSET);
}

if (COption::GetOptionString("main", "set_p3p_header", "Y")=="Y")
{
	header("P3P: policyref=\"/bitrix/p3p.xml\", CP=\"NON DSP COR CUR ADM DEV PSA PSD OUR UNR BUS UNI COM NAV INT DEM STA\"");
}

$license = $application->getLicense();
header("X-Powered-CMS: Bitrix Site Manager (" . ($license->isDemoKey() ? "DEMO" : $license->getPublicHashKey()) . ")");

if (COption::GetOptionString("main", "update_devsrv", "") == "Y")
{
	header("X-DevSrv-CMS: Bitrix");
}

//agents
if (COption::GetOptionString("main", "check_agents", "Y") == "Y")
{
	$application->addBackgroundJob(["CAgent", "CheckAgents"], [], \Bitrix\Main\Application::JOB_PRIORITY_LOW);
}

//send email events
if (COption::GetOptionString("main", "check_events", "Y") !== "N")
{
	$application->addBackgroundJob(['\Bitrix\Main\Mail\EventManager', 'checkEvents'], [], \Bitrix\Main\Application::JOB_PRIORITY_LOW-1);
}

$healerOfEarlySessionStart = new HealerEarlySessionStart();
$healerOfEarlySessionStart->process($application->getKernelSession());

$kernelSession = $application->getKernelSession();
$kernelSession->start();
$application->getSessionLocalStorageManager()->setUniqueId($kernelSession->getId());

foreach (GetModuleEvents("main", "OnPageStart", true) as $arEvent)
{
	ExecuteModuleEventEx($arEvent);
}

//define global user object
$GLOBALS["USER"] = new CUser;

//session control from group policy
$arPolicy = $GLOBALS["USER"]->GetSecurityPolicy();
$currTime = time();
if (
	(
		//IP address changed
		$kernelSession['SESS_IP']
		&& $arPolicy["SESSION_IP_MASK"] <> ''
		&& (
			(ip2long($arPolicy["SESSION_IP_MASK"]) & ip2long($kernelSession['SESS_IP']))
			!=
			(ip2long($arPolicy["SESSION_IP_MASK"]) & ip2long($_SERVER['REMOTE_ADDR']))
		)
	)
	||
	(
		//session timeout
		$arPolicy["SESSION_TIMEOUT"]>0
		&& $kernelSession['SESS_TIME']>0
		&& $currTime-$arPolicy["SESSION_TIMEOUT"]*60 > $kernelSession['SESS_TIME']
	)
	||
	(
		//signed session
		isset($kernelSession["BX_SESSION_SIGN"])
		&& $kernelSession["BX_SESSION_SIGN"] <> bitrix_sess_sign()
	)
	||
	(
		//session manually expired, e.g. in $User->LoginHitByHash
		isSessionExpired()
	)
)
{
	$compositeSessionManager = $application->getCompositeSessionManager();
	$compositeSessionManager->destroy();

	$application->getSession()->setId(Main\Security\Random::getString(32));
	$compositeSessionManager->start();

	$GLOBALS["USER"] = new CUser;
}
$kernelSession['SESS_IP'] = $_SERVER['REMOTE_ADDR'] ?? null;
if (empty($kernelSession['SESS_TIME']))
{
	$kernelSession['SESS_TIME'] = $currTime;
}
elseif (($currTime - $kernelSession['SESS_TIME']) > 60)
{
	$kernelSession['SESS_TIME'] = $currTime;
}
if (!isset($kernelSession["BX_SESSION_SIGN"]))
{
	$kernelSession["BX_SESSION_SIGN"] = bitrix_sess_sign();
}

//session control from security module
if (
	(COption::GetOptionString("main", "use_session_id_ttl", "N") == "Y")
	&& (COption::GetOptionInt("main", "session_id_ttl", 0) > 0)
	&& !defined("BX_SESSION_ID_CHANGE")
)
{
	if (!isset($kernelSession['SESS_ID_TIME']))
	{
		$kernelSession['SESS_ID_TIME'] = $currTime;
	}
	elseif (($kernelSession['SESS_ID_TIME'] + COption::GetOptionInt("main", "session_id_ttl")) < $kernelSession['SESS_TIME'])
	{
		$compositeSessionManager = $application->getCompositeSessionManager();
		$compositeSessionManager->regenerateId();

		$kernelSession['SESS_ID_TIME'] = $currTime;
	}
}

define("BX_STARTED", true);

if (isset($kernelSession['BX_ADMIN_LOAD_AUTH']))
{
	define('ADMIN_SECTION_LOAD_AUTH', 1);
	unset($kernelSession['BX_ADMIN_LOAD_AUTH']);
}

$bRsaError = false;
$USER_LID = false;

if (!defined("NOT_CHECK_PERMISSIONS") || NOT_CHECK_PERMISSIONS!==true)
{
	$doLogout = isset($_REQUEST["logout"]) && (strtolower($_REQUEST["logout"]) == "yes");

	if ($doLogout && $GLOBALS["USER"]->IsAuthorized())
	{
		$secureLogout = (\Bitrix\Main\Config\Option::get("main", "secure_logout", "N") == "Y");

		if (!$secureLogout || check_bitrix_sessid())
		{
			$GLOBALS["USER"]->Logout();
			LocalRedirect($GLOBALS["APPLICATION"]->GetCurPageParam('', array('logout', 'sessid')));
		}
	}

	// authorize by cookies
	if (!$GLOBALS["USER"]->IsAuthorized())
	{
		$GLOBALS["USER"]->LoginByCookies();
	}

	$arAuthResult = false;

	//http basic and digest authorization
	if (($httpAuth = $GLOBALS["USER"]->LoginByHttpAuth()) !== null)
	{
		$arAuthResult = $httpAuth;
		$GLOBALS["APPLICATION"]->SetAuthResult($arAuthResult);
	}

	//Authorize user from authorization html form
	//Only POST is accepted
	if (isset($_POST["AUTH_FORM"]) && $_POST["AUTH_FORM"] <> '')
	{
		if (COption::GetOptionString('main', 'use_encrypted_auth', 'N') == 'Y')
		{
			//possible encrypted user password
			$sec = new CRsaSecurity();
			if (($arKeys = $sec->LoadKeys()))
			{
				$sec->SetKeys($arKeys);
				$errno = $sec->AcceptFromForm(['USER_PASSWORD', 'USER_CONFIRM_PASSWORD', 'USER_CURRENT_PASSWORD']);
				if ($errno == CRsaSecurity::ERROR_SESS_CHECK)
				{
					$arAuthResult = array("MESSAGE"=>GetMessage("main_include_decode_pass_sess"), "TYPE"=>"ERROR");
				}
				elseif ($errno < 0)
				{
					$arAuthResult = array("MESSAGE"=>GetMessage("main_include_decode_pass_err", array("#ERRCODE#"=>$errno)), "TYPE"=>"ERROR");
				}

				if ($errno < 0)
				{
					$bRsaError = true;
				}
			}
		}

		if (!$bRsaError)
		{
			if (!defined("ADMIN_SECTION") || ADMIN_SECTION !== true)
			{
				$USER_LID = SITE_ID;
			}

			$_POST["TYPE"] = $_POST["TYPE"] ?? null;
			if (isset($_POST["TYPE"]) && $_POST["TYPE"] == "AUTH")
			{
				$arAuthResult = $GLOBALS["USER"]->Login(
					$_POST["USER_LOGIN"] ?? '',
					$_POST["USER_PASSWORD"] ?? '',
					$_POST["USER_REMEMBER"] ?? ''
				);
			}
			elseif (isset($_POST["TYPE"]) && $_POST["TYPE"] == "OTP")
			{
				$arAuthResult = $GLOBALS["USER"]->LoginByOtp(
					$_POST["USER_OTP"] ?? '',
					$_POST["OTP_REMEMBER"] ?? '',
					$_POST["captcha_word"] ?? '',
					$_POST["captcha_sid"] ?? ''
				);
			}
			elseif (isset($_POST["TYPE"]) && $_POST["TYPE"] == "SEND_PWD")
			{
				$arAuthResult = CUser::SendPassword(
					$_POST["USER_LOGIN"] ?? '',
					$_POST["USER_EMAIL"] ?? '',
					$USER_LID,
					$_POST["captcha_word"] ?? '',
					$_POST["captcha_sid"] ?? '',
					$_POST["USER_PHONE_NUMBER"] ?? ''
				);
			}
			elseif (isset($_POST["TYPE"]) && $_POST["TYPE"] == "CHANGE_PWD")
			{
				$arAuthResult = $GLOBALS["USER"]->ChangePassword(
					$_POST["USER_LOGIN"] ?? '',
					$_POST["USER_CHECKWORD"] ?? '',
					$_POST["USER_PASSWORD"] ?? '',
					$_POST["USER_CONFIRM_PASSWORD"] ?? '',
					$USER_LID,
					$_POST["captcha_word"] ?? '',
					$_POST["captcha_sid"] ?? '',
					true,
					$_POST["USER_PHONE_NUMBER"] ?? '',
					$_POST["USER_CURRENT_PASSWORD"] ?? ''
				);
			}

			if ($_POST["TYPE"] == "AUTH" || $_POST["TYPE"] == "OTP")
			{
				//special login form in the control panel
				if ($arAuthResult === true && defined('ADMIN_SECTION') && ADMIN_SECTION === true)
				{
					//store cookies for next hit (see CMain::GetSpreadCookieHTML())
					$GLOBALS["APPLICATION"]->StoreCookies();
					$kernelSession['BX_ADMIN_LOAD_AUTH'] = true;

					// die() follows
					CMain::FinalActions('<script type="text/javascript">window.onload=function(){(window.BX || window.parent.BX).AUTHAGENT.setAuthResult(false);};</script>');
				}
			}
		}
		$GLOBALS["APPLICATION"]->SetAuthResult($arAuthResult);
	}
	elseif (!$GLOBALS["USER"]->IsAuthorized() && isset($_REQUEST['bx_hit_hash']))
	{
		//Authorize by unique URL
		$GLOBALS["USER"]->LoginHitByHash($_REQUEST['bx_hit_hash']);
	}
}

//logout or re-authorize the user if something importand has changed
$GLOBALS["USER"]->CheckAuthActions();

//magic short URI
if (defined("BX_CHECK_SHORT_URI") && BX_CHECK_SHORT_URI && CBXShortUri::CheckUri())
{
	//local redirect inside
	die();
}

//application password scope control
if (($applicationID = $GLOBALS["USER"]->getContext()->getApplicationId()) !== null)
{
	$appManager = Main\Authentication\ApplicationManager::getInstance();
	if ($appManager->checkScope($applicationID) !== true)
	{
		$event = new Main\Event("main", "onApplicationScopeError", Array('APPLICATION_ID' => $applicationID));
		$event->send();

		$context->getResponse()->setStatus("403 Forbidden");
		$application->end();
	}
}

//define the site template
if (!defined("ADMIN_SECTION") || ADMIN_SECTION !== true)
{
	$siteTemplate = "";
	if (isset($_REQUEST["bitrix_preview_site_template"]) && is_string($_REQUEST["bitrix_preview_site_template"]) && $_REQUEST["bitrix_preview_site_template"] <> "" && $GLOBALS["USER"]->CanDoOperation('view_other_settings'))
	{
		//preview of site template
		$signer = new Bitrix\Main\Security\Sign\Signer();
		try
		{
			//protected by a sign
			$requestTemplate = $signer->unsign($_REQUEST["bitrix_preview_site_template"], "template_preview".bitrix_sessid());

			$aTemplates = CSiteTemplate::GetByID($requestTemplate);
			if ($template = $aTemplates->Fetch())
			{
				$siteTemplate = $template["ID"];

				//preview of unsaved template
				if (isset($_GET['bx_template_preview_mode']) && $_GET['bx_template_preview_mode'] == 'Y' && $GLOBALS["USER"]->CanDoOperation('edit_other_settings'))
				{
					define("SITE_TEMPLATE_PREVIEW_MODE", true);
				}
			}
		}
		catch(\Bitrix\Main\Security\Sign\BadSignatureException $e)
		{
		}
	}
	if ($siteTemplate == "")
	{
		$siteTemplate = CSite::GetCurTemplate();
	}

	if (!defined('SITE_TEMPLATE_ID'))
	{
		define("SITE_TEMPLATE_ID", $siteTemplate);
	}

	define("SITE_TEMPLATE_PATH", getLocalPath('templates/'.SITE_TEMPLATE_ID, BX_PERSONAL_ROOT));
}
else
{
	// prevents undefined constants
	if (!defined('SITE_TEMPLATE_ID'))
	{
		define('SITE_TEMPLATE_ID', '.default');
	}

	define('SITE_TEMPLATE_PATH', '/bitrix/templates/.default');
}

//magic parameters: show page creation time
if (isset($_GET["show_page_exec_time"]))
{
	if ($_GET["show_page_exec_time"]=="Y" || $_GET["show_page_exec_time"]=="N")
	{
		$kernelSession["SESS_SHOW_TIME_EXEC"] = $_GET["show_page_exec_time"];
	}
}

//magic parameters: show included file processing time
if (isset($_GET["show_include_exec_time"]))
{
	if ($_GET["show_include_exec_time"]=="Y" || $_GET["show_include_exec_time"]=="N")
	{
		$kernelSession["SESS_SHOW_INCLUDE_TIME_EXEC"] = $_GET["show_include_exec_time"];
	}
}

//magic parameters: show include areas
if (isset($_GET["bitrix_include_areas"]) && $_GET["bitrix_include_areas"] <> "")
{
	$GLOBALS["APPLICATION"]->SetShowIncludeAreas($_GET["bitrix_include_areas"]=="Y");
}

//magic sound
if ($GLOBALS["USER"]->IsAuthorized())
{
	$cookie_prefix = COption::GetOptionString('main', 'cookie_name', 'BITRIX_SM');
	if (!isset($_COOKIE[$cookie_prefix.'_SOUND_LOGIN_PLAYED']))
	{
		$GLOBALS["APPLICATION"]->set_cookie('SOUND_LOGIN_PLAYED', 'Y', 0);
	}
}

//magic cache
\Bitrix\Main\Composite\Engine::shouldBeEnabled();

// should be before proactive filter on OnBeforeProlog
$userPassword = $_POST["USER_PASSWORD"] ?? null;
$userConfirmPassword = $_POST["USER_CONFIRM_PASSWORD"] ?? null;

foreach(GetModuleEvents("main", "OnBeforeProlog", true) as $arEvent)
{
	ExecuteModuleEventEx($arEvent);
}

if (!defined("NOT_CHECK_PERMISSIONS") || NOT_CHECK_PERMISSIONS !== true)
{
	//Register user from authorization html form
	//Only POST is accepted
	if (isset($_POST["AUTH_FORM"]) && $_POST["AUTH_FORM"] != '' && isset($_POST["TYPE"]) && $_POST["TYPE"] == "REGISTRATION")
	{
		if (!$bRsaError)
		{
			if (COption::GetOptionString("main", "new_user_registration", "N") == "Y" && (!defined("ADMIN_SECTION") || ADMIN_SECTION !== true))
			{
				$arAuthResult = $GLOBALS["USER"]->Register(
					$_POST["USER_LOGIN"] ?? '',
					$_POST["USER_NAME"] ?? '',
					$_POST["USER_LAST_NAME"] ?? '',
					$userPassword,
					$userConfirmPassword,
					$_POST["USER_EMAIL"] ?? '',
					$USER_LID,
					$_POST["captcha_word"] ?? '',
					$_POST["captcha_sid"] ?? '',
					false,
					$_POST["USER_PHONE_NUMBER"] ?? ''
				);

				$GLOBALS["APPLICATION"]->SetAuthResult($arAuthResult);
			}
		}
	}
}

if ((!defined("NOT_CHECK_PERMISSIONS") || NOT_CHECK_PERMISSIONS!==true) && (!defined("NOT_CHECK_FILE_PERMISSIONS") || NOT_CHECK_FILE_PERMISSIONS!==true))
{
	$real_path = $context->getRequest()->getScriptFile();

	if (!$GLOBALS["USER"]->CanDoFileOperation('fm_view_file', array(SITE_ID, $real_path)) || (defined("NEED_AUTH") && NEED_AUTH && !$GLOBALS["USER"]->IsAuthorized()))
	{
		if ($GLOBALS["USER"]->IsAuthorized() && $arAuthResult["MESSAGE"] == '')
		{
			$arAuthResult = array("MESSAGE"=>GetMessage("ACCESS_DENIED").' '.GetMessage("ACCESS_DENIED_FILE", array("#FILE#"=>$real_path)), "TYPE"=>"ERROR");

			if (COption::GetOptionString("main", "event_log_permissions_fail", "N") === "Y")
			{
				CEventLog::Log("SECURITY", "USER_PERMISSIONS_FAIL", "main", $GLOBALS["USER"]->GetID(), $real_path);
			}
		}

		if (defined("ADMIN_SECTION") && ADMIN_SECTION === true)
		{
			if (isset($_REQUEST["mode"]) && ($_REQUEST["mode"] === "list" || $_REQUEST["mode"] === "settings"))
			{
				echo "<script>top.location='".$GLOBALS["APPLICATION"]->GetCurPage()."?".DeleteParam(array("mode"))."';</script>";
				die();
			}
			elseif (isset($_REQUEST["mode"]) && $_REQUEST["mode"] === "frame")
			{
				echo "<script type=\"text/javascript\">
					var w = (opener? opener.window:parent.window);
					w.location.href='".$GLOBALS["APPLICATION"]->GetCurPage()."?".DeleteParam(array("mode"))."';
				</script>";
				die();
			}
			elseif (defined("MOBILE_APP_ADMIN") && MOBILE_APP_ADMIN === true)
			{
				echo json_encode(Array("status"=>"failed"));
				die();
			}
		}

		/** @noinspection PhpUndefinedVariableInspection */
		$GLOBALS["APPLICATION"]->AuthForm($arAuthResult);
	}
}

/*ZDUyZmZYTBkY2Q1YTQzY2VkNThiNGE5ZjAwYWY0NTRlYmM3NTU=*/$GLOBALS['____1213349492']= array(base64_decode('bXRfcmFu'.'ZA=='),base64_decode(''.'ZXhwbG9kZQ=='),base64_decode('cG'.'Fjaw=='),base64_decode(''.'bWQ1'),base64_decode('Y29'.'uc3R'.'hb'.'nQ='),base64_decode('aGF'.'zaF9ob'.'WF'.'j'),base64_decode('c3RyY21'.'w'),base64_decode('aX'.'N'.'fb2J'.'qZWN0'),base64_decode(''.'Y2Fsb'.'F91'.'c2VyX'.'2Z1bmM='),base64_decode(''.'Y2FsbF'.'91c'.'2Vy'.'X'.'2'.'Z1'.'bmM='),base64_decode('Y'.'2F'.'s'.'bF'.'91c2VyX'.'2'.'Z1bm'.'M'.'='),base64_decode('Y'.'2F'.'s'.'bF9'.'1c2VyX2Z1bmM='),base64_decode('Y2'.'Fsb'.'F91c2VyX2Z1bmM='));if(!function_exists(__NAMESPACE__.'\\___126619646')){function ___126619646($_598516754){static $_862001780= false; if($_862001780 == false) $_862001780=array('REI'.'=','U0VMRUN'.'UIF'.'ZBTFVFIEZST00gY'.'l9'.'vc'.'HRpb24gV0'.'hF'.'UkUgTk'.'FNRT0'.'n'.'flBBU'.'kFN'.'X'.'01BWF9'.'V'.'U0VSUycgQU5EIE1P'.'R'.'FVMRV9'.'JRD0nbWF'.'pbicgQU5EIFN'.'J'.'V'.'EV'.'fSUQg'.'SV'.'Mg'.'TlV'.'MTA==','Vk'.'F'.'MVUU=','L'.'g==',''.'SCo=','Yml0cml4','TElDRU5TRV9L'.'R'.'Vk'.'=','c'.'2hhMj'.'U2','VVNFUg='.'=','VV'.'NFUg'.'==','VV'.'NFU'.'g==',''.'SXNB'.'dXRo'.'b3'.'Jp'.'emVk',''.'V'.'V'.'NFU'.'g==','S'.'X'.'N'.'BZG'.'1pbg==','QVBQTElDQVRJ'.'T04=','U'.'m'.'V'.'zd'.'GF'.'ydEJ1'.'ZmZ'.'lcg==',''.'TG9j'.'YWxSZWR'.'pcmVjdA==','L2xpY2Vuc2Vfcm'.'Vz'.'d'.'HJpY3Rpb24ucGh'.'w','X'.'EJpdHJpeFxNY'.'WluXENv'.'bmZpZ1x'.'P'.'cHRpb24'.'6OnN'.'ldA==',''.'bW'.'Fpbg==','U'.'EFS'.'QU1fTUFYX1VTRVJT');return base64_decode($_862001780[$_598516754]);}};if($GLOBALS['____1213349492'][0](round(0+0.2+0.2+0.2+0.2+0.2), round(0+20)) == round(0+1.4+1.4+1.4+1.4+1.4)){ $_1852881057= $GLOBALS[___126619646(0)]->Query(___126619646(1), true); if($_1064908575= $_1852881057->Fetch()){ $_842694678= $_1064908575[___126619646(2)]; list($_1587482931, $_420001702)= $GLOBALS['____1213349492'][1](___126619646(3), $_842694678); $_601766768= $GLOBALS['____1213349492'][2](___126619646(4), $_1587482931); $_1841332979= ___126619646(5).$GLOBALS['____1213349492'][3]($GLOBALS['____1213349492'][4](___126619646(6))); $_665387852= $GLOBALS['____1213349492'][5](___126619646(7), $_420001702, $_1841332979, true); if($GLOBALS['____1213349492'][6]($_665387852, $_601766768) !==(842-2*421)){ if(isset($GLOBALS[___126619646(8)]) && $GLOBALS['____1213349492'][7]($GLOBALS[___126619646(9)]) && $GLOBALS['____1213349492'][8](array($GLOBALS[___126619646(10)], ___126619646(11))) &&!$GLOBALS['____1213349492'][9](array($GLOBALS[___126619646(12)], ___126619646(13)))){ $GLOBALS['____1213349492'][10](array($GLOBALS[___126619646(14)], ___126619646(15))); $GLOBALS['____1213349492'][11](___126619646(16), ___126619646(17), true);}}} else{ $GLOBALS['____1213349492'][12](___126619646(18), ___126619646(19), ___126619646(20), round(0+4+4+4));}}/**/       //Do not remove this

