<?php
 ob_start();
 session_start();
 require_once 'db_connect.php';

 mysql_query("INSERT INTO temp1 (dor, dco,roomtype) VALUES ('".$_POST['date1']."', '".$POST['date2']."','".$_POST['roomType']."')");
 
 ?>
     
  <script>location.href="reserv2.php?region=<?php echo $_GET['region'];?>&type=<?php echo $_POST['roomType'];?>"</script>