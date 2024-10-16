<?php include "/home/std/cs6520159/public_html/meth-shop/src/database-instance.php" ;
  session_start();

  //  echo __FILE__;
  $stmt= $pdo->prepare("INSERT INTO member (username, password, name, address, mobile, email) VALUES (?, ?, ?, ?, ?, ?)");
   $stmt->bindParam(1, $_POST['username']);
   $stmt->bindParam(2, $_POST['password']);
   $stmt->bindParam(3, $_POST['name']);
   $stmt->bindParam(4, $_POST['address']);
   $stmt->bindParam(5, $_POST['mobile']);
   $stmt->bindParam(6, $_POST['email']);

  $imageFileType = strtolower(pathinfo($_FILES['fileToUpload']['name'],PATHINFO_EXTENSION));
  $target_dir="/home/std/cs6520159/public_html/meth-shop/src/assets/member_photo/";
  $target_file = $target_dir . $_POST['username'].'.' . $imageFileType;
  $uploadOk = 1;

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

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
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
      // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

      if ( $_POST['from'] == 'register' ) {
        header("location: /~cs6520159/meth-shop/src/pages/index.php");
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['role'] = $_POST['user'];
      }
      // header("location: ".$_SERVER['HTTP_REFERER']."?username=".$_POST["username"]."&filter=true");
      
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
?>


