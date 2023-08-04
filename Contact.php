<?php
    $info = "";
    $namedb = "";
    $emaildb = "";
    if(isset($_SESSION['user'])){
        $namedb = $_SESSION['user']['user_fullname'];
        $emaildb = $_SESSION['user']['user_email'];
    }

    if(isset($_POST['submitBtn'])){
        require_once ("admin/DatabaseConnect.php");
        $name = $_POST['name'];
        $email = $_POST['email'];
        $title = $_POST['title'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contact(contact_name, contact_email, contact_title, contact_message)
        VALUES ('$name' , '$email' , '$title' , '$message')";
        if($conn -> query($sql)){
            $info = "Submit feedback successful.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="JavaScript/JSscript.js"></script>
</head>
<body>
    <table width="75%" style="margin: auto; padding-bottom: 5%; border-bottom: 1px solid black; margin-bottom: 2%;">
        <tr>
            <th colspan="2" style="font-size: larger; background-color: black; color: white; padding: 1%;">CONTACT US</th>
        </tr>
        <tr >
            <td width="50%" style="padding: 2.5% 20%">Address</td>
            <td>38/2B, 3/2 street, Hung Loi, Ninh Kieu, Can Tho city</td>
        </tr>
        <tr>
            <td style="padding: 2.5% 20%">Phone</td>
            <td>+84 968817555</td>
        </tr>
        <tr>
            <td style="padding: 2.5% 20%">Email</td>
            <td>Davotoy@gmail.com</td>
        </tr>

    <form action="" method="post" onsubmit="return checkContact()">
        <tr>
            <th colspan="2" style="font-size: larger; background-color: black; color: white; padding: 1%;">YOUR FEEDBACK</th>
        </tr>
        <tr>
            <td width="55%" style="padding: 2.5% 20%">Your name</td>
            <td><input type="text" name="name" id="name" value="<?php echo $namedb; ?>"></td>
        </tr>
        <tr>
            <td width="55%" style="padding: 2.5% 20%">Email</td>
            <td><input type="email" name="email" id="email" value="<?php echo $emaildb; ?>"></td>
        </tr>
        <tr>
            <td width="55%" style="padding: 2.5% 20%">Title</td>
            <td><input type="text" name="title" id="title" placeholder="Type your title"></td>
        </tr>
        <tr>
            <td width="55%" style="padding: 2.5% 20%">Message</td>
            <td><textarea name="message" id="message" cols="45" rows="5" placeholder="Type your messages"></textarea></td>
        </tr>
        <tr style="text-align: center">
            <td colspan="2">
                <br> <br>
                <input type="submit" value="Send your feedback" name="submitBtn" id="submitBtn" style="width: 25%; padding:0.5%; background-color: black; color: white;">
            </td>
        </tr>
    </form>
    </table>

    <?php echo "<i><b>".$info."</b></i>"; ?>
</body>
</html>