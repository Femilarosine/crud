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
        <div class="container"><a href="add.php" tite="add" class="btn btn-primary">Add+</a>&nbsp&nbsp<a href="logout.php" tite="Logout" class="btn btn-danger">Logout</a></div>
    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>

                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Phoneno</th>
                    <th scope="col">Email</th>
                    <th scope="col">Place</th>
                    <!-- <th scope="col">Car</th> -->
                    <th scope="col">File</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">View</th>
                    
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "conn.php";
                        $sql_query = "SELECT * FROM employees_1";
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
                                // $Car = $row['car'];
                                $File = $row['image']
                               


                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $Id; ?></td>
                        <td><?php echo $Name; ?></td>
                        <td><?php echo $Dob; ?></td>
                        <td><?php echo $Age; ?></td>
                        <td><?php echo $Gender; ?></td>
                        <td><?php echo $Phone; ?></td>
                        <td><?php echo $Mail; ?></td>
                        <td><?php echo $Place; ?></td>
                       
                        <td><img width="20%" height="20%" src="uploads/<?php echo $File ?>"/></td>
            
                        <td><a href="edit.php?eid=<?php echo $Id; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="deletedata.php?eid=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
                         <td><a href="viewdata.php?eid=<?php echo $Id; ?>" class="btn btn-secondary">View</a></td>
                    </tr>
                    <?php
                            } 
                        } 


                    ?>
                </tbody>
              </table>
        </div>
    </section>
</body>

</html>


