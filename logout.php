<?php
################################################################
#Slogin Kernel Vers�o 6.5.1                                    #
#Compila��o 311220121938                                       #
#Copyright Sandrinho Info                                      #
#Este c�digo � disponibilizado sob a licen�a                   #
#Creative Commons (Para redestribuir, � necess�ria a men��o do #
#Autor).                                                       #
################################################################
//Arquivo logout.php
#Inclui o arquivo de configura��o do sistema
require_once "conf/desc.php";
#Faz procedimento da sess�o
@session_start();
#Encerra a sess�o
session_destroy();
#Redireciona para a p�gina raiz
header("Location:$raiz");
?>