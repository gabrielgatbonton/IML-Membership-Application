<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <form action="update.php" method="get">
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
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id'] ;?>"><input type="text" name="fname" id="fname" value="<?php echo $_GET['fname'];?>"></td>
                <td><input type="text" name="lname" id="lname" value="<?php echo $_GET['lname'];?>"></td>
                <td><input type="email" name="email" value="<?php echo $_GET['email'] ;?>"></td>
                <td><input type="text" name="areaCode" value="<?php echo $_GET['areaCode'] ;?>"></td>
                <td><input type="text" name="phoneNumber" value="<?php echo $_GET['phoneNumber'] ;?>"></td>
                <td><input type="text" name="address1" value="<?php echo $_GET['address1'] ;?>"></td>
                <td><input type="text" name="address2" value="<?php echo $_GET['address2'] ;?>"></td>
            </tr>
            <tr>
                <td colspan="7">
                    <br>
                </td>
            </tr>
            <tr>
                <td><input class="btn btn-danger" type="submit" value="Update"></td>
                <td><a class="btn btn-light" href="list.php">Back to List</a></td>
            </tr>
        </form>
    </table>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>