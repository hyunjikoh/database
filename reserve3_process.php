<?php
 ob_start();
 session_start();
 require_once 'db_connect.php';
 
 //$temps=$_COOKIE["ID"];
 
 mysql_query("INSERT INTO temp3 (servicetype,brunchtype) VALUES ('".$_POST['service']."','".$_POST['food']."')");
 //mysql_query("INSERT INTO reservation (bookingId,userEmail) VALUES ('','$temps')");
 
 ?>
     
  <script>location.href="result.php?region=<?php echo $_GET['region'];?>"</script>