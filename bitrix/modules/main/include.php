<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2023 Bitrix
 */

use Bitrix\Main;
use Bitrix\Main\Session\Legacy\HealerEarlySessionStart;

require_once(__DIR__."/bx_root.php");
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

define('BX_AJAX_PARAM_ID', 'bxajaxid');

/*ZDUyZmZNDAzMzg5MmFlNzdjZDhiMTdiOGZjZjRjMTU5NmU3OTQ=*/$GLOBALS['_____1610291391']= array(base64_decode('R'.'2'.'V0'.'TW9'.'kd'.'WxlRXZlb'.'nR'.'z'),base64_decode('RXhlY'.'3V0ZU1vZH'.'V'.'sZ'.'UV2Z'.'W50'.'RXg'.'='));$GLOBALS['____1269845704']= array(base64_decode('ZGV'.'ma'.'W5l'),base64_decode(''.'YmFzZT'.'Y0X2R'.'lY29'.'kZQ'.'='.'='),base64_decode('dW'.'5'.'zZXJpYW'.'xp'.'emU='),base64_decode('aXNfYXJ'.'yYXk='),base64_decode('aW'.'5'.'f'.'YXJ'.'yY'.'Xk='),base64_decode('c2Vya'.'W'.'FsaXpl'),base64_decode(''.'YmFzZ'.'TY'.'0X2VuY29kZ'.'Q=='),base64_decode('bWt0'.'aW1l'),base64_decode('Z'.'GF'.'0ZQ=='),base64_decode('ZGF0ZQ=='),base64_decode(''.'c'.'3Ry'.'bGVu'),base64_decode('bW'.'t0'.'aW1l'),base64_decode('ZGF0'.'ZQ'.'='.'='),base64_decode('ZGF0ZQ=='),base64_decode('bWV'.'0aG9k'.'X2'.'V'.'4aX'.'N0'.'c'.'w'.'=='),base64_decode('Y2'.'F'.'sbF'.'91c'.'2'.'VyX2Z1bmNfYX'.'JyYXk'.'='),base64_decode('c3R'.'ybGVu'),base64_decode('c'.'2'.'Vya'.'WFsaXpl'),base64_decode(''.'Ym'.'FzZT'.'Y0X2'.'VuY29'.'kZ'.'Q=='),base64_decode('c3'.'Ryb'.'GVu'),base64_decode('aXNfYX'.'JyYXk='),base64_decode('c2V'.'yaWFs'.'aXpl'),base64_decode('YmF'.'zZT'.'Y0X2V'.'uY29kZQ=='),base64_decode('c2'.'VyaW'.'FsaXpl'),base64_decode(''.'YmFzZTY'.'0X2V'.'uY29kZQ=='),base64_decode('aXNfYXJ'.'yYXk='),base64_decode('aXN'.'fYX'.'JyY'.'Xk='),base64_decode(''.'aW'.'5fY'.'XJyYXk='),base64_decode('aW5'.'fYXJ'.'y'.'YXk='),base64_decode('bWt0a'.'W1l'),base64_decode('ZGF0ZQ=='),base64_decode(''.'ZGF0ZQ=='),base64_decode(''.'Z'.'GF0ZQ=='),base64_decode(''.'bWt0'.'aW'.'1l'),base64_decode('ZGF0'.'ZQ=='),base64_decode(''.'ZG'.'F0Z'.'Q'.'=='),base64_decode(''.'a'.'W5fYXJy'.'Y'.'X'.'k='),base64_decode(''.'c2V'.'yaW'.'F'.'sa'.'Xpl'),base64_decode(''.'YmFz'.'ZTY0X2V'.'uY29kZQ='.'='),base64_decode('aW'.'50dm'.'Fs'),base64_decode('dG'.'l'.'tZQ=='),base64_decode('Z'.'mlsZV9leGlzdHM='),base64_decode('c3R'.'y'.'X3'.'JlcGxhY2U='),base64_decode(''.'Y'.'2x'.'h'.'c'.'3NfZXhpc3Rz'),base64_decode(''.'Z'.'GVmaW5'.'l'));if(!function_exists(__NAMESPACE__.'\\___222891499')){function ___222891499($_919848542){static $_1512962646= false; if($_1512962646 == false) $_1512962646=array('SU5'.'UU'.'kFORV'.'Rf'.'RURJVEl'.'PTg==','WQ='.'=','bWF'.'p'.'bg'.'==','f'.'m'.'Nw'.'Zl9tYXBf'.'dmFsdWU=','','','YWx'.'sb3dlZ'.'F9'.'j'.'b'.'GFzc'.'2Vz','ZQ==',''.'Z'.'g='.'=','ZQ'.'='.'=','Rg==','W'.'A==','Zg==',''.'bWFpbg==','fmN'.'w'.'Z'.'l9tY'.'XBf'.'dm'.'Fs'.'dWU=','UG9y'.'dG'.'Fs','Rg==','ZQ='.'=','Z'.'Q'.'==','WA'.'==','R'.'g='.'=','RA==',''.'RA==','b'.'Q'.'==','Z'.'A==','W'.'Q==','Zg==','Zg'.'==','Z'.'g==',''.'Zg='.'=','UG9yd'.'GF'.'s','Rg==','ZQ==','ZQ==','W'.'A==','Rg==','R'.'A==','RA'.'==','bQ==','Z'.'A'.'==',''.'WQ'.'==','bWFpbg='.'=','T24=','U2'.'V0dGl'.'uZ3ND'.'aGF'.'uZ'.'2U=',''.'Zg'.'==','Zg='.'=','Zg==','Zg==','bW'.'Fp'.'b'.'g'.'==','f'.'mN'.'wZl9tYXBf'.'dmFsdWU=','ZQ'.'==',''.'ZQ='.'=','RA==',''.'ZQ==','ZQ'.'='.'=','Zg'.'==','Z'.'g==','Zg==',''.'ZQ==','bWFpbg'.'==','fm'.'NwZ'.'l9tY'.'XBfdmF'.'sdW'.'U'.'=','ZQ='.'=','Zg==','Zg='.'=','Zg==',''.'Zg==',''.'bWFpbg==','fmNw'.'Zl9tYXBfd'.'mFsdWU=','ZQ='.'=','Zg==','UG9ydG'.'Fs',''.'UG9y'.'dG'.'Fs','ZQ==','ZQ==',''.'UG9ydG'.'Fs','Rg==','W'.'A==','R'.'g==','RA='.'=','ZQ='.'=',''.'ZQ==','RA==','bQ==','Z'.'A='.'=','WQ==','ZQ'.'='.'=',''.'WA'.'==','ZQ==','Rg==','ZQ='.'=','RA==','Zg'.'==','Z'.'Q'.'==','R'.'A==','ZQ==',''.'bQ'.'='.'=','ZA==','W'.'Q==','Zg==','Z'.'g==','Zg='.'=',''.'Zg==','Zg'.'==','Z'.'g==',''.'Zg==','Zg==','bWFpbg==','f'.'mNw'.'Zl9tY'.'X'.'BfdmFsdWU=','Z'.'Q==','ZQ==','U'.'G9ydG'.'Fs',''.'Rg='.'=','WA==','VFlQRQ==',''.'REFUR'.'Q'.'='.'=','RkVBVFV'.'SRVM'.'=','RVhQS'.'VJFRA'.'==','VFlQR'.'Q==','RA'.'==','VFJZX'.'0R'.'BWV'.'NfQ09V'.'TlQ=','REFURQ==','VFJZX0RBWVNfQ09V'.'TlQ'.'=','RVhQSVJFRA==','RkVBV'.'FVSRVM=','Zg==','Zg==','RE9D'.'VU1FTlRfUk9PVA==','L2JpdHJpe'.'C9t'.'b'.'2R1bGV'.'z'.'Lw==','L2'.'luc3Rh'.'bGwva'.'W5k'.'ZX'.'guc'.'Ghw','Lg='.'=',''.'X'.'w'.'==','c'.'2Vh'.'cmN'.'o',''.'Tg==','','','QUNUS'.'V'.'ZF','W'.'Q'.'='.'=','c29jaWFsbmV'.'0d29y'.'aw='.'=','YWxsb3dfZn'.'Jp'.'ZWxkcw==','WQ==',''.'SUQ=',''.'c2'.'9'.'jaW'.'FsbmV0d'.'29yaw'.'='.'=','YWxsb3'.'d'.'fZnJ'.'pZ'.'Wxkcw==',''.'SUQ=','c29jaWFs'.'bm'.'V0d'.'2'.'9ya'.'w==','YWxsb3d'.'fZnJpZ'.'W'.'xkc'.'w'.'==','Tg==','','','QUNUSVZF','WQ'.'==',''.'c2'.'9'.'j'.'aWFsbmV0d2'.'9yaw==','YWxsb3d'.'fbWljcm9ibG9'.'n'.'X3'.'VzZXI=','W'.'Q==',''.'SUQ=','c29jaWFsbmV0d29y'.'aw'.'==','YWx'.'sb3dfbWljcm9ibG9nX3VzZX'.'I=','SUQ'.'=','c2'.'9j'.'a'.'WF'.'sbmV0d29yaw==','YWxsb3d'.'fbWlj'.'cm9ibG'.'9nX3VzZXI=',''.'c'.'29jaWFsb'.'mV0d29ya'.'w==','Y'.'Wx'.'sb3d'.'fbWljcm9ibG9n'.'X2dyb'.'3V'.'w','WQ'.'==','SU'.'Q'.'=','c29j'.'aWFsbmV0d29yaw'.'==','YWx'.'sb'.'3dfbWlj'.'cm9'.'ibG9'.'n'.'X2dyb3Vw',''.'SUQ=','c'.'29j'.'a'.'WFsbmV0d29yaw='.'=','YW'.'xs'.'b3dfbW'.'lj'.'c'.'m9ibG9'.'nX2dyb'.'3Vw','T'.'g==','','',''.'QUNU'.'SVZF','WQ==','c2'.'9jaWFsbmV0'.'d'.'29yaw==',''.'YWxsb3dfZmlsZXNfd'.'XNlcg==','W'.'Q==','SUQ=','c29ja'.'WF'.'sbm'.'V0'.'d29y'.'aw==',''.'YWx'.'sb3dfZmlsZXNfdXNlcg='.'=','S'.'UQ'.'=','c29ja'.'WFsbmV0d29'.'yaw==',''.'Y'.'Wxsb'.'3df'.'Zml'.'sZXNfdXN'.'lcg==','Tg'.'==','','','QUNUS'.'VZF','WQ='.'=','c29jaW'.'F'.'sbm'.'V0d29yaw==','YWxsb'.'3d'.'fYmxvZ'.'191c2'.'Vy','WQ'.'==','SUQ=','c'.'29ja'.'WFsbmV0d'.'29'.'y'.'a'.'w==','YW'.'xsb3dfYmxvZ191c2V'.'y','SUQ=','c2'.'9jaWFsb'.'mV'.'0d29'.'yaw'.'==','Y'.'Wx'.'sb'.'3'.'dfYm'.'x'.'vZ191'.'c'.'2Vy',''.'Tg'.'==','','',''.'QUNUS'.'V'.'ZF','WQ==','c29ja'.'WFsbmV0d29ya'.'w==','YW'.'xs'.'b3dfcGhvd'.'G'.'9fdXNlcg==','W'.'Q==','S'.'UQ=','c29jaWFs'.'bmV0d29y'.'aw==','YW'.'xsb3dfc'.'Ghvd'.'G'.'9fdXNl'.'cg==','SU'.'Q=','c'.'29ja'.'WFsbmV0d29yaw==','YWxsb'.'3'.'d'.'fc'.'Ghv'.'dG9f'.'d'.'XNlcg==','Tg==','','','Q'.'UNUSVZF',''.'W'.'Q==','c2'.'9jaWF'.'sbm'.'V0d2'.'9yaw==','Y'.'Wxsb'.'3d'.'f'.'Zm9'.'y'.'d'.'W'.'1'.'fdXNlcg='.'=','WQ==',''.'S'.'U'.'Q=','c'.'29jaWFsbmV0d29ya'.'w==','YWxsb'.'3dfZm9y'.'dW'.'1fd'.'X'.'Nlc'.'g==','SUQ=',''.'c2'.'9'.'j'.'aWFsbmV'.'0d29'.'yaw==',''.'YWxsb3'.'dfZm9ydW'.'1fdXNlc'.'g==','Tg'.'==','','','QUNUS'.'VZF','WQ==','c'.'29jaWFsbmV0d'.'2'.'9ya'.'w==','YWxsb3df'.'d'.'GFza3Nf'.'dXNlcg'.'='.'=','WQ==','SUQ=','c2'.'9'.'ja'.'W'.'Fsb'.'mV0'.'d2'.'9'.'y'.'aw==','YWxsb3d'.'fdGFza3Nf'.'dXNlcg==','SUQ=','c29jaW'.'Fsb'.'mV'.'0d29yaw==','YWxsb'.'3d'.'fd'.'GFza'.'3N'.'f'.'d'.'XNl'.'cg==','c'.'29ja'.'WFsbmV0d29'.'yaw==','Y'.'W'.'xsb3d'.'fdGFz'.'a3NfZ3JvdX'.'A=','W'.'Q==','SUQ'.'=','c29jaW'.'FsbmV0'.'d29ya'.'w==','YWxsb3dfdGFz'.'a3N'.'fZ'.'3'.'Jvd'.'X'.'A=','SUQ=','c29'.'jaW'.'Fsbm'.'V0d29yaw'.'==','Y'.'Wxsb3dfd'.'GFz'.'a'.'3'.'NfZ3J'.'v'.'dXA'.'=','dGFza3M=','Tg==','','','QU'.'N'.'USVZF',''.'WQ==','c'.'29jaWFsbmV0d2'.'9yaw='.'=','YWxs'.'b3dfY2FsZW5kYX'.'JfdXNl'.'cg'.'==','WQ==','S'.'UQ=',''.'c29j'.'aWFs'.'bmV0'.'d29yaw==','YWxsb3df'.'Y2FsZ'.'W5kY'.'XJfd'.'XNlcg==','SUQ=','c29'.'jaW'.'FsbmV0d29yaw==','YWxsb3dfY2F'.'s'.'ZW5kYXJfdXNlcg'.'==','c29jaWF'.'sbmV0d2'.'9ya'.'w==','YWxsb3dfY2FsZW5kYXJfZ3J'.'vdXA=','WQ==','SUQ=','c29'.'jaWFsbm'.'V0'.'d2'.'9ya'.'w==','YWxsb3'.'dfY2F'.'sZW5k'.'YXJfZ3Jv'.'d'.'XA=',''.'S'.'UQ=','c'.'2'.'9jaWF'.'sbmV0d29ya'.'w==','YWxsb3dfY2Fs'.'ZW5kYXJf'.'Z3Jv'.'dXA=','QUNUSVZF','WQ==',''.'Tg==','ZXh0c'.'mFuZXQ=','aWJsb2'.'Nr','T2'.'5BZ'.'nR'.'lc'.'k'.'l'.'C'.'b'.'G'.'9'.'ja0VsZW1'.'lbnRVcGRhdGU=','aW'.'50cmFuZXQ=','Q'.'0'.'ludHJ'.'hbmV0R'.'XZlbn'.'RIYW5k'.'bGVy'.'cw==','U1BSZWd'.'p'.'c3Rl'.'clVwZ'.'GF'.'0ZWRJdGVt','Q0ludHJh'.'bmV0U'.'2h'.'hc'.'m'.'Vwb'.'2ludD'.'o6'.'QWd'.'lbnRMa'.'X'.'N'.'0c'.'y'.'gpOw==',''.'aW50cmFuZ'.'XQ'.'=',''.'Tg==','Q0'.'ludHJhb'.'mV0U2'.'hhcmVwb2lud'.'Do6'.'QWdl'.'b'.'nRRd'.'W'.'V1ZSg'.'pOw==','aW50cmFu'.'ZXQ'.'=','Tg='.'=','Q0ludHJhbmV'.'0U2hhcmV'.'wb'.'2ludDo6QWdlb'.'nRVc'.'GRhdG'.'Uo'.'K'.'T'.'s=',''.'aW50cmFuZXQ=','T'.'g='.'=','aW'.'Jsb2N'.'r','T'.'25B'.'ZnR'.'lcklCbG9j'.'a0V'.'sZW'.'1lbn'.'R'.'B'.'ZGQ=',''.'aW50cmFuZXQ=','Q0l'.'u'.'d'.'HJhbmV0RX'.'ZlbnRIYW5kb'.'G'.'V'.'ycw'.'==','U1BSZWdpc3'.'Rl'.'clVwZ'.'GF0ZWRJdGVt','aW'.'Jsb2Nr','T25BZnRlcklC'.'bG9ja0VsZ'.'W1'.'l'.'bnR'.'VcGRhdGU'.'=',''.'aW5'.'0cm'.'Fu'.'Z'.'XQ=','Q0lud'.'HJhbmV0RXZlbnRIYW5kbGVyc'.'w==','U1BSZWdp'.'c'.'3RlclV'.'w'.'ZG'.'F0Z'.'WR'.'JdG'.'Vt',''.'Q0lu'.'dHJh'.'bm'.'V'.'0U2hhcmVwb2ludDo6Q'.'Wdlbn'.'RMaXN0'.'cygpOw==','aW5'.'0'.'cmFuZX'.'Q=','Q0ludHJhb'.'mV0U'.'2hhcmVwb2lud'.'Do'.'6'.'Q'.'Wdl'.'bnR'.'RdWV1ZS'.'gpOw==','aW'.'5'.'0cmFuZXQ'.'=',''.'Q0lu'.'dHJhbmV0U2h'.'h'.'cmVwb2lu'.'dDo6QW'.'dlb'.'nRVc'.'GRhd'.'GUoKTs=','aW50c'.'m'.'Fu'.'ZXQ=','Y3Jt',''.'b'.'W'.'F'.'pb'.'g='.'=','T25CZWZvcmVQcm9sb2c=','bWFpbg==','Q1'.'dp'.'emF'.'y'.'ZF'.'N'.'v'.'bFBhb'.'mV'.'sSW50cm'.'Fu'.'ZXQ=','U2h'.'vd1BhbmVs','L2'.'1vZHVsZXMvaW50c'.'mF'.'uZXQvcGF'.'uZWxfYnV0dG9uL'.'nB'.'ocA==','RU5DT'.'0RF','WQ='.'=');return base64_decode($_1512962646[$_919848542]);}};$GLOBALS['____1269845704'][0](___222891499(0), ___222891499(1));class CBXFeatures{ private static $_1014842508= 30; private static $_462911066= array( "Portal" => array( "CompanyCalendar", "CompanyPhoto", "CompanyVideo", "CompanyCareer", "StaffChanges", "StaffAbsence", "CommonDocuments", "MeetingRoomBookingSystem", "Wiki", "Learning", "Vote", "WebLink", "Subscribe", "Friends", "PersonalFiles", "PersonalBlog", "PersonalPhoto", "PersonalForum", "Blog", "Forum", "Gallery", "Board", "MicroBlog", "WebMessenger",), "Communications" => array( "Tasks", "Calendar", "Workgroups", "Jabber", "VideoConference", "Extranet", "SMTP", "Requests", "DAV", "intranet_sharepoint", "timeman", "Idea", "Meeting", "EventList", "Salary", "XDImport",), "Enterprise" => array( "BizProc", "Lists", "Support", "Analytics", "crm", "Controller", "LdapUnlimitedUsers",), "Holding" => array( "Cluster", "MultiSites",),); private static $_23999437= null; private static $_978544435= null; private static function __1784647303(){ if(self::$_23999437 === null){ self::$_23999437= array(); foreach(self::$_462911066 as $_305690943 => $_2067093750){ foreach($_2067093750 as $_1072836224) self::$_23999437[$_1072836224]= $_305690943;}} if(self::$_978544435 === null){ self::$_978544435= array(); $_2101796203= COption::GetOptionString(___222891499(2), ___222891499(3), ___222891499(4)); if($_2101796203 != ___222891499(5)){ $_2101796203= $GLOBALS['____1269845704'][1]($_2101796203); $_2101796203= $GLOBALS['____1269845704'][2]($_2101796203,[___222891499(6) => false]); if($GLOBALS['____1269845704'][3]($_2101796203)){ self::$_978544435= $_2101796203;}} if(empty(self::$_978544435)){ self::$_978544435= array(___222891499(7) => array(), ___222891499(8) => array());}}} public static function InitiateEditionsSettings($_755769025){ self::__1784647303(); $_322974927= array(); foreach(self::$_462911066 as $_305690943 => $_2067093750){ $_1729076941= $GLOBALS['____1269845704'][4]($_305690943, $_755769025); self::$_978544435[___222891499(9)][$_305690943]=($_1729076941? array(___222891499(10)): array(___222891499(11))); foreach($_2067093750 as $_1072836224){ self::$_978544435[___222891499(12)][$_1072836224]= $_1729076941; if(!$_1729076941) $_322974927[]= array($_1072836224, false);}} $_407993241= $GLOBALS['____1269845704'][5](self::$_978544435); $_407993241= $GLOBALS['____1269845704'][6]($_407993241); COption::SetOptionString(___222891499(13), ___222891499(14), $_407993241); foreach($_322974927 as $_1638849953) self::__165566142($_1638849953[(892-2*446)], $_1638849953[round(0+0.2+0.2+0.2+0.2+0.2)]);} public static function IsFeatureEnabled($_1072836224){ if($_1072836224 == '') return true; self::__1784647303(); if(!isset(self::$_23999437[$_1072836224])) return true; if(self::$_23999437[$_1072836224] == ___222891499(15)) $_1959508392= array(___222891499(16)); elseif(isset(self::$_978544435[___222891499(17)][self::$_23999437[$_1072836224]])) $_1959508392= self::$_978544435[___222891499(18)][self::$_23999437[$_1072836224]]; else $_1959508392= array(___222891499(19)); if($_1959508392[(128*2-256)] != ___222891499(20) && $_1959508392[(1096/2-548)] != ___222891499(21)){ return false;} elseif($_1959508392[min(6,0,2)] == ___222891499(22)){ if($_1959508392[round(0+0.5+0.5)]< $GLOBALS['____1269845704'][7]((184*2-368),(206*2-412),(886-2*443), Date(___222891499(23)), $GLOBALS['____1269845704'][8](___222891499(24))- self::$_1014842508, $GLOBALS['____1269845704'][9](___222891499(25)))){ if(!isset($_1959508392[round(0+0.5+0.5+0.5+0.5)]) ||!$_1959508392[round(0+0.4+0.4+0.4+0.4+0.4)]) self::__1924482149(self::$_23999437[$_1072836224]); return false;}} return!isset(self::$_978544435[___222891499(26)][$_1072836224]) || self::$_978544435[___222891499(27)][$_1072836224];} public static function IsFeatureInstalled($_1072836224){ if($GLOBALS['____1269845704'][10]($_1072836224) <= 0) return true; self::__1784647303(); return(isset(self::$_978544435[___222891499(28)][$_1072836224]) && self::$_978544435[___222891499(29)][$_1072836224]);} public static function IsFeatureEditable($_1072836224){ if($_1072836224 == '') return true; self::__1784647303(); if(!isset(self::$_23999437[$_1072836224])) return true; if(self::$_23999437[$_1072836224] == ___222891499(30)) $_1959508392= array(___222891499(31)); elseif(isset(self::$_978544435[___222891499(32)][self::$_23999437[$_1072836224]])) $_1959508392= self::$_978544435[___222891499(33)][self::$_23999437[$_1072836224]]; else $_1959508392= array(___222891499(34)); if($_1959508392[(1456/2-728)] != ___222891499(35) && $_1959508392[min(32,0,10.666666666667)] != ___222891499(36)){ return false;} elseif($_1959508392[(1396/2-698)] == ___222891499(37)){ if($_1959508392[round(0+0.2+0.2+0.2+0.2+0.2)]< $GLOBALS['____1269845704'][11]((192*2-384),(924-2*462),(890-2*445), Date(___222891499(38)), $GLOBALS['____1269845704'][12](___222891499(39))- self::$_1014842508, $GLOBALS['____1269845704'][13](___222891499(40)))){ if(!isset($_1959508392[round(0+0.66666666666667+0.66666666666667+0.66666666666667)]) ||!$_1959508392[round(0+2)]) self::__1924482149(self::$_23999437[$_1072836224]); return false;}} return true;} private static function __165566142($_1072836224, $_2143174001){ if($GLOBALS['____1269845704'][14]("CBXFeatures", "On".$_1072836224."SettingsChange")) $GLOBALS['____1269845704'][15](array("CBXFeatures", "On".$_1072836224."SettingsChange"), array($_1072836224, $_2143174001)); $_2074301584= $GLOBALS['_____1610291391'][0](___222891499(41), ___222891499(42).$_1072836224.___222891499(43)); while($_607846065= $_2074301584->Fetch()) $GLOBALS['_____1610291391'][1]($_607846065, array($_1072836224, $_2143174001));} public static function SetFeatureEnabled($_1072836224, $_2143174001= true, $_1170047377= true){ if($GLOBALS['____1269845704'][16]($_1072836224) <= 0) return; if(!self::IsFeatureEditable($_1072836224)) $_2143174001= false; $_2143174001= (bool)$_2143174001; self::__1784647303(); $_963979632=(!isset(self::$_978544435[___222891499(44)][$_1072836224]) && $_2143174001 || isset(self::$_978544435[___222891499(45)][$_1072836224]) && $_2143174001 != self::$_978544435[___222891499(46)][$_1072836224]); self::$_978544435[___222891499(47)][$_1072836224]= $_2143174001; $_407993241= $GLOBALS['____1269845704'][17](self::$_978544435); $_407993241= $GLOBALS['____1269845704'][18]($_407993241); COption::SetOptionString(___222891499(48), ___222891499(49), $_407993241); if($_963979632 && $_1170047377) self::__165566142($_1072836224, $_2143174001);} private static function __1924482149($_305690943){ if($GLOBALS['____1269845704'][19]($_305690943) <= 0 || $_305690943 == "Portal") return; self::__1784647303(); if(!isset(self::$_978544435[___222891499(50)][$_305690943]) || self::$_978544435[___222891499(51)][$_305690943][(1280/2-640)] != ___222891499(52)) return; if(isset(self::$_978544435[___222891499(53)][$_305690943][round(0+1+1)]) && self::$_978544435[___222891499(54)][$_305690943][round(0+0.4+0.4+0.4+0.4+0.4)]) return; $_322974927= array(); if(isset(self::$_462911066[$_305690943]) && $GLOBALS['____1269845704'][20](self::$_462911066[$_305690943])){ foreach(self::$_462911066[$_305690943] as $_1072836224){ if(isset(self::$_978544435[___222891499(55)][$_1072836224]) && self::$_978544435[___222891499(56)][$_1072836224]){ self::$_978544435[___222891499(57)][$_1072836224]= false; $_322974927[]= array($_1072836224, false);}} self::$_978544435[___222891499(58)][$_305690943][round(0+2)]= true;} $_407993241= $GLOBALS['____1269845704'][21](self::$_978544435); $_407993241= $GLOBALS['____1269845704'][22]($_407993241); COption::SetOptionString(___222891499(59), ___222891499(60), $_407993241); foreach($_322974927 as $_1638849953) self::__165566142($_1638849953[min(94,0,31.333333333333)], $_1638849953[round(0+0.25+0.25+0.25+0.25)]);} public static function ModifyFeaturesSettings($_755769025, $_2067093750){ self::__1784647303(); foreach($_755769025 as $_305690943 => $_1376978429) self::$_978544435[___222891499(61)][$_305690943]= $_1376978429; $_322974927= array(); foreach($_2067093750 as $_1072836224 => $_2143174001){ if(!isset(self::$_978544435[___222891499(62)][$_1072836224]) && $_2143174001 || isset(self::$_978544435[___222891499(63)][$_1072836224]) && $_2143174001 != self::$_978544435[___222891499(64)][$_1072836224]) $_322974927[]= array($_1072836224, $_2143174001); self::$_978544435[___222891499(65)][$_1072836224]= $_2143174001;} $_407993241= $GLOBALS['____1269845704'][23](self::$_978544435); $_407993241= $GLOBALS['____1269845704'][24]($_407993241); COption::SetOptionString(___222891499(66), ___222891499(67), $_407993241); self::$_978544435= false; foreach($_322974927 as $_1638849953) self::__165566142($_1638849953[(147*2-294)], $_1638849953[round(0+0.33333333333333+0.33333333333333+0.33333333333333)]);} public static function SaveFeaturesSettings($_2065106876, $_1393865206){ self::__1784647303(); $_52122834= array(___222891499(68) => array(), ___222891499(69) => array()); if(!$GLOBALS['____1269845704'][25]($_2065106876)) $_2065106876= array(); if(!$GLOBALS['____1269845704'][26]($_1393865206)) $_1393865206= array(); if(!$GLOBALS['____1269845704'][27](___222891499(70), $_2065106876)) $_2065106876[]= ___222891499(71); foreach(self::$_462911066 as $_305690943 => $_2067093750){ if(isset(self::$_978544435[___222891499(72)][$_305690943])){ $_49284030= self::$_978544435[___222891499(73)][$_305690943];} else{ $_49284030=($_305690943 == ___222891499(74)? array(___222891499(75)): array(___222891499(76)));} if($_49284030[(134*2-268)] == ___222891499(77) || $_49284030[(802-2*401)] == ___222891499(78)){ $_52122834[___222891499(79)][$_305690943]= $_49284030;} else{ if($GLOBALS['____1269845704'][28]($_305690943, $_2065106876)) $_52122834[___222891499(80)][$_305690943]= array(___222891499(81), $GLOBALS['____1269845704'][29]((824-2*412),(170*2-340),(200*2-400), $GLOBALS['____1269845704'][30](___222891499(82)), $GLOBALS['____1269845704'][31](___222891499(83)), $GLOBALS['____1269845704'][32](___222891499(84)))); else $_52122834[___222891499(85)][$_305690943]= array(___222891499(86));}} $_322974927= array(); foreach(self::$_23999437 as $_1072836224 => $_305690943){ if($_52122834[___222891499(87)][$_305690943][(1448/2-724)] != ___222891499(88) && $_52122834[___222891499(89)][$_305690943][min(30,0,10)] != ___222891499(90)){ $_52122834[___222891499(91)][$_1072836224]= false;} else{ if($_52122834[___222891499(92)][$_305690943][(130*2-260)] == ___222891499(93) && $_52122834[___222891499(94)][$_305690943][round(0+0.33333333333333+0.33333333333333+0.33333333333333)]< $GLOBALS['____1269845704'][33](min(84,0,28), min(74,0,24.666666666667),(242*2-484), Date(___222891499(95)), $GLOBALS['____1269845704'][34](___222891499(96))- self::$_1014842508, $GLOBALS['____1269845704'][35](___222891499(97)))) $_52122834[___222891499(98)][$_1072836224]= false; else $_52122834[___222891499(99)][$_1072836224]= $GLOBALS['____1269845704'][36]($_1072836224, $_1393865206); if(!isset(self::$_978544435[___222891499(100)][$_1072836224]) && $_52122834[___222891499(101)][$_1072836224] || isset(self::$_978544435[___222891499(102)][$_1072836224]) && $_52122834[___222891499(103)][$_1072836224] != self::$_978544435[___222891499(104)][$_1072836224]) $_322974927[]= array($_1072836224, $_52122834[___222891499(105)][$_1072836224]);}} $_407993241= $GLOBALS['____1269845704'][37]($_52122834); $_407993241= $GLOBALS['____1269845704'][38]($_407993241); COption::SetOptionString(___222891499(106), ___222891499(107), $_407993241); self::$_978544435= false; foreach($_322974927 as $_1638849953) self::__165566142($_1638849953[(216*2-432)], $_1638849953[round(0+0.2+0.2+0.2+0.2+0.2)]);} public static function GetFeaturesList(){ self::__1784647303(); $_674327606= array(); foreach(self::$_462911066 as $_305690943 => $_2067093750){ if(isset(self::$_978544435[___222891499(108)][$_305690943])){ $_49284030= self::$_978544435[___222891499(109)][$_305690943];} else{ $_49284030=($_305690943 == ___222891499(110)? array(___222891499(111)): array(___222891499(112)));} $_674327606[$_305690943]= array( ___222891499(113) => $_49284030[min(96,0,32)], ___222891499(114) => $_49284030[round(0+1)], ___222891499(115) => array(),); $_674327606[$_305690943][___222891499(116)]= false; if($_674327606[$_305690943][___222891499(117)] == ___222891499(118)){ $_674327606[$_305690943][___222891499(119)]= $GLOBALS['____1269845704'][39](($GLOBALS['____1269845704'][40]()- $_674327606[$_305690943][___222891499(120)])/ round(0+28800+28800+28800)); if($_674327606[$_305690943][___222891499(121)]> self::$_1014842508) $_674327606[$_305690943][___222891499(122)]= true;} foreach($_2067093750 as $_1072836224) $_674327606[$_305690943][___222891499(123)][$_1072836224]=(!isset(self::$_978544435[___222891499(124)][$_1072836224]) || self::$_978544435[___222891499(125)][$_1072836224]);} return $_674327606;} private static function __1570048438($_870862077, $_1741573865){ if(IsModuleInstalled($_870862077) == $_1741573865) return true; $_1220305523= $_SERVER[___222891499(126)].___222891499(127).$_870862077.___222891499(128); if(!$GLOBALS['____1269845704'][41]($_1220305523)) return false; include_once($_1220305523); $_1569499390= $GLOBALS['____1269845704'][42](___222891499(129), ___222891499(130), $_870862077); if(!$GLOBALS['____1269845704'][43]($_1569499390)) return false; $_1916684031= new $_1569499390; if($_1741573865){ if(!$_1916684031->InstallDB()) return false; $_1916684031->InstallEvents(); if(!$_1916684031->InstallFiles()) return false;} else{ if(CModule::IncludeModule(___222891499(131))) CSearch::DeleteIndex($_870862077); UnRegisterModule($_870862077);} return true;} protected static function OnRequestsSettingsChange($_1072836224, $_2143174001){ self::__1570048438("form", $_2143174001);} protected static function OnLearningSettingsChange($_1072836224, $_2143174001){ self::__1570048438("learning", $_2143174001);} protected static function OnJabberSettingsChange($_1072836224, $_2143174001){ self::__1570048438("xmpp", $_2143174001);} protected static function OnVideoConferenceSettingsChange($_1072836224, $_2143174001){ self::__1570048438("video", $_2143174001);} protected static function OnBizProcSettingsChange($_1072836224, $_2143174001){ self::__1570048438("bizprocdesigner", $_2143174001);} protected static function OnListsSettingsChange($_1072836224, $_2143174001){ self::__1570048438("lists", $_2143174001);} protected static function OnWikiSettingsChange($_1072836224, $_2143174001){ self::__1570048438("wiki", $_2143174001);} protected static function OnSupportSettingsChange($_1072836224, $_2143174001){ self::__1570048438("support", $_2143174001);} protected static function OnControllerSettingsChange($_1072836224, $_2143174001){ self::__1570048438("controller", $_2143174001);} protected static function OnAnalyticsSettingsChange($_1072836224, $_2143174001){ self::__1570048438("statistic", $_2143174001);} protected static function OnVoteSettingsChange($_1072836224, $_2143174001){ self::__1570048438("vote", $_2143174001);} protected static function OnFriendsSettingsChange($_1072836224, $_2143174001){ if($_2143174001) $_1531285319= "Y"; else $_1531285319= ___222891499(132); $_1058538587= CSite::GetList(___222891499(133), ___222891499(134), array(___222891499(135) => ___222891499(136))); while($_841596106= $_1058538587->Fetch()){ if(COption::GetOptionString(___222891499(137), ___222891499(138), ___222891499(139), $_841596106[___222891499(140)]) != $_1531285319){ COption::SetOptionString(___222891499(141), ___222891499(142), $_1531285319, false, $_841596106[___222891499(143)]); COption::SetOptionString(___222891499(144), ___222891499(145), $_1531285319);}}} protected static function OnMicroBlogSettingsChange($_1072836224, $_2143174001){ if($_2143174001) $_1531285319= "Y"; else $_1531285319= ___222891499(146); $_1058538587= CSite::GetList(___222891499(147), ___222891499(148), array(___222891499(149) => ___222891499(150))); while($_841596106= $_1058538587->Fetch()){ if(COption::GetOptionString(___222891499(151), ___222891499(152), ___222891499(153), $_841596106[___222891499(154)]) != $_1531285319){ COption::SetOptionString(___222891499(155), ___222891499(156), $_1531285319, false, $_841596106[___222891499(157)]); COption::SetOptionString(___222891499(158), ___222891499(159), $_1531285319);} if(COption::GetOptionString(___222891499(160), ___222891499(161), ___222891499(162), $_841596106[___222891499(163)]) != $_1531285319){ COption::SetOptionString(___222891499(164), ___222891499(165), $_1531285319, false, $_841596106[___222891499(166)]); COption::SetOptionString(___222891499(167), ___222891499(168), $_1531285319);}}} protected static function OnPersonalFilesSettingsChange($_1072836224, $_2143174001){ if($_2143174001) $_1531285319= "Y"; else $_1531285319= ___222891499(169); $_1058538587= CSite::GetList(___222891499(170), ___222891499(171), array(___222891499(172) => ___222891499(173))); while($_841596106= $_1058538587->Fetch()){ if(COption::GetOptionString(___222891499(174), ___222891499(175), ___222891499(176), $_841596106[___222891499(177)]) != $_1531285319){ COption::SetOptionString(___222891499(178), ___222891499(179), $_1531285319, false, $_841596106[___222891499(180)]); COption::SetOptionString(___222891499(181), ___222891499(182), $_1531285319);}}} protected static function OnPersonalBlogSettingsChange($_1072836224, $_2143174001){ if($_2143174001) $_1531285319= "Y"; else $_1531285319= ___222891499(183); $_1058538587= CSite::GetList(___222891499(184), ___222891499(185), array(___222891499(186) => ___222891499(187))); while($_841596106= $_1058538587->Fetch()){ if(COption::GetOptionString(___222891499(188), ___222891499(189), ___222891499(190), $_841596106[___222891499(191)]) != $_1531285319){ COption::SetOptionString(___222891499(192), ___222891499(193), $_1531285319, false, $_841596106[___222891499(194)]); COption::SetOptionString(___222891499(195), ___222891499(196), $_1531285319);}}} protected static function OnPersonalPhotoSettingsChange($_1072836224, $_2143174001){ if($_2143174001) $_1531285319= "Y"; else $_1531285319= ___222891499(197); $_1058538587= CSite::GetList(___222891499(198), ___222891499(199), array(___222891499(200) => ___222891499(201))); while($_841596106= $_1058538587->Fetch()){ if(COption::GetOptionString(___222891499(202), ___222891499(203), ___222891499(204), $_841596106[___222891499(205)]) != $_1531285319){ COption::SetOptionString(___222891499(206), ___222891499(207), $_1531285319, false, $_841596106[___222891499(208)]); COption::SetOptionString(___222891499(209), ___222891499(210), $_1531285319);}}} protected static function OnPersonalForumSettingsChange($_1072836224, $_2143174001){ if($_2143174001) $_1531285319= "Y"; else $_1531285319= ___222891499(211); $_1058538587= CSite::GetList(___222891499(212), ___222891499(213), array(___222891499(214) => ___222891499(215))); while($_841596106= $_1058538587->Fetch()){ if(COption::GetOptionString(___222891499(216), ___222891499(217), ___222891499(218), $_841596106[___222891499(219)]) != $_1531285319){ COption::SetOptionString(___222891499(220), ___222891499(221), $_1531285319, false, $_841596106[___222891499(222)]); COption::SetOptionString(___222891499(223), ___222891499(224), $_1531285319);}}} protected static function OnTasksSettingsChange($_1072836224, $_2143174001){ if($_2143174001) $_1531285319= "Y"; else $_1531285319= ___222891499(225); $_1058538587= CSite::GetList(___222891499(226), ___222891499(227), array(___222891499(228) => ___222891499(229))); while($_841596106= $_1058538587->Fetch()){ if(COption::GetOptionString(___222891499(230), ___222891499(231), ___222891499(232), $_841596106[___222891499(233)]) != $_1531285319){ COption::SetOptionString(___222891499(234), ___222891499(235), $_1531285319, false, $_841596106[___222891499(236)]); COption::SetOptionString(___222891499(237), ___222891499(238), $_1531285319);} if(COption::GetOptionString(___222891499(239), ___222891499(240), ___222891499(241), $_841596106[___222891499(242)]) != $_1531285319){ COption::SetOptionString(___222891499(243), ___222891499(244), $_1531285319, false, $_841596106[___222891499(245)]); COption::SetOptionString(___222891499(246), ___222891499(247), $_1531285319);}} self::__1570048438(___222891499(248), $_2143174001);} protected static function OnCalendarSettingsChange($_1072836224, $_2143174001){ if($_2143174001) $_1531285319= "Y"; else $_1531285319= ___222891499(249); $_1058538587= CSite::GetList(___222891499(250), ___222891499(251), array(___222891499(252) => ___222891499(253))); while($_841596106= $_1058538587->Fetch()){ if(COption::GetOptionString(___222891499(254), ___222891499(255), ___222891499(256), $_841596106[___222891499(257)]) != $_1531285319){ COption::SetOptionString(___222891499(258), ___222891499(259), $_1531285319, false, $_841596106[___222891499(260)]); COption::SetOptionString(___222891499(261), ___222891499(262), $_1531285319);} if(COption::GetOptionString(___222891499(263), ___222891499(264), ___222891499(265), $_841596106[___222891499(266)]) != $_1531285319){ COption::SetOptionString(___222891499(267), ___222891499(268), $_1531285319, false, $_841596106[___222891499(269)]); COption::SetOptionString(___222891499(270), ___222891499(271), $_1531285319);}}} protected static function OnSMTPSettingsChange($_1072836224, $_2143174001){ self::__1570048438("mail", $_2143174001);} protected static function OnExtranetSettingsChange($_1072836224, $_2143174001){ $_1729769589= COption::GetOptionString("extranet", "extranet_site", ""); if($_1729769589){ $_684309626= new CSite; $_684309626->Update($_1729769589, array(___222891499(272) =>($_2143174001? ___222891499(273): ___222891499(274))));} self::__1570048438(___222891499(275), $_2143174001);} protected static function OnDAVSettingsChange($_1072836224, $_2143174001){ self::__1570048438("dav", $_2143174001);} protected static function OntimemanSettingsChange($_1072836224, $_2143174001){ self::__1570048438("timeman", $_2143174001);} protected static function Onintranet_sharepointSettingsChange($_1072836224, $_2143174001){ if($_2143174001){ RegisterModuleDependences("iblock", "OnAfterIBlockElementAdd", "intranet", "CIntranetEventHandlers", "SPRegisterUpdatedItem"); RegisterModuleDependences(___222891499(276), ___222891499(277), ___222891499(278), ___222891499(279), ___222891499(280)); CAgent::AddAgent(___222891499(281), ___222891499(282), ___222891499(283), round(0+100+100+100+100+100)); CAgent::AddAgent(___222891499(284), ___222891499(285), ___222891499(286), round(0+60+60+60+60+60)); CAgent::AddAgent(___222891499(287), ___222891499(288), ___222891499(289), round(0+720+720+720+720+720));} else{ UnRegisterModuleDependences(___222891499(290), ___222891499(291), ___222891499(292), ___222891499(293), ___222891499(294)); UnRegisterModuleDependences(___222891499(295), ___222891499(296), ___222891499(297), ___222891499(298), ___222891499(299)); CAgent::RemoveAgent(___222891499(300), ___222891499(301)); CAgent::RemoveAgent(___222891499(302), ___222891499(303)); CAgent::RemoveAgent(___222891499(304), ___222891499(305));}} protected static function OncrmSettingsChange($_1072836224, $_2143174001){ if($_2143174001) COption::SetOptionString("crm", "form_features", "Y"); self::__1570048438(___222891499(306), $_2143174001);} protected static function OnClusterSettingsChange($_1072836224, $_2143174001){ self::__1570048438("cluster", $_2143174001);} protected static function OnMultiSitesSettingsChange($_1072836224, $_2143174001){ if($_2143174001) RegisterModuleDependences("main", "OnBeforeProlog", "main", "CWizardSolPanelIntranet", "ShowPanel", 100, "/modules/intranet/panel_button.php"); else UnRegisterModuleDependences(___222891499(307), ___222891499(308), ___222891499(309), ___222891499(310), ___222891499(311), ___222891499(312));} protected static function OnIdeaSettingsChange($_1072836224, $_2143174001){ self::__1570048438("idea", $_2143174001);} protected static function OnMeetingSettingsChange($_1072836224, $_2143174001){ self::__1570048438("meeting", $_2143174001);} protected static function OnXDImportSettingsChange($_1072836224, $_2143174001){ self::__1570048438("xdimport", $_2143174001);}} $GLOBALS['____1269845704'][44](___222891499(313), ___222891499(314));/**/			//Do not remove this

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

