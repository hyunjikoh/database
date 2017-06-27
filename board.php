b<html>
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
<td width='100%' height='30' align='center' bgcolor='#EDEDED'>My SQL 데이터 생성</td>

<tr>
<td width='100%' height='200' align='left' valign='top' bgcolor='#FFFFFF'>
<form action='./test2.php' name='test' method='post'>
<input type='hidden' name='id' value='test'>
<li>아이디: <input type='text' name='user_id' size='10'>
<li>이름: <input type='text' name='name' size='10'>
<li>비밀번호: <input type='password' name='pw' size='10'>
<br><br>
-메모-<br>
<textarea name='memo' cols='100' rows='5'></textarea>
<br><br>
<input type='submit' value='전 송'>
</form>
</td>

<tr>
<td width='100%' height='50' align='left' valign='top' bgcolor='#FFFFFF'>&nbsp;</td>

<?


//쿼리문으로 데이터를 불러오기
$query= "select * from bbs_1 where id='test'";
mysql_query("set names utf8", $connect);
$result= mysql_query($query, $connect);
while($data= mysql_fetch_array($result)){

$date_Y= substr($data[regdate], 0,4); //년도
$date_m= substr($data[regdate], 4,2);  //월
$date_d= substr($data[regdate], 6,2);  //일
$date_h= substr($data[regdate], 8,2);  //시간
$date_i= substr($data[regdate], 10,2); //분
?>
<tr>
<td width='100%' height='50' align='left' valign='top' bgcolor='#FFFFFF'>
-이름: <?=$data[name]?> &nbsp; &nbsp; -아이디:<?=$data[user_id]?> &nbsp; &nbsp;  
      -date:<?=$date_Y?>년  <?=$date_m?>월 <?=$date_d?>일 <?=$date_h?>: <?=$date_i?><br>
-메모: <?=$data[memo]?> 
<hr size='0.1' />
</td>
<?}?>

<tr>
<td width='100%' height='100%' align='center' bgcolor='#FFFFFF'>&nbsp;</td>

</tr>
</table>
</TD>
</TR>
</TABLE>
</body>
</html>
