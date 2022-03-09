<?php

    echo $std_name = $_POST['sname'];
    echo $std_address = $_POST['saddress'];
    echo $std_class = $_POST['class'];
    echo $std_phone = $_POST['sphone'];

    $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");

    $sql = "INSERT INTO student(sname, saddress, sclass, sphone)  VALUES('{$std_name}', '{$std_address}','{$std_class}', '{$std_phone}')" ;

    $result = mysqli_query($conn, $sql) or die("query unsuccessfull");

    echo "$result";
    header("Location: http://localhost/crud/index.php");

    mysqli_close($conn);
?>