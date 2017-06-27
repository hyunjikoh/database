r<html>
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
    <td width='100%' height='30' align='center' bgcolor='#EDEDED'><strong>룸서비스 여부</strong></td>
  </TR>
  <TR HEIGHT='80px' >
    <td align='center'>
      <table class="table" align="center">
         <tr>
           <td align="center" HEIGHT="100px" WIDTH="100px">거부</a></td>
           <td align="center" HEIGHT="100px" WIDTH="100px">와인</a></td>
           <td align="center" HEIGHT="100px" WIDTH="100px">요리</a></td>
           <td align="center" HEIGHT="100px" WIDTH="100px">타이마사지</a></td></tr>                      
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
           <td align="center" HEIGHT="100px" WIDTH="100px">한식</a></td>
           <td align="center" HEIGHT="100px" WIDTH="100px">양식</a></td>
           <td align="center" HEIGHT="100px" WIDTH="100px">중식</a></td></tr>                      
        <tr><td></td><td></td><td></td></tr>
      </table> 
    </td>
  </TR>
  <TR HEIGHT='30px' >
    <td width='100%' height='30' align='center' bgcolor='#DEB8B8'><font color='#FFFFFF'><a href="result.php">예약하기</a></td>
  </TR>
</TABLE>
</body>
</html>
