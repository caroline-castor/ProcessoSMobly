<?php
#Faz a conexão com o banco de dados
	# LOCALHOST
	# USER: root
	# PASS: root
$link = mysqli_connect('localhost', 'root', 'root');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}

?>