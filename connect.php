<?php
$connect = mysql_connect('localhost','root');
if(!$connect){
	die( 'Could not connect'.mysql_error() );
}

$db_selected = mysql_select_db("dvds");
if(!$db_selected){
	die( 'Could not select database'.mysql_error() );
}else{
   //echo "connected";
}
?>
