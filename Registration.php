<?php
    if(isset($_POST['registrationBtn'])){
        require_once "admin/DatabaseConnect.php";
        
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phonenumber = $_POST['phonenumber'];

        $sql = "INSERT INTO user(user_fullname, user_email, user_password, user_address, user_phonenumber)
                VALUES('$fullname', '$email', md5('$password'), '$address', '$phonenumber')";
        $result = $conn -> query($sql);

        if($result){
            header("Location: index.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User registration</title>
    <script src="JavaScript/JSscript.js"></script>
    <style>
        #userTH{
            padding: 2%;
            text-align: center;
            font-size: large;
        }
        #title{
            background-color: black;
            color: white;
        }
        #thtitle{
            padding: 5%;
        }
        #item{
            width: 48%;
            padding: 2.5% 12%;
        }
        #box{
            padding-left: 10%;

        }
        #registration{
            background-color: black;
            color:white;
        }

    </style>
</head>
<body>
    <form action="" method="POST" onsubmit="return checkUserRegistration()">
        <table style="background-color: white; width: 55%; margin: auto; margin-left: 28%; border-bottom: 1px solid black;">
            <tr id="thtitle">
                <th colspan="2" id="title">USER REGISTRATION</th>
            </tr>
            <tr>
                <td id="item">Full name</td>
                <td id="box"><input type="fullname" name="fullname" id="fullname" placeholder="Type your fullname"></td>
            </tr>
            <tr>
                <td id="item">Email</td>
                <td id="box"><input type="email" name="email" id="email" placeholder="Type your email"></td>
            </tr>
            <tr>
            <tr>
                <td id="item">Phone number</td>
                <td id="box"><input type="text" name="phonenumber" id="phonenumber" placeholder="Type your phone number"></td>
            </tr>
                <td id="item">Password</td>
                <td id="box"><input type="password" name="password" id="password" placeholder="Set your password"></td>
            </tr>
            <tr>
                <td id="item">Retype password</td>
                <td id="box"><input type="password" name="password2" id="password2" placeholder="Retype your password"></td>
            </tr>
            <tr>
                <td id="item">Address</td>
                <td id="box"><input type="text" name="address" id="address" style="width: 80%" placeholder="Retype your address" ></td>
            </tr>
            <tr id="userRegistration">
                <td colspan="2" style="padding: 2% 40%;">
                <br>
                    <input type="submit" value="Registration" id="registration" name="registrationBtn" placeholder="Retype your password" >
                </td>
            </tr>
        </table>
    </form>
</body>
</html>