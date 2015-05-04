<?php
$include = '';
require('_class/_class_header.php');

require('../include/_class_char.php');
require('../include/_class_msg.php');
require('../include/sisdoc_debug.php');
//require('../include/sisdoc_data.php');

$hd = new header;
$sx = $hd->cab();
echo $sx;
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
	  <a href="usuario.php" ><li class="menu_item">Usu&aacute;rio</li></a>
	  <a href="hospital.php" ><li class="menu_item">Hospital</li></a>
	  <a href="relatorios.php" ><li class="menu_item ativo">Relat&oacute;rio</li></a>
	  <a href="login.php" ><li class="menu_item">Sair</li></a>
	</ul>
</div>
<div class="container_right">
  <h1>Op&ccedil;&otilde;es - Hospital</h1>
  <ul class="menu">
	  <a href="relatorio1.php" ><li class="menu_item">Relat&oacute;rio 1</li></a>
	  <a href="relatorio2.php" ><li class="menu_item">Relat&oacute;rio 2</li></a>
	</ul>
</div>
<div class="container_foot"></div>
