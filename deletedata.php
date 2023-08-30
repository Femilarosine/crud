<?php
    require_once "conn.php";
    $eid = $_GET["eid"];
    $query = "DELETE FROM employees_1 WHERE eid = '$eid'";
    if (mysqli_query($conn, $query)) {
        header("location: index.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
?>