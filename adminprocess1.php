<?php
 ob_start();
 session_start();
 require_once 'db_connect.php';

 $branch = $_POST['branch']; //번호
 $roomnum = (int) $_POST['roomnum']; //번호
 $type = (int)$_POST['roomtype']; //번호
 mysql_query("UPDATE room SET typeId= $type where branchId = $branch and roomNum = $roomnum");
 ?>
     
  <script>
   location.href="adminhome.php"</script>