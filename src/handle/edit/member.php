<?php include "/home/std/cs6520159/public_html/meth-shop/src/database-instance.php" ?>

<?php
  $stmt = $pdo->prepare("UPDATE member 
                         SET
                         password=?,
                         name=?,
                         address=?,
                         mobile=?,
                         email=?
                         WHERE username=?");
  $stmt->bindParam(1, $_POST['password']);
  $stmt->bindParam(2, $_POST['name']);
  $stmt->bindParam(3, $_POST['address']);
  $stmt->bindParam(4, $_POST['mobile']);
  $stmt->bindParam(5, $_POST['email']);
  $stmt->bindParam(6, $_POST['username']);

  if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
  $imageFileType = strtolower(pathinfo($_FILES['fileToUpload']['name'],PATHINFO_EXTENSION));
  $target_dir="/home/std/cs6520159/public_html/meth-shop/src/assets/member_photo/";
  $target_file = $target_dir . $_POST['username'].'.' . $imageFileType;
  echo "target file = ".$target_file."<br>";
  echo $_FILES["fileToUpload"]["tmp_name"]."<br>";
  $uploadOk = 1;

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

  // Check if file already exists
  if (file_exists($target_file)) {
    unlink($target_file);
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
     && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && $stmt->execute()) {  
      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      header("location: ".$_SERVER['HTTP_REFERER']);
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
  } else {
    if($stmt->execute()){
      echo "Member ".$_POST['username']." has been updated";
      header("location: ".$_SERVER['HTTP_REFERER']);
    }
  }

?>

