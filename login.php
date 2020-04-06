<?php
################################################################
#Slogin Kernel Vers�o 6.5.1                                    #
#Compila��o 311220121938                                       #
#Copyright Sandrinho Info                                      #
#Este c�digo � disponibilizado sob a licen�a                   #
#Creative Commons (Para redestribuir, � necess�ria a men��o do #
#Autor).                                                       #
################################################################
//Arquivo login.php
//Inclui o arquivo de configura��o do sistema
require_once "conf/desc.php";
//Define vari�veis para an�lise
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
//Consulta MySQL - N�o altere
$sql = "SELECT * FROM slogin_users WHERE Usuario = '" . $usuario . "'";
$query = mysqli_query($sql);
$linhas = mysqli_num_rows($query);
//Rotina de autentica��o de usu�rio
if($linhas != 0){
	if($senha != mysqli_result($query,0,"Senha")){
		//A��o se a senha estiver errada
		header("Location:$raiz?usuario=" . $usuario . "&erro=1");
	}
	else{
		//A��o se a senha estiver correta
		#Inicia a sess�o e insere os dados nela
		session_start();
		$_SESSION['usuario'] = $usuario;
		$_SESSION['senha'] = $senha;
		#Redireciona para � p�gina inicial
		header("Location:$home");
	}
}
else{
	//A��o se o usu�rio n�o existir
	header("Location:$raiz?usuario=" . $usuario . "&erro=2");
}
?>