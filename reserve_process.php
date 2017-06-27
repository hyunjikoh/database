<?php
 ob_start();
 session_start();
 require_once 'db_connect.php';
 
 //$query = "INSERT INTO  (col1) VALUES ('".mysql_real_escape_string($_POST['room'])."')";
 $posted = array_unique($_POST['room']);
  foreach($posted as $value){
    print $value;
 }
 $insert_query = mysql_query($query);

 ?>