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
	  <a href="usuario.php" ><li class="menu_item ativo">Usu&aacute;rio</li></a>
	  <a href="hospital.php" ><li class="menu_item">Hospital</li></a>
	  <a href="relatorios.php" ><li class="menu_item">Relat&oacute;rio</li></a>
	  <a href="login.php" ><li class="menu_item">Sair</li></a>
	</ul>
</div>
<div class="container_right">
  <h1>Op&ccedil;&otilde;es - Usu&aacute;rio</h1>
  <ul class="menu">
	  <a href="usuario_ed.php" ><li class="menu_item">Novo usu&aacute;rio</li></a>
	  <a href="usuario_lista.php" ><li class="menu_item">Lista usu&aacute;rio</li></a>
	</ul>
</div>
<div class="container_foot"></div>
