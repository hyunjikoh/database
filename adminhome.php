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
        <font color='#FFFFFF'><strong>관리자 페이지</strong></font>
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
  <form action="admin_process.php?region=<?php echo $_GET['region'];?>" method="post">
  <TR HEIGHT='30px' >
    <td width='100%' height='30' align='center' bgcolor='#EDEDED'><strong>룸 수정</strong></td>
  </TR>
  <TR HEIGHT='80px' >
    <td align='center'>
      <table class="table" align="center">
         <tr>
           <td align="center" HEIGHT="100px" WIDTH="100px">지점</a>
           <select name="branch">
           <option value=""></option>
           <option value=1 <?php if($_POST['branch']=="Seoul") echo "selected=selected"; ?>>Seoul</option>
           <option value=2 <?php if($_POST['branch']=="Busan") echo "selected=selected"; ?>>Busan</option>
           <option value=3 <?php if($_POST['branch']=="Jeju") echo "selected=selected"; ?>>Jeju</option>
           </select>
           </td>
           <td align="center" HEIGHT="100px" WIDTH="100px">방번호</a>
           <td><input type="radio" name="food" value="한식"></td>
           </td>
         </tr>
         <tr>
           <td align="center" HEIGHT="100px" WIDTH="100px">변경타입</a>
           <select name="roomtype">
           <option value=""></option>
           <option value=1 <?php if($_POST['roomtype']=="Single") echo "selected=selected"; ?>>Single</option>
           <option value=2 <?php if($_POST['roomtype']=="Deluxe") echo "selected=selected"; ?>>Deluxe</option>
           <option value=3 <?php if($_POST['roomtype']=="Superior") echo "selected=selected"; ?>>Superior</option>
           </select>
           </td>
         </tr>
        <tr><td></td><td></td><td></td></tr>
      </table> 
    </td>
    <td width='100%' height='30' align='center' bgcolor='#DEB8B8'><font color='#FFFFFF'><button type="submit" value = "submit">예약확인</button></td>
  </form>
  <form action="admin_process.php?region=<?php echo $_GET['region'];?>" method="post">
  </TR>
  <TR HEIGHT='30px' >
    <td width='100%' height='30' align='center' bgcolor='#EDEDED'><strong>룸 삭제</strong></td>
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
