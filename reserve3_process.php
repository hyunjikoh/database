<?php
 ob_start();
 session_start();
 require_once 'db_connect.php';

 mysql_query("INSERT INTO temp3 (roomservice,brunch) VALUES ('".$_POST['service']."','".$_POST['food']."')");
 
 ?>
     
  <script>location.href="result.php?region=<?php echo $_GET['region'];?>"</script>