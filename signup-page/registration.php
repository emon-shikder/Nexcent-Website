<?php

    // database connection
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "nexcent";

    $con = mysqli_connect($host, $username, $password, $db);

    $uname = $_POST["name"];
    $uemail = $_POST["email"];
    $upass = $_POST["password"];

    $query = "INSERT INTO user(name, email, password) VALUES('$uname', '$uemail', '$upass')";

    $run = mysqli_query($con, $query);

    if(!$run){
        echo "<br>Submission Failed";
    }else {
        echo "<br>Submission Successful";
        header("Location: ../index.html");
    }

?>
