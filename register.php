<?php
include 'connection.php';

if(!$conn){
    die('Connection failed!' . mysqli_connect_error());
}
else{
    $fn = $_GET['fname'];
	$ln = $_GET['lname'];
    $email = $_GET['email'];
    $zipCode = $_GET['area'];
    $phoneNum = $_GET['phoneNumber'];
    $add1 = $_GET['address1'];
    $add2= $_GET['address2'];

    $sql = "INSERT INTO information(fname, lname, email ,areaCode, phoneNumber, address1, address2) VALUES('$fn', '$ln', '$email' ,'$zipCode','$phoneNum', '$add1', '$add2')";
    if(mysqli_query($conn, $sql)){
        header("Location: index.php");
    }
}
?>