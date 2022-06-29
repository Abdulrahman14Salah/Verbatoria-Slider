
<?php 
$dsn = 'mysql:host=localhost;dbname=test';
$user = 'root';
$pass = '';
$options = array(
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
  $db = new PDO($dsn, $user, $pass, $options);
  $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $q = "INSERT INTO `students` (`id`,`name`, `email`) VALUES ('1','abdulrahman', '3a.sala7@Gmail.com')";
  $db->exec($q);
}
catch(PDOException $e) {
  echo 'FAILED'. $e->getMessage();
}
?> 

<!DOCTYPE html>
<html>
  <body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      Select image to upload:
      <input type="file" name="fileToUpload" id="fileToUpload" />
      <input type="submit" value="Upload Image" name="submit" />
    </form>
  </body>
</html>
<?php
$target_file = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
?>