<?
global $cnn,$email_adm,$admin_nome;
//-------------------------------------- Diret�rios de Arquivos e Imagens
$dir = $_SERVER['DOCUMENT_ROOT'];
//$uploaddir = $dir.'img/produto/';
//$dir_public = $dir . '/img/ic/';

$img_dir = '/nas/img/';
$img_pub_dir = '/nas/';
$img_logo_1 = http.'img/logo_fonzaghi.png';
$img_logo_2 = http.'img/logo_asthore.png';
$titulo = "NAS - Sistema de Enfermagem";
$srv = $_SERVER['HTTP_HOST'];
$http_local = 'http://'.$srv.'/nas/';
$http_public = '/nas';
$tab_max = "1000";
$secu = "fonza";

$titulo_site = ':: NAS - Sistema de Enfermagem ::';

$email_adm = "willianlaynes@hotmail.com";
$admin_nome = "NAS - Sistema de Enfermagem";

		$base = "mysql";
		$base_user="layne831_willian";
		$base_port = '3306';
		$base_host="localhost";
		$base_name="layne831_nas";
		$base_pass="wi48an";
		//$ftp_img  = 'www.egg.com.br/ic.php?dd99=upload&';
		//$ftp_host = '10.1.1.220';
		//$ftp_user = 'rene';
		//$ftp_pass = '448545';
		//$ftp_path = 'httpdocs/img/ic';
		//print_r($_SERVER);

$ok = db_connect();

?>
