<?php
 session_start();
 if (!isset($_SESSION['user'])) {
  setcookie("ID","",time()-3600*24); //쿠키 지우기
  setcookie("PASSWORD","",time()-3600*24);
  header("Location: index.php");
 } else if(isset($_SESSION['user'])!="") {
  header("Location: home.php");
 }
 
 if (isset($_GET['logout'])) {
  unset($_SESSION['user']);
  session_unset();
  session_destroy();
  //setcookie("COOKIES","",0,"/"); //쿠키 지우기
  header("Location: index.php");
  exit;
 }