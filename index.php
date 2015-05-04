<?php
$include = '';
require('cab.php');

require('../include/sisdoc_debug.php');
//require('../include/sisdoc_data.php');

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
    <pre>
      3. Requisitos Funcionais
      
      RF01: Tela de Login 
       - O sistema disponibilizará uma tela de acesso por usuario.
       - Os usuarios deverão ter ID de acesso contendo entre 5 e 10 caracteres (apenas letras maiúsculas e minusculas).
       - A senha deverá conter entre 8 à 12 caracteres (alfanuméricos).
      
      3.1 Requisitos Funcionais - Administrador
      
      RFA01: Gerenciar usuários
      - Interface para inserção de usuário, ID deacesso contendo entre 5 e 10 caracteres (apenas letras maiúsculas e minusculas). 
      - Interface para alteração de dados de usuários.
      - Exclusão lógica de usuário. 
      RFA02: Gerenciar hospitais;
      - Interface para Cadastro de Hospital;
      - Atualizar hospital;
      - Exclusão lógica de hospital.
      RFA03: Gerar Relatórios e graficos;
       - Gerar relatório por baia;
       - Gerar relatório por grupo;
      - Gerar grafico;
      RFA04: Gerenciar grupos;
       - Inserir grupo;
       - Atualizar grupo;
       - Exclusão lógica de grupos.
      RFA05: Gerenciar leitos;
       - Inserir leitos;
       - Atualizar leitos;
      - Exclusão lógica de leitos.
      
      
      3.2 Requisitos Funcionais – Usuario
      
      RFU03: Preencher formulário;
       - Iniciar novo formulário;
       - Alterar formulário (requer autorização);
       - Exclusão lógica de formulário (requer autorização).
      RFU04: Visualizar relatório;
       - Selecionar categoria de relatório a ser consultada;
      RFU05: Gerar gráfico;
       - Visualizar gráfico geral;
       - Vizualizar gráfico por categoria;
      
      3.3 Requisitos não Funcionais
      
      RNF01: Servidor com MySql e PHP instalados;
      RNF02: Conexão com Internet;
      RNF03: Dispositivo móvel com Android;
    
    </pre>
</div>
<div class="container_foot"></div>








