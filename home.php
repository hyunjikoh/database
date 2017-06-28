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
    <td width='100%' height='30' align='center' bgcolor='#EDEDED'><strong>원하는 지점을 선택해주세요</strong></td>
  </TR>
  <TR HEIGHT='80px' >
    <td align='center'>
      <table class="table" align="center">
         <tr>
           <td align="center" HEIGHT="100px" WIDTH="100px"><a href="reserv1.php?region=1">서울</a></td>
           <td align="center" HEIGHT="100px" WIDTH="100px"><a href="reserv1.php?region=2">부산</a></td>
           <td align="center" HEIGHT="100px" WIDTH="100px"><a href="reserv1.php?region=3">제주</a></td></tr>                      
        <tr><td></td><td></td><td></td></tr>
      </table> 
    </td>
  </TR>
  <br><br>
</TABLE>
</body>
</html>
