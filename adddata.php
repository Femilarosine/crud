<?php
    require_once "conn.php";
    if(isset($_POST['submit'])){
        // print_r($_POST);
         // print_r($_FILES['file']);
         // exit();
        $name = $_POST['ename'];
        $date = $_POST['dob'];
        $age1 = $_POST['age'];
        $genders = $_POST['gender'];
        $phone = $_POST['phone_no'];
        $mail = $_POST['email'];
        $address = $_POST['place'];
      
        if(isset($_FILES['image'])){
          $errors= array();
          $file_name = $_FILES['image']['name'];
          $file_size =$_FILES['image']['size'];
          $file_tmp =$_FILES['image']['tmp_name'];
          $file_type=$_FILES['image']['type'];
          $file_ext=(explode('.',$file_name));
                        
          if($file_size > 2097152){
             $errors[]='File size must be excately 2 MB';
          }
  
          if(empty($errors)==true){
             move_uploaded_file($file_tmp,"uploads/".$file_name);
          }else{
             print_r($errors);
          }
        }

        $files = $file_name;
   

        if($name != "" && $date != "" && $age1 != "" ){
            $sql = "INSERT INTO employees_1 (`ename`, `dob`, `age`, `gender`, `phone_no`, `email`, `place`,`image`) VALUES ('$name', '$date', '$age1','$genders','$phone','$mail','$address','$files')";
            $query_run = mysqli_query($conn, $sql);
            if ($query_run) {
                header("location: login1.php");
            } else {
                 echo "Something went wrong. Please try again later.";
            }
        }else{
            echo "Name, Age and DOB cannot be empty!";
        }
    }

?>
