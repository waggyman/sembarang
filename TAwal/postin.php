<?php
session_start();
$user=$_POST['email'];
$pass=$_POST['password'];
//proccess
$servername="localhost";
$username="root";
$password="root";

$conn=mysql_connect($servername, $username, $password);
if(!$conn){
  die('couldnot connect :'.mysql_error());
}
mysql_select_db('NEWEB');
$sql="SELECT * FROM signup WHERE Email='$user' and Password='$pass';";
$result=mysql_query($sql, $conn);
$numrows=mysql_num_rows($result);
if($numrows > 0){
  $row = mysql_fetch_array($result, MYSQL_NUM);
  $_SESSION['email']=$user;
  echo "WELCOME ".$user."";
  $_SESSION['user']=$row[1];

  header("Location:home.php");
}
else {
  $_SESSION['msger']="wrong password or username";
  header("Location:login.php");
}
