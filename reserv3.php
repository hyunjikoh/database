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
  <form action="reserve3_process.php?region=<?php echo $_GET['region'];?>" method="post">
  <TR HEIGHT='30px' >
    <td width='100%' height='30' align='center' bgcolor='#EDEDED'><strong>룸서비스 여부</strong></td>
  </TR>
  <TR HEIGHT='80px' >
    <td align='center'>
      <table class="table" align="center">
         <tr>
           <td align="center" HEIGHT="100px" WIDTH="100px">거부</a></td>
           <td><input type="radio" name="service" value="거부"></td>
           <td align="center" HEIGHT="100px" WIDTH="100px">와인</a></td>
           <td><input type="radio" name="service" value="와인"></td>
           <td align="center" HEIGHT="100px" WIDTH="100px">요리</a></td>
           <td><input type="radio" name="service" value="요리"></td>
           <td align="center" HEIGHT="100px" WIDTH="100px">타이마사지</a></td>
           <td><input type="radio" name="service" value="타이마사지"></td></tr>                      
        <tr><td></td><td></td><td></td></tr>
      </table> 
    </td>
  </TR>
  <TR HEIGHT='30px' >
    <td width='100%' height='30' align='center' bgcolor='#EDEDED'><strong>조식 여부</strong></td>
  </TR>
  <TR HEIGHT='80px' >
    <td align='center'>
      <table class="table" align="center">
         <tr>
           <td align="center" HEIGHT="100px" WIDTH="100px">거부</a></td>
           <td><input type="radio" name="food" value="거부"></td>
           <td align="center" HEIGHT="100px" WIDTH="100px">한식</a></td>
           <td><input type="radio" name="food" value="한식"></td>
           <td align="center" HEIGHT="100px" WIDTH="100px">양식</a></td>
           <td><input type="radio" name="food" value="양식"></td>
           <td align="center" HEIGHT="100px" WIDTH="100px">중식</a></td>
           <td><input type="radio" name="food" value="중식"></td></tr>
        <tr><td></td><td></td><td></td></tr>
      </table> 
    </td>
  </TR>
  <TR HEIGHT='30px' >
    <td width='100%' height='30' align='center' bgcolor='#DEB8B8'><font color='#FFFFFF'><button type="submit" value = "submit">예약확인</button></td>
  </form>
  </TR>
</TABLE>
</body>
</html>
