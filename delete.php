<?php
session_start();
include 'connection.php';

if(!$conn){
    die('Connection Failed' . mysqli_connect_error());
}
else{
    $id = $_GET['id'];

    $sql = "DELETE FROM information WHERE id = '$id'";

    $query_run = mysqli_query($conn, $sql);
    if($query_run){
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: list.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Student Data Failed to be Deleted";
        header("Location: list.php");
        exit(0);
    }
}
?>