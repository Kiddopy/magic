<?php

$conn = mysql_connect("127.0.0.1","kiddopy","") 
			or die("Erro");

@mysql_select_db("magic",$conn);
	
?>