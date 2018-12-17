 <?php
$klein->respond('GET', '/promotion/add', function($request, $response, $service, $app, $valiator) {
    $service->title = "Add Promotion";
    $service->bootstrap3 = false;
    $service->render("layouts/group8/addpromotion.php");
    echo "dasd";
});

    $klein->respond('POST', '/promotion/add', function($request, $response, $service, $app, $valiator) {
        $service->title = "Add Promotion";
        $service->bootstrap3 = false;
        // $service->render("layouts/group8/addpromotion.php");
        // echo "adsdaa";
        $data = json_decode($request->body(), true);

        // $response->dump($request->files()->promotion_pic);
        // $response->sendBody();
        // die;
   

        $target_dir = "/uploads/";
        $target_file = $target_dir . basename($_FILES["promotion_pic"]['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if($_FILES["promotion_pic"] != null ) {
            $check = getimagesize($_FILES["promotion_pic"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if ($_FILES["promotion_pic"] != null && file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($_FILES["promotion_pic"] != null && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }   
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        // if everything is ok, try to upload file
        } else {
            
          $name = $_POST['promotion_name'];
         $type = $imageFileType;
          $des= $_POST['promotion_des'];
          $dis= $_POST['promotion_dis'];
          $start_date = $_POST['promotion_start'];
        $end_date = $_POST['promotion_end'];
        $code= $_POST['promotion_code'];
        $imgContent = $target_dir . $_FILES["promotion_pic"]["name"];
        // $link = $_POST['link'];
    
          global $database;
          $conn = $database->getConnection();
          
        $conn->exec("INSERT INTO G08_Promo_main(PromoName,Description,Discount,PromoCode,StartDate,EndDate,PromoPic) 
                          VALUES('$name','$des','$dis','$code','$start_date','$end_date','$imgContent')");

    //   else {
    //     $stmt = "UPDATE advertisement
    //             SET name = '$name', type = '$type', banner = '$imgContent', start_date = '$start_date',
    //                 end_date = '$end_date', status = '$status';
    //             WHERE id = $id";  
    //     $conn->exec("UPDATE G10_Advertisement_info
    //                 SET name = '$name', status = '$status'
    //                 WHERE id = $id");
    //     $conn->exec("UPDATE G10_Advertisement_link
    //                 SET url = '$link'
    //                 WHERE id = $id");
    //     $conn->exec("UPDATE G10_Advertisement_time
    //                 SET start_date = '$start_date', end_date = '$end_date'
    //                 WHERE id = $id");
    //     if($type != null) {
    //       $conn->exec("UPDATE G10_Advertisement_banner
    //                 SET type = '$type', banner = '$imgContent'
    //                 WHERE id = $id");
    //     }
    //   }

      if(move_uploaded_file($_FILES['promotion_pic']['tmp_name'], __DIR__.$target_file)) {
        echo "done";
      }
      else {
        echo "upload unsuccessful";
      }
      header("location: /emp/group8",  true,  301 );
      exit;
      
    }
    die("HOH");
});
?>
