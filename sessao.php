<?php
################################################################
#Slogin Kernel Vers�o 6.5.1                                    #
#Compila��o 311220121938                                       #
#Copyright Sandrinho Info                                      #
#Este c�digo � disponibilizado sob a licen�a                   #
#Creative Commons (Para redestribuir, � necess�ria a men��o do #
#Autor).                                                       #
################################################################
//Arquivo sessao.php
//Inclui o aarquivo de configura��o do sistema
require_once "conf/desc.php";
/* Uma breve descri��o dos erros que ser�o exibidos:
Erro 0791: � quando a senha existente na sess�o � diferente da existente no Banco de dados
Erro 0790: � quando o usu�rio definido na sess�o n�o existe
Erro 0789: � quando a sess�o n�o existe
*/
#Procedimento de sess�o
@session_start();
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
//Rotina de autentica��o de usu�rio
#Verifica se usuario foi definido na sess�o
if($_SESSION['usuario'] != ""){
	#Verifica se senha foi definida na sess�o
	if($_SESSION['senha'] != ""){
		#Se usuario e senha n�o forem nulos, verifica se existem no banco de dados
		$query = mysql_query("SELECT * FROM slogin_users WHERE Usuario = '" . $_SESSION['usuario'] . "'");
		$res = mysql_fetch_array($query);
		$linhas = mysql_num_rows($query);
		#Verifica se o usuario definido na sess�o existe
		if($linhas != 0){
			#Se existir, verifica a senha definida na sess�o
			if($_SESSION['senha'] != $res['Senha']){
				session_destroy();
				echo "Sess�o inv�lida.<br>Erro 0791.<br><a href='$raiz'>Voltar</a>";
				exit;
			}
		}
		else{
			#Se n�o houver registros do usu�rio, encerra a sess�o
			session_destroy();
			echo "Sess�o inv�lida.<br>Erro 0790.<br><a href='$raiz'>Voltar</a>";
			exit;
		}
	}
}
else{
	session_destroy();
	echo "Sess�o inv�lida.<br>Erro 0789.<br><a href='$raiz'>Voltar</a>";
	exit;
}
?>