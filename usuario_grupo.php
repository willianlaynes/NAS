<?php
$include = '';
require('cab.php');

require('../include/_class_form.php');
require('../include/sisdoc_debug.php');
$form = new form();

$cp = array();

$sql = 'select * from nurse_grupo';
$rlt = db_query($sql);
while($line = db_read($rlt)){
  $op .= $line['id_ng'].':'.$line['ng_descricao'].'&';
}

$sql = 'select * from nurse_users';
$rlt = db_query($sql);
while($line = db_read($rlt)){
  $op1 .= $line['id_nu'].':'.$line['nu_nome'].'&';
}



array_push($cp,array('$H8','id_ngu','',False,False));
array_push($cp,array('$O '.$op,'id_ng','Grupo:',True,False));
array_push($cp,array('$O '.$op1,'id_nu','Usuario:',True,False));
array_push($cp,array('$O1 1:Ativo&0:Inativo','ngu_status','Status',True,False));
array_push($cp,array('$B8','','Salvar',False,False));

$titulo = 'Cadastro de vinculo GRUPO x USUARIO';
$tela = $form->editar($cp,'nurse_grupo_users');




/*
if ($form->saved > 0)
	{


}

*/
?>
<div class="container_top" >
  <img width="400px" align="left" src="img/cab_nas2.png"/>
    <a class="cab_titulo">&nbsp;&nbsp;&nbsp;NAS - Sistema de Enfermagem</a>
  <img width="300px" align="right" src="img/cab_nas.png"/>
</div>
<div class="container_left">
  <img  width="300px" src="img/enfermagem2.png"/>
  <ul class="menu">
	  <a href="grupo.php" ><li class="menu_item ativo">Grupo</li></a>
	  <a href="leito.php" ><li class="menu_item">Leito</li></a>
	  <a href="usuario.php" ><li class="menu_item">Usuario</li></a>
	  <a href="hospital.php" ><li class="menu_item">Hospital</li></a>
	  <a href="relatorios.php" ><li class="menu_item">Relat&oacute;rio</li></a>
	  <a href="login.php" ><li class="menu_item">Sair</li></a>
	</ul>
</div>
<div class="container_right">
   <h1><?=$titulo;?></h1>   
  <?=$tela;?>    
</div>
<div class="container_foot"></div>
