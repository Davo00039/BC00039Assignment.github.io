<?php
    $id = $_SESSION['user']['user_ID'];
    require_once "admin/DatabaseConnect.php";

    $getUserSQL = "SELECT * FROM user WHERE user_id='$id'";
    $res = $conn -> query($getUserSQL);
    if($res == true){
        $us = mysqli_fetch_assoc($res);
    }
?>

<?php
    if(isset($_POST['modifyBtn'])){
        $fullname = $_POST['fullname'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $address = $_POST['address'];
        $phonenumber = $_POST['phonenumber'];

        if($password == ""){
            $sql = "UPDATE user
                    SET user_fullname='$fullname', user_address='$address', user_phonenumber='$phonenumber'
                    WHERE user_id='$id'";
            $result = $conn -> query($sql);

            if($result){
                header("Location: index.php?page=Profile");
            }
        }
        else{
            if($password == $password2){
                $sql = "UPDATE user
                        SET user_fullname='$fullname', user_address='$address', user_phonenumber='$phonenumber', user_password=md5('$password')
                        WHERE user_id='$id'";
                $result = $conn -> query($sql);

                if($result){
                    header("Location: Logout.php");
                }
            }
            else{
                echo "Password and Retype password are different!";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User modify</title>
    <script src="JavaScript/JSscript.js"></script>
</head>
<body>
    <form action="" method="POST" onsubmit=" return checkUserModify()">
        <table width="80%" style="margin: auto; border-bottom: 1px solid black; margin-left: 18%;">
            <tr>
                <th colspan="2" Style="padding: 2% 0%; background-color:black; color: white;  font-size: larger;">USER MODIFICATION</th>
            </tr>
            <tr>
                <td width="45%" style="padding: 1.5% 20%">Full name</td>
                <td><input type="fullname" name="fullname" id="fullname" value="<?php echo $us['user_fullname']; ?>"></td>
            </tr>
            <tr>
                <td width="55%" style="padding: 1.5% 20%">Email</td>
                <td><input type="email" name="email" id="email" value="<?php echo $us['user_email']; ?>" readonly></td>
            </tr>
            <tr>
                <td width="55%" style="padding: 1.5% 20%">Phone number</td>
                <td><input type="phonenumber" name="phonenumber" id="phonenumber" value="<?php echo $us['user_phonenumber']; ?>"></td>
            </tr>
            <tr>
                <td width="55%" style="padding: 1.5% 20%">Password</td>
                <td><input type="password" name="password" id="password" style="padding: 0% 0%;"> <br><i>Blank if you don't want to update password</i></td>
            </tr>
            <tr>
                <td width="55%" style="padding: 1.5% 20%">Retype password</td>
                <td><input type="password" name="password2" id="password2"></td>
            </tr>
            <tr>
                <td width="55%" style="padding: 1.5% 20%">Address</td>
                <td><input type="text" name="address" id="address" style="width: 80%" value="<?php echo $us['user_address']; ?>"></td>
            </tr>
            <tr >
                <td colspan="2" style="padding: 2% 40%;">
                    <br> <br>
                    <input type="submit" value="Modify" id="modify" name="modifyBtn" style="width:55%; background-color:black; color:white;">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>