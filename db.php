<?
session_start();
ob_start();
date_default_timezone_set('Etc/GMT+2');

$include .= '../_include/';

//-------------------------------------- Paramentros para DEBUG
ini_set('display_errors', 0);
ini_set('error_reporting', 0);
//-------------------------------------- Includes Padraes

require($include.'sisdoc_sql.php');
//require($include.'sisdoc_char.php');
echo '-----------------------------------------------<br>';

//-------------------------------------- Diretorios de Arquivos e Imagens
$dir = $_SERVER['DOCUMENT_ROOT'];
$dir_public = $dir . '/nas/';
$img_dir = '/nas/img/';
$img_pub_dir = '/nas/img/';
$http_site = '/nas/';
$http_public = '/nas/';
$http = '/nas/';
$secu = "nas";


//-------------------------------------- Definicoes Iniciais
//define(site,'http://apoio.sisdoc.com.br:81');
$ip = $_SERVER['REMOTE_ADDR'];
$ip_server = $_SERVER['SERVER_ADDR'];
$ipi = substr($ip,0,strpos($ip,'.'));
if ($ipi == '127' or $ipi == '10')
	{ define(http,'http://10.1.1.220/fonzaghi/'); }
		else 
	{ define(http,'/fonzaghi/'); }
define(idioma,"pt_br");
define(path,''.$_SERVER['PATH_INFO']);
define(host,getServerHost());
define(secu,'mailer');
$path = substr(path,1,100);
$charset = "ASCII";

//-------------------------------------- Leituras das Variaveis dd0 a dd99 (POST/GET)
$vars = array_merge($_GET, $_POST);
for ($k=0;$k < 100;$k++)
	{
	$varf='dd'.$k;
	$varf=$vars[$varf];
	//if (isset($varf) and ($k > 1)) {	//$varf = str_replace($varf,"A","�"); }
	$varf = troca($varf,"'","´");
	$varf = troca($varf,'<','&lt;');
	$varf = troca($varf,'>','&gt;');
	
	$dd[$k] = $varf; 
	//echo '<BR>'.$k.'.'.($dd[$k]);
	
	}
	//exit;
$acao = $vars['acao'];
$nocab = $vars['nocab'];
$base = 'mysql';
//-------------------------------------- Determina o Idioma de Navegacao
$idv = $vars['idioma'];

if (strlen($idv) > 0)
	{
	setcookie("idioma",$idv, time()+60*60*24*365);
	$idioma = $idv;
	}
else
	{
	$idioma = $_COOKIE["idioma"];
	if (strlen($idioma) ==0) { $idioma = $HTTP_COOKIE_VARS["idioma"]; }	
	}
	if (strlen($idioma)==0) {$idioma="1";}
	if (!isset($jid)) { $jid = '1'; }
//-------------------------------------- Paramentros da Base de Dados PostGres

require("db_nas.php");
//-----------------paramentros para acessos reestritos

//require_once("db_pass.php");
//-------------------------------------- Recuperar dados de GET / POST


function getServerHost() {
return isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST']
		: (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST']
		: (isset($_SERVER['HOSTNAME']) ? $_SERVER['HOSTNAME']
		: 'localhost'));
}
?>