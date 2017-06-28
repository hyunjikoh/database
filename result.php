<?php 
    ob_start();
    session_start();
    require_once 'db_connect.php';
 
    $temps=$_COOKIE["ID"]; 
    mysql_query("INSERT INTO reservation (bookingId,userEmail) VALUES ('','$temps')");
    mysql_query("update reservation set branchId = '".$_GET['region']."'where userEmail = '$temps'");
    
    $temp1=mysql_query("select * from temp1 order by time desc limit 1;");
    $row1=mysql_fetch_array($temp1);
    mysql_query("update reservation set dor = '".$row1['dor']."',dco = '".$row1['dco']."', roomType = '".$row1['roomtype']."' where userEmail = '$temps'");
    
    $temp2=mysql_query("select * from temp2 order by time desc limit 1;");
    $row2=mysql_fetch_array($temp2);
    mysql_query("update reservation set roomNum = '".$row2['roomNum']."'where userEmail = '$temps'");

    $temp3=mysql_query("select * from temp3 order by time desc limit 1;");
    $row3=mysql_fetch_array($temp3);
    mysql_query("update reservation set servicetype = '".$row3['servicetype']."', brunchtype = '".$row3['brunchtype']."'where userEmail = '$temps'");
    
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
<script>window. alert('예약되었습니다!');</script>
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
         <?if($member[user_id]){
         ?<p style= "text-aligh: center;">환영합니다! <?=$_COOKIE["ID"]?>님</p><?
         ?><a href="logout.php?logout"><strong>[로그아웃]</strong></a> 
         <?}?>
        </td>
      </tr>
    </table>
   </TD>
  </TR>
  <TR HEIGHT='30px' >
    <td width='100%' height='30' align='center' bgcolor='#EDEDED'><strong>예약 확인</strong></td>
  </TR>
  <TR HEIGHT='80px' >
    <td align='center'>
      <table class="table" align="center">
         <tr>
            <td align="center" HEIGHT="100px" WIDTH="100px">아이디</a></td></tr>    
                    
        <tr><td></td><td></td><td></td></tr>
      </table> 
    </td>
  </TR>
  <TR HEIGHT='30px' >
    <td width='100%' height='30' align='center' bgcolor='#DEB8B8'><font color='#FFFFFF'><a href="home.php">홈으로</a></a></td>
  </TR>
</TABLE>
</body>
</html>
