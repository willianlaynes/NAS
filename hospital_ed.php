<?php
require('cab.php');

require('../include/_class_form.php');

$form = new form();

$cp = array();

array_push($cp,array('$H8','id_nu','',False,False));
array_push($cp,array('$H1','nu_nivel','',False,False));
array_push($cp,array('$S14','nu_cpf_cnpj','CNPJ:',False,True));
array_push($cp,array('$S50','nu_nome','Hospital:',False,True));
array_push($cp,array('$S100','nu_rua','Rua:',False,True));
array_push($cp,array('$S10','nu_numero','Numero:',False,True));
array_push($cp,array('$S8','nu_cep','Cep:',False,True));
array_push($cp,array('$O 1:Ativo&0Inativo','nu_status','Status:',False,True));
array_push($cp,array('$H1','nu_tipo','',False,true));
array_push($cp,array('$B8','','Salvar',False,true));

$titulo = 'Cadastro de Hospitais';
$tela = $form->editar($cp,'nurse_users');

//Tipo hospital
$_POST['dd1'] = 5;
$_POST['dd8']='J';

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
	  <a href="leito.php" ><li class="menu_item">Leito</li></a>
	  <a href="usuario.php" ><li class="menu_item">Usuario</li></a>
	  <a href="hospital.php" ><li class="menu_item ativo">Hospital</li></a>
	  <a href="relatorios.php" ><li class="menu_item">Relat&oacute;rio</li></a>
	  <a href="login.php" ><li class="menu_item">Sair</li></a>
	</ul>
</div>
<div class="container_right">
  <h1><?=$titulo;?></h1>    
  <?=$tela;?>    
</div>
<div class="container_foot"></div>
