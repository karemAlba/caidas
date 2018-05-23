<?php
$conexion = mysql_connect("localhost","root","chief117") or die (" Error de host.");
$base = mysql_select_db ("falls") or die ("Error de conexión a la base de datos.");
mysql_query("SET NAMES'utf8'");
?>