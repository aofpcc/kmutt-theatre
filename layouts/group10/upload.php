<?php
  if(isset($_POST['submit'])) {
    $target_dir = "/uploads/";
    $target_file = $target_dir . basename($_FILES["ads-banner"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if($_FILES["ads-banner"]["name"] != null && isset($_POST["submit"])) {
        $check = getimagesize($_FILES["ads-banner"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if ($_FILES["ads-banner"]["name"] != null && file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($_FILES["ads-banner"]["name"] != null && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    // if everything is ok, try to upload file
    } else {
      $id = $_POST['id'];
      $name = $_POST['ads-name'];
      $type = $imageFileType;
      $imgContent = $target_dir . $_FILES["ads-banner"]["name"];
      $start_date = $_POST['start-date'];
      $end_date = $_POST['end-date'];
      $status = ($_POST['status']==null)? 'off':'on';

      global $database;
      $conn = $database->getConnection();
      
      if ($id == '') {
        $stmt = "INSERT INTO advertisement(name, type, banner, start_date, end_date, status) 
                VALUES('$name', '$type', '$imgContent', '$start_date', '$end_date', '$status')";
      } 
      else if($_FILES["ads-banner"]["name"] == null) {
        $stmt = "UPDATE advertisement
                SET name = '$name', start_date = '$start_date', end_date = '$end_date', status = '$status';
                WHERE id = $id";
      }
      else {
        $stmt = "UPDATE advertisement
                SET name = '$name', type = '$type', banner = '$imgContent', start_date = '$start_date',
                    end_date = '$end_date', status = '$status';
                WHERE id = $id";
      }

      if($conn->exec($stmt)) {
        if(move_uploaded_file($_FILES['ads-banner']['tmp_name'], __DIR__.$target_file)) {
          echo "done";
        }
        else {
          echo "upload unsuccessful";
        }
        header("location: /group10",  true,  301 );
        exit;
      }
      
    }

  }
  elseif(isset($_POST['delete'])) {
    $id = $_POST['id'];

    global $database;
    $conn = $database->getConnection();
    
    $stmt = "DELETE FROM advertisement WHERE id = $id";

    if($conn->exec($stmt)) {
      header("location: /group10",  true,  301 );
      exit;
    }
  }
  
?>