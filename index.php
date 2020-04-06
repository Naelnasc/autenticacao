<?php
################################################################
#Slogin Kernel Vers�o 6.5.1                                    #
#Compila��o 311220121938                                       #
#Copyright Sandrinho Info                                      #
#Este c�digo � disponibilizado sob a licen�a                   #
#Creative Commons (Para redestribuir, � necess�ria a men��o do #
#Autor).                                                       #
################################################################
//Arquivo index.php
#Verifica se foi retornada alguma coisa de login.php
if(isset($_GET['erro']) && isset($_GET['usuario'])){
	$usuario = $_GET['usuario'];
	#Verifica o erro
	if($_GET['erro'] == 1){
		$erro_div = "<div class='alert'>A senha est� incorreta.</div><br>";
	}
	elseif($_GET['erro'] == 2){
		$erro_div = "<div class='alert'>Esse usu�rio n�o existe.</div><br>";
	}
	else{
		$erro_div = "";
	}
}
#Se nada for retornado, define vari�veis vazias
else{
	$usuario = "";
	$erro_div = "";
}
#C�digo HTML a ser enviado
$html = "<!--############################################################
#Slogin User Interface Vers�o 6.5                              #
#Compila��o 311220121938                                       #
#Copyright Sandrinho Info                                      #
#Este c�digo � disponibilizado sob a licen�a                   #
#Creative Commons (Para redestribuir, � necess�ria a men��o do #
#Autor).                                                       #
#############################################################-->
<!-- Arquivo index.php -->
<html>
<head>
<meta name='developer' content='Sandrinho Info Software'>
<title>Slogin - Login</title>
<link href='./conf/tela.css' rel='stylesheet' media='all'>
</head>
<body>
<div class='header'><h2>Slogin v6.5</h2><br><b>Login</b></div><br>
" . $erro_div . "
<form action='./login.php' method='post'>
<table align='center'>
<tr><td>Nome&nbsp;de&nbsp;usu�rio:&nbsp;</td><td><input type='text' name='usuario' value='" . $usuario . "'></td></tr>
<tr><td>Senha:&nbsp;</td><td><input type='password' name='senha'></td></tr>
<tr><td><input type='submit' value='Logar' /></td></tr>
</table>
</form>
<div class='cprg'><h5>&copy <a href='http://www.sandrinhoinfo.com.br/?ref=Slogin65'>Sandrinho Info</a> - <a href='./notas.php'>Notas da vers�o</a> - <a href='./cadastro.html'>Cadastre-se</a></h5></div>
</body>
</html>";
#Envia a p�gina
echo $html;
?>