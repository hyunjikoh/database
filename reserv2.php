<?php
 ob_start();
 session_start();
 require_once 'db_connect.php';
 $region = $_GET['region'];
 ?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<title>HJ DB PROJECT</title>
</head>
<body>
<?
include ("db_connect.php");
$connect= dbconn();
$member= member();
?>
<TABLE BORDER='0' WIDTH='100%' ALIGN='CENTER' CELLSPACING='0' CELLPADDING='0'>
  <TR HEIGHT='30px' >
   <TD WIDTH='100%' ALIGN='CENTER'>
    <table border='0' width='100%' align='center' cellspacing='0' cellpadding='0'>
      <tr>
       <td width='100%' height='80' align='center' bgcolor='#353535'>
        <font color='#FFFFFF'><strong>Hotel 예약 서비스</strong></font>
       </td>
      </tr>
      <tr>
        <td width='100%' height='50' align='right'>
         <?if($member[user_id]){?>
           <a href="logout.php?logout"><strong>[로그아웃]</strong></a> 
         <?}?>
        </td>
      </tr>
    </table>
   </TD>
  </TR>
  <TR HEIGHT='30px' >
    <td width='100%' height='30' align='center' bgcolor='#EDEDED'><strong>ROOM을 선택해주세요</strong></td>
  </TR>
  <TR HEIGHT='80px' >
    <td align='center'>
          <?php $list_result = mysql_query("SELECT roomNum,roomstatus FROM room where branchId = $region"); ?>
          <table class="table">
            <tr>
              <th> ROOM </th>
              <th> 예약현황 </th>
              <th> 선택 </th>
            </tr>
            <?php
            while($row = mysql_fetch_array($list_result)) {
                if($row['roomstatus'] == NULL) $roomstatus = "예약가능";
                echo "<tr><td>".htmlspecialchars($row['roomNum'])."</td>
                          <td>".htmlspecialchars($roomstatus)."</td>
                          <td><input type=\"radio\" name=\"radio1\" value=\"radio_value\" checked></td></tr>";                        
                }
            ?>
            <tr><td></td><td></td><td></td></tr>
          </table> 
    </td>
  </TR>
  <TR HEIGHT='30px' >
    <td width='100%' height='30' align='center' bgcolor='#DEB8B8'><font color='#FFFFFF'><a href="reserv3.php?reserv3">확인</a></td>
  </TR>
</TABLE>
</body>
</html>
