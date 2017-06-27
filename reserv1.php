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
<TABLE BORDER='0' WIDTH='100%' HEIGHT='100%' ALIGN='CENTER' CELLSPACING='0' CELLPADDING='0'>
<TR>
<TD WIDTH='100%' HEIGHT='100%' ALIGN='CENTER'>
<table border='0' width='100%' height='100%' align='center' cellspacing='0' cellpadding='0'>
<tr>
<td width='100%' height='80' align='center' bgcolor='#353535'>
<font color='#FFFFFF'><strong>Hotel 예약 서비스</strong></font>
</td>

<tr>
<td width='100%' height='50' align='right'>
<?if($member[user_id]){?>
<a href="logout.php?logout"><strong>[로그아웃]</strong></a> 
<?}?>
</td>

<tr>
<td width='100%' height='30' align='center' bgcolor='#EDEDED'>원하는 지점을 선택해주세요</td>

<table class="table">
         <tr>
         <th> 숙박일 </th>
         <th> 위치 </th>
         <th> 날짜</th>
         </tr>
         <tr><td>서울</td>
         <td>부산</td>
         <td>경기</td></tr>                      
   <tr><td></td><td></td><td></td></tr>
</table>

</tr>
</table>
</TD>
</TR>
</TABLE>
</body>
</html>
