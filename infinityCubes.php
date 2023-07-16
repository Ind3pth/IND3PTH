<?php
    include_once 'dbh.php';

    $first = $_POST['fname'];
    $last = $_POST['lname'];
    $colour = $_POST['colour'];
    $colour2 = $_POST['colour2'];

    $sql = "INSERT INTO `infinity cubes` (fname, lname, colour, colour2) VALUES ('$first', '$last', '$colour', '$colour2');";
    mysqli_query($conn, $sql);

    header("location: results.html");