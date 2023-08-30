 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    </head>
<body>

  <table class='table table-info'>
      <thead>
          <tr>
              <th>Name</th>
              <th>DOB</th>
              <th>Age</th>
              <th>Gender</th>
              <th>Phoneno</th>
              <th>Mail</th>
              <th>Place</th>
              <th>Image</th>
          </tr>
      </thead>
      <?php
        require_once "conn.php";
         $query = "SELECT * FROM `employees_1` ";
           $result = $conn->query($query);
 
         while ($row = mysqli_fetch_array($result)) {
             ?>
             <tr>
                 <td><?php echo $row["ename"] ?></td>
                 <td><?php echo $row["dob"] ?></td>
                 <td><?php echo $row["age"] ?></td>
                 <td><?php echo $row["gender"] ?></td>
                 <td><?php echo $row["phone_no"] ?></td>
                 <td><?php echo $row["email"] ?></td>
                 <td><?php echo $row["place"] ?></td>
                 <td><img width="10%" height="10%" src="./uploads/<?php echo $row['image']; ?>"></td>
                
             </tr>
        <?php
         }
      ?>
  </table>

 <a href='login1.php'><button id='back' style="background-color: black;border-radius: 20px;padding: 10px;">Back</button></a>
</body>
</html>
