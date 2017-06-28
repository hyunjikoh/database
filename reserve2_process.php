<?php
 ob_start();
 session_start();
 require_once 'db_connect.php';

 mysql_query("INSERT INTO temp2 (roomNum) VALUES ('".$_POST['room']."')");
 
 ?>
     
  <script>location.href="reserv3.php?region=<?php echo $_GET['region'];?>"</script>