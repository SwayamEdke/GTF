<?php
session_start();
    $uname = $_SESSION['usname'];
    $cookie = $_COOKIE['score'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "microproject";

        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            echo "Connection Failed!";
        } else {
            $qry = "INSERT INTO `micro` (`Name`, `Score`, `Date_Time`) VALUES ('$uname', '$cookie', current_timestamp());";
            $result = mysqli_query($conn, $qry);
            header("Location:microproject.php");
        }
        session_destroy();
?>