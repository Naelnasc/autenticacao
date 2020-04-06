<?php
################################################################
#Slogin Kernel Versão 6.5.1                                    #
#Compilação 311220121938                                       #
#Copyright Sandrinho Info                                      #
#Este código é disponibilizado sob a licença                   #
#Creative Commons (Para redestribuir, é necessária a menção do #
#Autor).                                                       #
################################################################
//Arquivo sessao.php
//Inclui o aarquivo de configuração do sistema
require_once "conf/desc.php";
/* Uma breve descrição dos erros que serão exibidos:
Erro 0791: é quando a senha existente na sessão é diferente da existente no Banco de dados
Erro 0790: é quando o usuário definido na sessão não existe
Erro 0789: é quando a sessão não existe
*/
#Procedimento de sessão
@session_start();
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
//Rotina de autenticação de usuário
#Verifica se usuario foi definido na sessão
if($_SESSION['usuario'] != ""){
	#Verifica se senha foi definida na sessão
	if($_SESSION['senha'] != ""){
		#Se usuario e senha não forem nulos, verifica se existem no banco de dados
		$query = mysql_query("SELECT * FROM slogin_users WHERE Usuario = '" . $_SESSION['usuario'] . "'");
		$res = mysql_fetch_array($query);
		$linhas = mysql_num_rows($query);
		#Verifica se o usuario definido na sessão existe
		if($linhas != 0){
			#Se existir, verifica a senha definida na sessão
			if($_SESSION['senha'] != $res['Senha']){
				session_destroy();
				echo "Sessão inválida.<br>Erro 0791.<br><a href='$raiz'>Voltar</a>";
				exit;
			}
		}
		else{
			#Se não houver registros do usuário, encerra a sessão
			session_destroy();
			echo "Sessão inválida.<br>Erro 0790.<br><a href='$raiz'>Voltar</a>";
			exit;
		}
	}
}
else{
	session_destroy();
	echo "Sessão inválida.<br>Erro 0789.<br><a href='$raiz'>Voltar</a>";
	exit;
}
?>