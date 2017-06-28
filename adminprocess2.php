<?php
 ob_start();
 session_start();
 require_once 'db_connect.php';

 $branch = $_POST['branch']; //번호
 $roomnum = $_POST['roomnum']; //번호
 mysql_query("delete from room where branchId = $branch and roomNum = $roomnum");
 ?>
     
  <script>location.href="adminhome.php"</script>