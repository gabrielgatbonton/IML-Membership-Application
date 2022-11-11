<?php
include 'connection.php';

if(!$conn){
    die('Connection Failed' . mysqli_connect_error());
}
else{
    $getData = "SELECT * FROM information";
    $result = $conn->query($getData);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Queries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .center{
            text-align: center;
        }
        body{

        }
    </style>
</head>
<body>
<table class="table table-striped table table-hover">
    <thead class="table-dark">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Postal/Zip Code</th>
            <th>Phone Number</th>
            <th>Street Address</th>
            <th>Street Address Line 2</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
        <?php while($rows = mysqli_fetch_array($result)){?>
        <tr>
			<td><?php echo $rows['fname'];?></td>
			<td><?php echo $rows['lname'];?></td>
			<td><?php echo $rows['email'];?></td>
            <td><?php echo $rows['areaCode'];?></td>
			<td><?php echo $rows['phoneNumber'];?></td>
			<td><?php echo $rows['address1'];?></td>
            <td><?php echo $rows['address2'];?></td>
            <td><?php echo "<a type='button' class='btn btn-light' href='edit.php?id=$rows[id]&lname=$rows[lname]&fname=$rows[fname]&email=$rows[email]&areaCode=$rows[areaCode]&phoneNumber=$rows[phoneNumber]&address1=$rows[address1]&address2=$rows[address2]'>Edit</a>";?></td>
            <td><?php echo "<a type='button' class='btn btn-danger' href='delete.php?id=$rows[id]'>Delete</a>";}?></td>
        </tr>
    </table>
    <div class="center"><a class="btn btn-warning" href="index.php">Create Again!</a></div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>