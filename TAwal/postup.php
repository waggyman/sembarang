<?php
session_start();
//validation
if($_POST['password'] !== $_POST['repassword']){
  $_SESSION['ermsg']="your password is not same";
  header("Location:signup.php");

}
else{
$servername="localhost";
$username="root";
$password="root";

$conn=mysql_connect($servername, $username, $password);
if(!$conn){
  die('couldnot connect :'.mysql_error());
}
if(!get_magic_quotes_gpc()){
  $user=addslashes($_POST['user']);
  $pass=addslashes($_POST['password']);
}
else{
  $user=$_POST['user'];
  $pass=$_POST['password'];
}
$email=$_POST['email'];
mysql_select_db('NEWEB');
$sql="INSERT INTO signup (Name, Email, Password) ".
      "VALUES ('$user', '$email', '$pass');";
$cek=mysql_query($sql, $conn);
$_SESSION['email']=$email;


if(! $cek){
 die("kok gak bisa? ".mysql_error());
}
echo "bisa";
header("Location:login.php");
}
mysql_close();
