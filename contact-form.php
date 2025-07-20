<?php

    // database connection
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "nexcent";

    $con = mysqli_connect($host, $username, $password, $db);

    $uname = $_POST["name"];
    $uemail = $_POST["email"];
    $umessage = $_POST["message"];

    $query = "INSERT INTO contact_form(name, email, massage) VALUES('$uname', '$uemail', '$umessage')";

    $run = mysqli_query($con, $query);

    if(!$run){
        echo "<br>Submission Failed";
    }else {
        echo "<br>Submission Successful";
        header("Location: index.html");
    }

?>
