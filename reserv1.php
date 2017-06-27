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
$region = $_GET['region'];
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
  
  <form action="reserve1_process.php?region=<?php echo $_GET['region'];?>" method="post">
  <TR HEIGHT='30px' >
    <td width='100%' height='30' align='center' bgcolor='#EDEDED'><strong>숙박일을 선택해주세요</strong></td>
  </TR>
  <TR HEIGHT='80px' >
    <td align='center'>
      <table class="table" align="center">
         <tr>
           <td align="center" HEIGHT="100px" WIDTH="100px"><input type="date" name="date1" />~<input type="date" name="date2" /></td>
        <tr><td></td><td></td><td></td></tr>
      </table> 
    </td>
  </TR>
    <TR HEIGHT='30px' >
    <td width='100%' height='30' align='center' bgcolor='#EDEDED'><strong>ROOM 타입을 선택해주세요</strong></td>
  </TR>
    <TR HEIGHT='80px' >
    <td align='center'>
      <table class="table" align="center">
         <tr>
           <td align="center" HEIGHT="100px" WIDTH="100px">Single(1~2)</td>
           <td><input type="radio" name="roomType" value="Single"></td>
           <td align="center" HEIGHT="100px" WIDTH="100px">Deluxe(2~3)</td>
           <td><input type="radio" name="roomType" value="Deluxe"></td>
           <td align="center" HEIGHT="100px" WIDTH="100px">Superior(3~4)</td>
           <td><input type="radio" name="roomType" value="Superior"></td></tr>
        <tr><td></td><td></td><td></td></tr>
      </table> 
    </td>
  </TR>
  <TR HEIGHT='30px' >
    <td width='100%' height='30' align='center' bgcolor='#DEB8B8'><font color='#FFFFFF'><button type="submit" value = "submit">확인</button></td>
  </form>
  </TR>
</TABLE>
</body>
</html>
