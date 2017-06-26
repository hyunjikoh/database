<?header("content-type:text/html; charset=UTF-8");
echo "
<head>
<title>TEST홈페이지-DB 테이블생성</title>
</head>";


 include ("../lib/db_connect.php");
 $connect= dbconn();


$sql="CREATE TABLE member
     (no int not null auto_increment,
	 PRIMARY KEY(no),
	 id char(15),
	 user_id char(15),
	 name char(15),
	 nick_name char(15),
	 birth char(8),
	 sex char(6),
	 tel char(8),
     email char(40),
	 pw char(32),
	 addr_1 varchar(100),
	 addr_2 varchar(100),
	 level int,
	 regdate char(20),
	 ip char(20)
      )"; 

if(!$sql)die("테이블 생성에 실패 하였습니다.".mysql_error());

if($sql)echo ("정상적으로 실행 되었습니다.");
mysql_query($sql,$connect);
?>