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
</head>
<body>
<table>
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
        <?php while($rows = mysqli_fetch_array($result)){?>
        <tr>
			<td><?php echo $rows['fname'];?></td>
			<td><?php echo $rows['lname'];?></td>
			<td><?php echo $rows['email'];?></td>
            <td><?php echo $rows['areaCode'];?></td>
			<td><?php echo $rows['phoneNumber'];?></td>
			<td><?php echo $rows['address1'];?></td>
            <td><?php echo $rows['address2'];?></td>
            <td><?php echo "<a type='button' class='btn btn-danger' href='delete.php?id=$rows[id]'>Delete</a>";}?></td>

        </tr>
    </table>
</body>
</html>