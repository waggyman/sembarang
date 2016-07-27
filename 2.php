<?php
// $file=fopen("test.txt", "r");
// while(!feof($file)){
//   echo fgetc($file);
// };
// fclose($file);
?>
<html>
<head>
<title>File Upload and view With PHP and MySql</title>
</head>
<body>
<form action="post.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" />
<button type="submit" name="btn-upload">upload</button>
</form>
</body>
</html>
