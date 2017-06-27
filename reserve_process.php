<?php
 ob_start();
 session_start();
 require_once 'db_connect.php';
 
 $query = "INSERT INTO a (col1, col2) VALUES ('".mysql_real_escape_string($_POST['firstname'])."',
'".mysql_real_escape_string($_POST['lastname'])."')";
 $insert_query = mysql_query($query);

 ?>