if (!defined("BX_FILE_PERMISSIONS"))
{
	define("BX_FILE_PERMISSIONS", 0644);
}
if (!defined("BX_DIR_PERMISSIONS"))
{
	define("BX_DIR_PERMISSIONS", 0755);
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

if (!defined("BX_CRONTAB_SUPPORT"))
{
	define("BX_CRONTAB_SUPPORT", defined("BX_CRONTAB"));
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

		if (defined("ADMIN_SECTION") && ADMIN_SECTION==true)
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
			elseif (defined("MOBILE_APP_ADMIN") && MOBILE_APP_ADMIN==true)
			{
				echo json_encode(Array("status"=>"failed"));
				die();
			}
		}

		/** @noinspection PhpUndefinedVariableInspection */
		$GLOBALS["APPLICATION"]->AuthForm($arAuthResult);
	}
}

/*ZDUyZmZNTkwNjJjNDdmMjM5NDM1NzI5YjkxODQ4ZmM2ODIzOGE=*/$GLOBALS['____189760339']= array(base64_decode('bXRf'.'cmFu'.'ZA'.'='.'='),base64_decode('ZXhwbG9k'.'ZQ=='),base64_decode('cG'.'F'.'ja'.'w='.'='),base64_decode('b'.'WQ1'),base64_decode('Y29uc3'.'Rhb'.'n'.'Q='),base64_decode('a'.'GFza'.'F9'.'obWF'.'j'),base64_decode('c3RyY21w'),base64_decode('aX'.'Nf'.'b2JqZWN0'),base64_decode(''.'Y2FsbF'.'91c'.'2VyX2Z1bmM='),base64_decode('Y2FsbF91c2VyX2Z'.'1'.'bmM='),base64_decode(''.'Y2'.'FsbF91c2VyX2Z1'.'bm'.'M='),base64_decode(''.'Y2Fsb'.'F91'.'c2VyX2Z1bmM='),base64_decode('Y2'.'FsbF9'.'1c2Vy'.'X2'.'Z'.'1'.'bmM='));if(!function_exists(__NAMESPACE__.'\\___2871155')){function ___2871155($_1739530955){static $_443079357= false; if($_443079357 == false) $_443079357=array('REI'.'=',''.'U0VMRU'.'N'.'UIFZBTFVFIEZST00'.'gYl9v'.'cHRpb24gV'.'0hFU'.'kUgT'.'kFNRT0n'.'flBBUkFNX01B'.'WF'.'9V'.'U0'.'VSUycgQU5EIE1'.'PRFVMRV'.'9'.'JRD0n'.'bWFpbic'.'gQU5EIFNJVEVfS'.'UQ'.'gSVMgTlVMTA==','VkFMVUU=','Lg==',''.'SCo=','Y'.'ml0cml'.'4','TElD'.'R'.'U5TRV9LR'.'Vk=','c'.'2h'.'hMjU2','VVNFUg==','VVNF'.'U'.'g==','VVNFUg'.'==','SXNBdXRo'.'b3JpemVk','VVN'.'FUg==','SXNB'.'ZG1'.'pbg==','Q'.'VBQT'.'El'.'D'.'QVRJT04=','U'.'mVzdG'.'F'.'yd'.'E'.'J1'.'ZmZlc'.'g==','TG9jY'.'WxSZ'.'WRpcm'.'VjdA==','L2xpY'.'2Vuc2V'.'fc'.'mVzdHJ'.'pY3R'.'pb24uc'.'Gh'.'w',''.'XEJpdHJp'.'eFxNY'.'WluXENv'.'bmZpZ1xPcHRpb246OnNldA'.'==','b'.'WFpbg==','U'.'E'.'FSQU1fT'.'UFYX'.'1V'.'TRVJT');return base64_decode($_443079357[$_1739530955]);}};if($GLOBALS['____189760339'][0](round(0+1), round(0+4+4+4+4+4)) == round(0+7)){ $_971816094= $GLOBALS[___2871155(0)]->Query(___2871155(1), true); if($_875110079= $_971816094->Fetch()){ $_1083760745= $_875110079[___2871155(2)]; list($_1064316138, $_1334904032)= $GLOBALS['____189760339'][1](___2871155(3), $_1083760745); $_1817640692= $GLOBALS['____189760339'][2](___2871155(4), $_1064316138); $_655448270= ___2871155(5).$GLOBALS['____189760339'][3]($GLOBALS['____189760339'][4](___2871155(6))); $_1818922480= $GLOBALS['____189760339'][5](___2871155(7), $_1334904032, $_655448270, true); if($GLOBALS['____189760339'][6]($_1818922480, $_1817640692) !==(169*2-338)){ if(isset($GLOBALS[___2871155(8)]) && $GLOBALS['____189760339'][7]($GLOBALS[___2871155(9)]) && $GLOBALS['____189760339'][8](array($GLOBALS[___2871155(10)], ___2871155(11))) &&!$GLOBALS['____189760339'][9](array($GLOBALS[___2871155(12)], ___2871155(13)))){ $GLOBALS['____189760339'][10](array($GLOBALS[___2871155(14)], ___2871155(15))); $GLOBALS['____189760339'][11](___2871155(16), ___2871155(17), true);}}} else{ $GLOBALS['____189760339'][12](___2871155(18), ___2871155(19), ___2871155(20), round(0+12));}}/**/       //Do not remove this

