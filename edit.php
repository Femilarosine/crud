<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MYSQL - CRUD</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <h1 style="text-align: center;margin: 50px 0;">Update Data</h1>
        <div class="container">
            <?php 
                require_once "conn.php";
                $sql_query = "SELECT * FROM employees_1 WHERE eid = ".$_GET["eid"];
                if ($result = $conn ->query($sql_query)) {
                    while ($row = $result -> fetch_assoc()) { 

                        $Id = $row['eid'];
                        $Name = $row['ename'];
                        $Dob = $row['dob'];
                        $Age = $row['age'];
                        $Gender = $row['gender'];
                        $Phone = $row['phone_no'];
                        $Mail = $row['email'];
                        $Place = $row['place'];
                        $File = $row['image'];
            ?>
                            <form action="updatedata.php?eid=<?php echo $Id; ?>"  enctype="multipart/form-data" method="post">
                                <div class="row">
                                        <div class="form-group col-lg-12">
                                            <label for="">Name</label>
                                            <input type="text" name="ename" id="name" class="form-control" value="<?php echo $Name ?>" required>

                                           <label for="">Birthday:</label>
                <input type="date" id="birthday" name="dob" class="form-control" value="<?php echo $Dob ?>" >

                <label>Age:</label>
            <input type="number" name="age" max="40" min="18" class="form-control" value="<?php echo $Age ?>">

            <label>Gender :</label>
            <input type="radio" name="gender" value="Male" 
            <?php echo ($Gender=='Male')?'checked':'' ?>> Male 
            <input type="radio" name="gender" value="Female" 
            <?php echo ($Gender=='Female')?'checked':'' ?>> Female 
            <input type="radio" name="gender" value="Other" 
            <?php echo ($Gender=='Other')?'checked':'' ?>> Other<br>

            <label>Phone :</label>
            <input type="tel" name="phone_no" size="12" class="form-control" value="<?php echo $Phone?>" />

            
            <label>Email:</label>
               <input type="Email" name="email" class="form-control" value="<?php echo $Mail?>"><br>

              <label>Place :</label>
              <input type="text"  name="place" class="form-control" value="<?php echo $Place?>">
<!-- 
  

                                       <label for="">Grade</label>
                                            <select name="grade" id="grade" class="form-control" required >
                                                <option value="">Select a Grade</option>
                                                <option value="grade6" <\\?php if($Grade == "grade6"){ echo "Selected"; } ?> >Grade 6</option>
                                                <option value="grade7" <\\?php if($Grade == "grade7"){ echo "Selected"; } ?> >Grade 7</option>
                                                <option value="grade8" <//?php if($Grade == "grade8"){ echo "Selected"; } ?> >Grade 8</option>
                                                <option value="grade9" <//?php if($Grade == "grade9"){ echo "Selected"; } ?> >Grade 9</option>
                                                <option value="grade10" <//?php if($Grade == "grade10"){ echo "Selected"; } ?> >Grade 10</option>
                                            </select>
                                        
                                       
                                        </div>-->

                                    <label class="text-info">Select Image File to Upload:</label><br>
                                    <input type="file" name="image" id="file" class="form-control"><br>
                                    <img width="10%" height="10%" src="uploads/<?php echo $File ?>"/>

                                        <div style="display: grid;align-items:  flex-end;">
                                            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Update">
                                        </div>
                                </div>
                            </form>
            <?php 
                    }
                }
            ?>
        </div>
    </section>
</body>

</html>

<!-- $page_data['file_name'] = $_FILES["file_name"]["name"];
$oldfile = $_POST['old'];
$file = $_FILES["file_name"]["name"];
  if($file != "") {
     move_uploaded_file($_FILES["file_name"]["tmp_name"], "uploads/parents_image/" . $_FILES["file_name"]["name"]); 
   } else {
     $file = $oldfile;
     $page_data['file_name'] = $this->input->post('file_name');
   } -->