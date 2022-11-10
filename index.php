<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>
    <link rel="stylesheet" href="stylesIndex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<form action="register.php" method="get">
    <table border="5">
        <tr>
            <td colspan="2" class="">
                <img src="images/Transparent Car Club Logo.png" alt="Club logo" class="resize">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h5 class="center">Club Registration Form</h5>
                <p class="center">Complete the form below to sign up for our membership perks.</p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="fname">Name</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="fname" id="fname">
            </td>
            <td>
                <input type="text" name="lname">
            </td>
        </tr>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            
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
            <td colspan="2">
                <input type="email" name="email" id="email">
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
            <td>
                <input type="number" name="area" id="area">
            </td>
            <td>
                <input type="number" name="phoneNumber">
            </td>
        </tr>
        <tr>
            <td>Area Code</td>
            <td>Phone Number</td>
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
            <td colspan="2">
                <input type="text" name="address1" id="address">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                Street Address
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="text" name="address2">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                Street Address Line 2
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="submit">
            </td>
        </tr>
    </table>
</form>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>