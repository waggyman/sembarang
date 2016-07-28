<?php
session_start();
$user=$_POST['username'];
$pass=$_POST['password'];
//proccess
$servername="localhost";
$username="root";
$password="root";

$conn=mysql_connect($servername, $username, $password);
if(!$conn){
  die('couldnot connect :'.mysql_error());
}

$sql="SELECT * FROM signup WHERE Username=$user and Password=$pass;";
$result=mysql_query($sql, $conn);
$numrows=mysql_num_rows($result);
if($numrows > 0){
  echo "WELCOME ".$user."";
}
else {
  $_SESSION['msger']="wrong password or username";
  header("Location:login.php");
}
