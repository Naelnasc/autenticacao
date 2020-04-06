<?php
################################################################
#Slogin Kernel Vers�o 6.5                                      #
#Compila��o 311220121938                                       #
#Copyright Sandrinho Info                                      #
#Este c�digo � disponibilizado sob a licen�a                   #
#Creative Commons (Para redestribuir, � necess�ria a men��o do #
#Autor).                                                       #
################################################################
//Arquivo home/index.php
//Inclui o arquivo de configura��o do sistema e o validador de sess�o
#Para proteger as suas p�ginas, coloque sempre as duas linhas abaixo no seu script PHP
require_once "../conf/desc.php";
require_once "../sessao.php";
/* Essa p�gina � um exemplo de como devem ser configuradas as p�ginas do seu sistema.
Recomendamos que voc� coloque as suas p�ginas nesata pasta, mas voc� pode colocar em qualquer parte. */
#C�digo HTML a ser enviado
$html = "<!--############################################################
#Slogin User Interface Vers�o 6.5                              #
#Compila��o 311220121938                                       #
#Copyright Sandrinho Info                                      #
#Este c�digo � disponibilizado sob a licen�a                   #
#Creative Commons (Para redestribuir, � necess�ria a men��o do #
#Autor).                                                       #
#############################################################-->
<!-- Arquivo home/index.php -->
<html>
<head>
<meta name='developer' content='Sandrinho Info Software'>
<title>Slogin - Home</title>
<link href='../conf/tela.css' rel='stylesheet' media='all'>
</head>
<body>
<div class='header'><h2>Slogin v6.5</h2><br><b>Home</b></div><br>
<div class='sucess'>O usu�rio " .  $usuario . " est� logado.</div><br>
<div class='cprg'><h5>&copy <a href='http://www.sandrinhoinfo.com.br/?ref=Slogin65'>Sandrinho Info</a> - <a href='../notas.php'>Notas da vers�o</a> - <a href='../logout.php'>Sair</a></h5></div>
</body>
</html>";
#Manda a p�gina
echo $html;
?>