<?php
################################################################
#Slogin Kernel Versгo 6.5.1                                    #
#Compilaзгo 311220121938                                       #
#Copyright Sandrinho Info                                      #
#Este cуdigo й disponibilizado sob a licenзa                   #
#Creative Commons (Para redestribuir, й necessбria a menзгo do #
#Autor).                                                       #
################################################################
//Arquivo logout.php
#Inclui o arquivo de configuraзгo do sistema
require_once "conf/desc.php";
#Faz procedimento da sessгo
@session_start();
#Encerra a sessгo
session_destroy();
#Redireciona para a pбgina raiz
header("Location:$raiz");
?>