<?php
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
//proses
$servername="localhost";
$username="root";
$password="root";

$conn=mysql_connect($servername, $username, $password);
if(!$conn){
  die('couldnot connect :'.mysql_error());
}
mysql_select_db('NEWEB');
$sql="INSERT INTO comment (Name, Email, Comment) ".
     "VALUES ('$name', '$email', '$comment');";
$retval=mysql_query($sql, $conn);
if(!$retval){
  die('why? '.mysql_error());
}
echo "we did it!";
header("Location:comment.php");
