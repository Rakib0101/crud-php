<?php

    $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");

    $std_id = $_GET['id'];
    
    $sql = "DELETE FROM student WHERE sid = {$std_id}";

    $result = mysqli_query($conn, $sql) or die("query unsuccessfull");

    header("Location: http://localhost/crud/index.php")

?>