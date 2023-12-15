<?php 

    $servername = "sql12.freesqldatabase.com";
    $username = "sql12670567";
    $password = "67TChvYUHP";
    $dbname = "sql12670567";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } 

?>