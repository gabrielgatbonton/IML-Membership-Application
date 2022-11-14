<?php
session_start();
include 'connection.php';

if(!$conn){
    die("Connection Unsuccessfully");
}
else{
    $id = $_GET['id'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $email = $_GET['email'];
    $areaCode = $_GET['areaCode'];
    $phoneNumber = $_GET['phoneNumber'];
    $address1 = $_GET['address1'];
    $address2 = $_GET['address2'];

    $sql = "UPDATE information SET fname = '$fname', lname = '$lname', email = '$email', areaCode = '$areaCode', phoneNumber = '$phoneNumber' , address1 = '$address1', address2 = '$address2' WHERE id = '$id'";

    $query_run = mysqli_query($conn, $sql);
    if($query_run){
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: list.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Student Data Failed to be Updated";
        header("Location: list.php");
        exit(0);
    }
}