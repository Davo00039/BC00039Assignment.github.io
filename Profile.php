<?php
    if(isset($_SESSION['user'])){
        require_once("admin/DatabaseConnect.php");
        $id = $_SESSION['user']['user_ID'];
        
        $sql = "SELECT * FROM user WHERE user_ID='$id'";
        $result = $conn -> query($sql);
        $row = mysqli_fetch_assoc($result);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>
    <style>
        table{
            margin: auto;
            margin-top: 4%;
            margin-left: 20%;
            width: 70%;
            background-color: white;
            border-bottom: 1px solid black;
        }
        tr{
            width: 20%;
            font-size: large;
        }
        th{
            text-align: center;
            padding: 2% 5%;
            background-color: Black;
            color: white;

        }
        td{
            padding-left: 15%;
            padding: 1.5% 10%;
        }
        #item{
            padding-left: 15%;
            padding-right: 2%;
            background-color: white;
        }
        #box{
            padding-left: 25%;
        }
        #btn{
            width: 80%;
            background-color:black;

        }
        a{
            color:white;
        }

    </style>
</head>
<body>
    <table >
        <tr>
            <th colspan="2">
                YOUR PROFILE
            </th>
        </tr>
        <tr>
            <td id="item">
                Username
            </td>
            <td id="box">
                <?php echo $row['user_fullname']; ?>
            </td>
        </tr>
        <tr>
            <td id="item">
                Email
            </td>
            <td id="box">
                <?php echo $row['user_email']; ?>
            </td>
        </tr>
        <tr>
            <td id="item">
                Phone number
            </td>
            <td id="box">
                <?php echo $row['user_phonenumber']; ?>
            </td>
        </tr>
        <tr>
            <td id="item">
                Address
            </td>
            <td id="box">
                <?php echo $row['user_address']; ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding: 5% 40%; ">
                <button id="btn"><a href="index.php?page=ModifyProfile" >Modify</a></button>
            </td>
        </tr>
    </table>
</body>
</html>