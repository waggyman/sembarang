<?php  ?>
<!-- <html>
<body> -->
<?php
// if(isset($_POST['add']))
// {
$servername = "localhost";
$username = "root";
$password = "root";
$conn = mysql_connect($servername, $username, $password);
if(! $conn){
  die('could not connect: ' . mysql_error());
}
// if(!get_magic_quotes_gpc())
// {
//   $lahir=addslashes($_POST['lahir']);
//   // $adress=addslashes($_POST['adress']);
// }
// else{
//   $lahir=$_POST['lahir'];
//   // $adress=$_POST['adress'];
// }
// $umur=$_POST['umur'];
mysql_select_db('hello_world');
      //fetching
// $sql="SELECT a.Id, a.Name, b.Umur from Data a, Dats b where a.Id = b.Order_ID";
      //membuat table
// $sql= "CREATE TEMPORARY TABLE Pesanan(".
//       "Produk varchar(30) NOT NULL, ".
//       "Banyak INT NOT NULL, ".
//       "Harga Decimal (18,2));";
      //input query
$sql="INSERT INTO Pesanan ".
     "(Produk, Banyak, Harga) ".
     "VALUES ".
     "('Bawang', 12, 50)";
$retval=mysql_query($sql, $conn);
if(!$retval){
  die('kok gak bisa yaa?' . mysql_error());
}
  // while ($row = mysql_fetch_assoc($retval)) {
  //   echo "ID :{$row['Id']}  <br> ".
  //        "Name: {$row['Name']} <br> ".
  //        "Umur: {$row['Umur']} <br> ".
  //       //  "Address: {$row['Adress']} <br> ".
  //       //  "Date : {$row['Date']} <br> ".
  //        "--------------------------------<br>";
  // }
echo "Ada table Baruuuuu cuuuyy~";
mysql_close($conn);
// }
// else
// {
  ?>
<!-- <form method="post" action="<?php //$_PHP_SELF ?>"> -->
<!-- Nama:
<br><input name="name" type="text" placeholder="nama">
<br>address:
<br><input name="adress" type="text" placeholder="address">
<br>date [YYYY-MM-DD]:
<br><input name="date" type="text" placeholder="yyyy-mm-dd"> -->
<!-- Tempat Lahir:
<br><input name="lahir" type="text" placeholder="tempat lahirmu dimana ?">
<br>Umur :
<br><input name="umur" type="number" placeholder="17-40">
<br><input name="add" type="submit" id="add" value="SUBMIT">
</form> -->
<?php
// }
?>

<!-- </body> -->
<!-- </html> -->
