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
      $link = $_POST['link'];
      $emp_id = $_SESSION['userID'];

      global $database;
      $conn = $database->getConnection();
      
      if ($id == '') {
        $conn->exec("INSERT INTO G10_Advertisement_info(name, status, add_by_emp) 
                      VALUES('$name', '$status', '$emp_id')");
        $conn->exec("INSERT INTO G10_Advertisement_link(id, url)
                      VALUES((SELECT MAX(id) FROM G10_Advertisement_info),'$link')");
        $conn->exec("INSERT INTO G10_Advertisement_time(id, start_date, end_date)
                      VALUES((SELECT MAX(id) FROM G10_Advertisement_info), '$start_date', '$end_date')");
        $conn->exec("INSERT INTO G10_Advertisement_banner(id, type, banner)
                      VALUES((SELECT MAX(id) FROM G10_Advertisement_info), '$type','$imgContent')");
        $conn->exec("INSERT INTO G10_Advertisement_log 
                      VALUES ((SELECT MAX(id) FROM G10_Advertisement_info), '$emp_id','".date('Y-m-d H:i:s')."', 'add')");
      }
      else {
        // $stmt = "UPDATE advertisement
        //         SET name = '$name', type = '$type', banner = '$imgContent', start_date = '$start_date',
        //             end_date = '$end_date', status = '$status';
        //         WHERE id = $id";
        $conn->exec("UPDATE G10_Advertisement_info
                    SET name = '$name', status = '$status'
                    WHERE id = $id");
        $conn->exec("UPDATE G10_Advertisement_link
                    SET url = '$link'
                    WHERE id = $id");
        $conn->exec("UPDATE G10_Advertisement_time
                    SET start_date = '$start_date', end_date = '$end_date'
                    WHERE id = $id");
        if($type != null) {
          $conn->exec("UPDATE G10_Advertisement_banner
                    SET type = '$type', banner = '$imgContent'
                    WHERE id = $id");
        }
        $conn->exec("INSERT INTO G10_Advertisement_log 
                      VALUES ('$id', '$emp_id','".date('Y-m-d H:i:s')."', 'edit')");
      }

      if(move_uploaded_file($_FILES['ads-banner']['tmp_name'], __DIR__.$target_file)) {
        echo "done";
      }
      else {
        echo "upload unsuccessful";
      }
      header("location: /emp/ads",  true,  301 );
      exit;
      
    }

  }
  elseif(isset($_POST['delete'])) {
    $id = $_POST['id'];
    $emp_id = $_SESSION['userID'];

    global $database;
    $conn = $database->getConnection();
    
    $stmt = "DELETE FROM G10_Advertisement_info WHERE id = $id";
    $conn->exec("INSERT INTO G10_Advertisement_log 
                VALUES ('$id', '$emp_id','".date('Y-m-d H:i:s')."', 'delete')");
    if($conn->exec($stmt)) {
      header("location: /emp/ads",  true,  301 );
      exit;
    }
  }
  
?>