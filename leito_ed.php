<?php
$include = '';
require('cab.php');

require('../include/_class_form.php');

$form = new form();

$cp = array();

array_push($cp,array('$H8','id_bx','',False,False));
array_push($cp,array('$S50','bx_localizacao','Localiza&ccedil;&atilde;o',True,True));
array_push($cp,array('$T20:15','bx_descricao','Descri&ccedil;&atilde;o:',True,True));
array_push($cp,array('$O 1:Ativo&0Inativo','bx_status','Status:',True,true));
array_push($cp,array('$B8','','Salvar',False,true));

$tela = $form->editar($cp,'nurse_box');

if ($form->saved > 0)
	{


}
?>
<div class="container_top" >
  <img width="400px" align="left" src="img/cab_nas2.png"/>
    <a class="cab_titulo">&nbsp;&nbsp;&nbsp;NAS - Sistema de Enfermagem</a>
  <img width="300px" align="right" src="img/cab_nas.png"/>
</div>
<div class="container_left">
  <img  width="300px" src="img/enfermagem2.png"/>
  <ul class="menu">
	  <a href="grupo.php" ><li class="menu_item">Grupo</li></a>
	  <a href="leito.php" ><li class="menu_item ativo">Leito</li></a>
	  <a href="usuario.php" ><li class="menu_item">Usuario</li></a>
	  <a href="hospital.php" ><li class="menu_item">Hospital</li></a>
	  <a href="relatorios.php" ><li class="menu_item">Relat&oacute;rio</li></a>
	  <a href="login.php" ><li class="menu_item">Sair</li></a>
	</ul>
</div>
<div class="container_right">
  <h1>Op&ccedil;&otilde;es - Leito - Edi&ccedil;&atilde;o</h1>
  <?=$tela;?>    
</div>
<div class="container_foot"></div>
