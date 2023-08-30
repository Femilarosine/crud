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
        <style>
     
        </style>
        
</head>

<body>
  
    <section>
           <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-1">
                <img src="logo.png" width="100px" height="100px">
                </div>
                <div class="col-lg-4 text-primary">
                    <h2 style="text-align: center;margin: 50px 0;">EMPLOYEE DETAILS FORM</h2>
                </div>
                <div class="col-lg-1"><img src="logo1.png" width="100px" height="100px">
                </div>
                <div class="col-lg-3"></div>
            </div>
     
            <form action="adddata.php" method="post" enctype="multipart/form-data">
               <div class="row">
                <div class="col-lg-3"></div>
                    <div class="form-group col-lg-6">

                        <label for="">Student Name</label>
                        <input type="text" name="ename" id="name" class="form-control" required><br>
            
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="dob" class="form-control"><br>
           
           <label>Age:</label>
            <input type="number" name="age" max="40" min="18" class="form-control"><br>
           
            <label>Gender :</label>
            <input type="radio" value="Male" name="gender" > Male 
            <input type="radio" value="Female" name="gender"> Female 
            <input type="radio" value="Other" name="gender"> Other<br><br>
           
            <label>Phone :</label>
            <input type="text" name="phone_no" class="form-control"/><br>
               
            <label>Email:</label>
            <input type="Email" name="email" class="form-control"><br>
                   
            <label>Place :</label>
            <input type="text"  name="place" class="form-control"><br>

          <!--   <label for="cars">Choose a car:</label>
             <select name="car" id="cars" multiple>
              <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="opel">Opel</option>
              <option value="audi">Audi</option>
            </select><br><br> -->
                   
            <label class="text-info">Select Image File to Upload:</label><br>
            <input type="file" name="image" id="file" class="form-control"><br>
                  
            <input type="submit" name="submit" id="submit" class="btn btn-primary">
                    </div>
                    <div class="col-lg-3">
                    </div>
               </div>
            </form>
        </div>
    </section>