<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Membership Data</title>
    <link rel="stylesheet" href="stylesIndex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <table class="p-3 mb-2 bg-dark text-white" style="--bs-bg-opacity: .85;">
        <form action="update.php" method="get">
        <tr>
            <td colspan="2" class="">
                <img src="images/Transparent Car Club Logo.png" alt="Club logo" class="resize">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h5 class="center">Modify your Data</h5>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="fname">Name</label>
            </td>
        </tr>
        <tr>
            <td class="stretch">
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ;?>">
                <input type="text" name="fname" id="fname" value="<?php echo $_GET['fname'];?>">
            </td>
            <td class="stretch">
                <input type="text" name="lname" id="lname" value="<?php echo $_GET['lname'];?>">
            </td>
        </tr>
        <tr>
            <td><label for="fname">First Name</label></td>
            <td><label for="lname">Last Name</label></td>
            
        </tr>
        <tr>
            <td colspan="2"><br></td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="email">E-Mail</label>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="stretch">
                <input type="email" name="email" id="email" value="<?php echo $_GET['email'] ;?>">
            </td>
        </tr>
        <tr>
            <td colspan="2"><br></td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="area">Phone Number:</label>
            </td>
        </tr>
        <tr>
            <td class="stretch">
                <input type="text" name="areaCode" value="<?php echo $_GET['areaCode'] ;?>">
            </td>
            <td class="stretch">
                <input type="text" name="phoneNumber" value="<?php echo $_GET['phoneNumber'] ;?>">
            </td>
        </tr>
        <tr>
            <td><label for="area">Area Code</label></td>
            <td><label for="phoneNumber">Phone Number</label></td>
        </tr>
        <tr>
            <td colspan="2"><br></td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="address">Address:</label>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="stretch">
                <input type="text" name="address1" value="<?php echo $_GET['address1'] ;?>">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="address">Street Address</label>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="stretch">
                <input type="text" name="address2" value="<?php echo $_GET['address2'] ;?>">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="address2">Street Address Line 2</label>
            </td>
        </tr>
        <tr>
            <td colspan="2"><br></td>
        </tr>
        <tr>
            <td class="center">
                <input class="btn btn-danger" type="submit" value="Update">
            </td>
            <td class="center">
                <a class="btn btn-light" href="list.php">Back to List</a>
            </td>
        </tr>
        </form>
    </table>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>