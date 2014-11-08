<?php
include("includes/html_codes.php");
session_start();
 $my_id=$_SESSION['user_id'];
 $date = date('y/m/d - h:i:s');  
 $updatelog = mysql_query("UPDATE users SET LastAcessDate='$date' WHERE user_id=$my_id") or die( "<b>Could't update data base.");	  
 session_destroy();
header('Location:index.php');
?>
