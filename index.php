<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
            crossorigin="anonymous">
    <script src="JavaScript/JSscript.js"></script>  <!-- Set Menu height = Main height (option) -->

</head>
<body>
    <div id="header">
        <img src="Image/logo.png" alt="BTEC logo" id="logo">
    </div>
    
    <div id="menu">
        <p class="menulist"><a class="menu" href=".">Home</a></p>
        <p class="menulist"><a class="menu" href="index.php?page=Introduction">About us</a></p>
        <p class="menulist"><a class="menu" href="index.php?page=Product">Product</a></p>
        <p class="menulist"><a class="menu" href="index.php?page=Contact">Contact</a></p>
        
        <?php
            if(isset($_SESSION['user'])){
                echo '<p class="menulist"><a class="menu" href="index.php?page=Cart">View Cart</a></p>';
                echo '<p class="menulist"><a class="menu" href="index.php?page=Profile">Profile</a></p>';
                echo '<p class="menulist"><a class="menu" href="Logout.php">Logout</a></p>';
            }
            else{
                echo '<p class="menulist"><a class="menu" href="index.php?page=Login">Login</a></p>';
                echo '<p class="menulist"><a class="menu" href="index.php?page=Registration">Registration</a></p>';
            }
        ?>
        
    </div>
    
    <div id="main">
        <?php
            if(isset($_GET['page'])){
                if($_GET['page'] === "Introduction")
                    require_once ("Introduction.html");
                else if($_GET['page'] === "Registration")
                    require_once ("Registration.php");
                else if($_GET['page'] === "Product")
                    require_once ("Product.php");
                else if($_GET['page'] === "ProductDetail")
                    require_once ("ProductDetail.php");
                else if($_GET['page'] === "Login")
                    require_once ("Login.php");
                else if($_GET['page'] === "Cart")
                    require_once ("Cart.php");
                else if($_GET['page'] === "Profile")
                    require_once ("Profile.php");
                else if($_GET['page'] === "ModifyProfile")
                    require_once ("ModifyProfile.php");
                else if($_GET['page'] === "Contact")
                    require_once ("Contact.php");
            }else{
                require_once ("Product.php");
            }
        ?>
    </div>
    
    <div id="footer">
        <p><b>BTEC Can Tho</b> &#169; Copyright DatVT 2022<br></p>
        <i>Address:</i> 38/2B, 3/2 street, Hung Loi, Ninh Kieu, Can Tho city <br>
        <i>Phone:</i> +84 96817555 <br>
        <i>Email: </i>Davocamera@gmail.com

    </div>

</body>
</html>