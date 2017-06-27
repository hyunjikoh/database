<?php
 ob_start();
 session_start();
 require_once 'db_connect.php';

 $query = "INSERT INTO temp(col) VALUES('";
 $query .= $_POST['roomType'];
 $query .= "');";
 mysql_query($query);
 
 ?>
  <script> location.href = "reserv2.php?region=<?php echo $_GET['region'];?>"; </script>