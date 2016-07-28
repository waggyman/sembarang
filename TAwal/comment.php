<?php
session_start();
$name=$_SESSION['user'];
$email=$_SESSION['email'];
?>
<html>
<head><title>comment</title></head>
<body>
  <form method="post" action="postment.php">
    Name:</br>
    <input type="text" name="name" value="<?php echo $name; ?>" readonly></br>
    Email:</br>
    <input type="email" name"email" value="<?php echo $email; ?>" readonly></br>
    Comment:</br>
    <textarea name="comment" rows="5"></textarea></br>
    <input type="submit" value="Submit!">
  </form>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="root";

$conn=mysql_connect($servername, $username, $password);
if(!$conn){
  die('couldnot connect :'.mysql_error());
}
mysql_select_db('NEWEB');
$sql="SELECT Name, Comment FROM comment;";
$retval=mysql_query($sql, $conn);
while($row = mysql_fetch_array($retval, MYSQL_NUM))
{
    echo "Name: {$row[0]} <br> ".
         "Comment: {$row[1]} <br> ";
}
?>
