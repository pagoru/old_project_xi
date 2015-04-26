<?php
function MYSQL_open($DataBase, $query) {

	$LOGIN_enlace = mysql_connect(HOST, USER, PASSWORD);
	$LOGIN_bd_seleccionada = mysql_select_db($DataBase, $LOGIN_enlace);
	return mysql_query($query, $LOGIN_enlace);
	mysql_close($LOGIN_enlace);

}
?>