<?php
################################################################
#Slogin Kernel Versão 6.5.1                                    #
#Compilação 311220121938                                       #
#Copyright Sandrinho Info                                      #
#Este código é disponibilizado sob a licença                   #
#Creative Commons (Para redestribuir, é necessária a menção do #
#Autor).                                                       #
################################################################
//Arquivo notas.php
#Código HTML a ser enviado
$html = "<!--############################################################
#Slogin User Interface Versão 6.5.1                            #
#Compilação 311220121938                                       #
#Copyright Sandrinho Info                                      #
#Este código é disponibilizado sob a licença                   #
#Creative Commons (Para redestribuir, é necessária a menção do #
#Autor).                                                       #
#############################################################-->
<!-- Arquivo notas.php -->
<html>
<head>
<meta name='developer' content='Sandrinho Info Software'>
<title>Slogin - Notas da versão</title>
<link href='./conf/tela.css' rel='stylesheet' media='all'>
</head>
<body>
<div class='header'><h2>Slogin v6.5.1</h2><br><b>Notas da versão</b></div><br>
Desenvolvido por Alessandro Pereira<br>
String da versão: <code>6.5.6701.slogin65_sp1</code><br>
Rodando em: <code>http://" . $_SERVER['SERVER_NAME'] . "</code><br>
Este sistema de login é disponibilizado sob a licensa Creative Commons<br>
&copy; Sandrinho Info 2013<br>
<div class='cprg'><h5>&copy <a href='http://www.sandrinhoinfo.com.br/?ref=Slogin65'>Sandrinho Info</a> - <a href='./notas.php'>Notas da versão</a> - <a href='./'>Página inicial</a></h5></div>
</body>
</html>";
#Manda a página
echo $html;
?>