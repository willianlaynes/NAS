<?php
$include = '';
require('cab.php');
require('../include/sisdoc_debug.php');
require('../include/_class_form.php');

$form = new form();

$cp = array();

array_push($cp,array('$H8','id_bx','',False,False));
array_push($cp,array('$S50','bx_localizacao','Localiza&ccedil;&atilde;o',True,True));
array_push($cp,array('$T20:15','bx_descricao','Descri&ccedil;&atilde;o:',True,True));
array_push($cp,array('$O 1:Ativo&0Inativo','bx_status','Status:',True,true));
array_push($cp,array('$B8','','Salvar',False,true));

$tela = $form->editar($cp,'nurse_box');
$dd[4]='true';
echo "<pre>";
print_r($dd);
echo "</pre>";
$form->saved;

echo $tela;
?>
