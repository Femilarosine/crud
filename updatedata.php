<?php
    require_once "conn.php";
    if(isset($_POST["ename"]) && isset($_POST["dob"]) && isset($_POST["age"]) && isset($_POST["gender"]) && isset($_POST["phone_no"]) && isset($_POST["email"]) && isset($_POST["place"])){
        $name = $_POST['ename'];
        $date = $_POST['dob'];
        $age1 = $_POST['age'];
        $genders = $_POST['gender'];
        $phone = $_POST['phone_no'];
        $mail = $_POST['email'];
        $address = $_POST['place'];
        $image = basename($_FILES["image"]["name"]);
        if (isset($_FILES["image"])) {
           
            $target_dir = "uploads/"; // Directory where images are stored
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
            // Check if the file is an actual image
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check === false) {
                echo "File is not an image.";
                exit;
            }
      
    
        // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
        }
    
        $sql = "UPDATE employees_1 SET 
            `ename` = '$name',
            `dob` ='$date',
            `age` ='$age1',
            `gender` ='$genders',
            `phone_no` ='$phone',
            `email` ='$mail',
            `place` ='$address',
            `image` ='$image'
            WHERE eid = " . $_GET["eid"];
   

            //  print_r($target_dir);exit;

        if (mysqli_query($conn, $sql)) {
            header("location: login1.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
?>
