<?php
    session_start();

    if(!isset($_SESSION['adminAcc']))
        header("Location: Login.php");
    else{
        $AdminName = $_SESSION['adminAcc']['admin_fullname'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator page</title>
    <link rel="stylesheet" href="CSS/Menu2.css">
</head>
<body>
    <div id="adminname";>
        <?php
            echo  $AdminName . " | ";
        ?>
        <a id="Logout" href="Logout.php">Logout</a>
    </div>

<!-- Menu -->
    <div >
        <ul>
            <li><a href="index.php?page=AddProduct"><span>ADD NEW PRODUCT</span></a></li>
            <li><a href="index.php?page=ListProduct"><span>LIST PRODUCT</span></a></li>
        </ul>
    </div>

<!-- Content -->
    <div>
        <?php
            if(isset($_GET['page'])){
                if($_GET['page'] === "AddProduct")
                    require_once ("AddNewProduct.php");
                else if($_GET['page'] === "ListProduct")
                    require_once ("ListProduct.php");
                else if($_GET['page'] === "ModifyProduct")
                    require_once ("ModifyProduct.php");
                else if($_GET['page'] === "DeleteProduct")
                    require_once ("DeleteProduct.php");
            }
            else
                
        ?>
    </div>
</body>
</html>