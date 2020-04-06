<?php
################################################################
#Slogin Kernel Vers�o 6.5.1                                    #
#Compila��o 311220121938                                       #
#Copyright Sandrinho Info                                      #
#Este c�digo � disponibilizado sob a licen�a                   #
#Creative Commons (Para redestribuir, � necess�ria a men��o do #
#Autor).                                                       #
################################################################
//Arquivo conf/desc.php
/* Nota sobre o arquivo desc.php
Esse arquivo N�O salva informa��es sobre conex�o a banco de dados e etc.
A fun��o desse script � apenas conduzir as informa��es de conex�o.
Para modificar qualquer par�metro de navega��o acesse, com um navegador web, a pasta
"conf", insira "slogin651" como nome de usu�rio e "gingerbread" como senha e siga as instru��es
mostradas na p�gina. */
//Rotina de localiza��o do arquivo de configura��o
if(!file_exists("c/conf.txt")){
	if(!file_exists("conf/c/conf.txt")){
		if(!file_exists("../conf/c/conf.txt")){
			echo "O arquivo de configura��o n�o existe.<br>Acesse a pasta ''conf'', autentique-se e defina as configura��es de conex�o.";
			exit;
		}
		else{
			$file = "../conf/c/conf.txt";
		}
	}
	else{
		$file = "conf/c/conf.txt";
	}
}
else{
	$file = "c/conf.txt";
}
//Rotina de leitura das configura��es
$set = file($file);
$raiz = chop($set[4]);
$home = $raiz . "/home";
//Rotina de conex�o ao banco de dados
$conn = mysqli_connect(chop($set[0]),chop($set[1]),chop($set[2])) or die (mysqli_error());
$db = mysqli_select_db(chop($set[3]),$conn) or die (mysqli_error());
?>