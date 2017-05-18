<?php

function sql_connect() {
	$sql_server="localhost";
	$sql_user="csu";
	$sql_passwd="ZWJmAa8b4ZaB-gEokg-_-ko6iQQrT8Jm";
	$sql_db="cs_string";
	
	$db_connection=mysql_connect("$sql_server", "$sql_user", "$sql_passwd") or die(mysql_error());
	mysql_select_db("$sql_db") or die(mysql_error());
};

?>
