<?
$Server = "smartora.mysql.ukraine.com.ua";
$Login = "smartora_philade";
$Password = "n8b69j3c";
$DataBase = "smartora_philade";

$db = new MySQLi($Server, $Login, $Password, $DataBase);

$result = $db->query("Set charset utf8");
$result = $db->query("Set character_set_client = utf8");
$result = $db->query("Set character_set_connection = utf8");
$result = $db->query("Set character_set_results = utf8");
$result = $db->query("Set collation_connection = utf8_general_ci");

if (mysqli_connect_errno()) {
   printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
   exit;
}

global $site_url,$len_default, $len,$OPTIONS; $site_url='http://philadelphua.smarto.com.ua';
global $section_floor_url;	$section_floor_url='section/floor2';


$len_default='ua';
$len=array('ru','en');
$OPTIONS=array('MINFLOOR'=>2,'MAXFLOOR'=>21);

define(Cash, true);            
define(CashFile,'modules/inc/cash.ini'); 
define(CashTime, 10800);
define(ControlDir, array('modules', 'templates','js','css'));
define(NotCashlFile, array('templates/news.php',
						  'templates/appartments.php',
						  'templates/appartments/odnokimnatna.php',
						  'templates/appartments/dvohkimnatna.php',
						  'templates/appartments/trehkimnatna.php',
						  'templates/architecture.php',
						  'templates/architecture/choose-apartments.php',
						  'templates/architecture/house.php',
						  'templates/architecture/location.php'		,
						  'templates/pdf.php'							  
						  )); 

/**
 * Підключення модулів
 */
include(dirname(__FILE__).'/module/CacheControls.php');
//include(dirname(__FILE__).'/module/RenewalSitemap.php');

?>