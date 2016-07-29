<?php

// session_start();
// //
// // $_SESSION["user"]=$_POST["name"];
// // $_SESSION["pass"]=$_POST["email"];
// // echo "welcome".$_POST["name"]."";
// $_SESSION["user"]=$_POST["name"];
// $_SESSION["password"]=$_POST["password"];
//
// // $_SESSION["comment"][]=$_POST["comment"];
// // $_SESSION["nama"][]=$_POST["name"];
// // foreach ($_SESSION["nama"] as $val) {
// //   echo $val;
// //   echo "</br>";
// // };
// if(isset($_POST["name"])){
// $_SESSION["comments"][] = [
//   'name'=>$_POST['name'],
//   'comment'=>$_POST['comment'],
// ];
// };
// // if(isset($_SESSION["user"])){
// //   header("Location:comment.php");
// // }
// header("Location:comment.php");
if(isset($_POST['btn-upload']))
{

 $file = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="TAwal/img/$file";

move_uploaded_file($file_loc, $folder);

}
?>
<!-- <html>
<body>
  <img src="<?php echo $folder; ?>" />
</body>
</html> -->
