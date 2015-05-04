<?php
if (!(isset($nocab))) { $nocab = ''; }
$nc = $nocab;


$tab_max = '96%';
if (!isset($include))
	{ $include = '../include/'; }
	{ $include .= '../include/'; }
require('../include/_class_char.php');
require('../include/_class_msg.php');
require('../include/sisdoc_debug.php');
require("db.php");
$secu=1;
require("_class/_class_header.php");
$hd = new header;

$ss = $user;
$http = '/nas/';

$hd->http = $http;
if ($nc=='1')
   {
        echo $hd->cab_noshow();
   } else {
        echo $hd->cab();
   }

?>