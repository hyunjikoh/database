<?php
 ob_start();
 session_start();
 require_once 'db_connect.php';

 
 $insert_query = mysql_query($query);
 $query = "INSERT INTO a(col) VALUES('";
 $query .= $_POST['roomType'];
 $query .= "');";

 mysql_query($query);

 ?>