<?php
    $id = $_GET['id'];
    require_once("admin/DatabaseConnect.php");
    
    $sql = "SELECT * FROM product WHERE product_id='$id'";
    $result = $conn -> query($sql);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product detail</title>
    
</head>
<body>
    <table width="80%" style="margin: auto;">
    
        <tr>
            <td width="40%" style="padding: 2% 10%">
                <b><i>Product name:</i></b>
            </td>
            <td style="padding-left: 1%">
                <?php
                    echo $row['product_name'];
                ?>
            </td>
        </tr>
        <tr>
            <td width="40%" style="padding: 2% 10%">
                <b><i>Product image:</i></b>
            </td>
            <td>
                <img src="admin/<?php echo $row['product_image']; ?>" height="250px">
            </td>
        </tr>
        <tr>
            <td width="40%" style="padding: 2% 10%">
                <b><i>Product price:</i></b>
            </td>
            <td style="padding-left: 1%">
                <?php echo number_format($row['product_price'],0); ?> $
            </td>
        </tr>
        <tr>
            <td width="40%" style="padding: 2% 10%">
                <b><i>Product description:</i></b>
            </td>
            <td>
                <?php echo $row['product_description']; ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <br>
                <center><a href="index.php?page=Cart&action=add&id=<?php echo $row['product_id']; ?>"><button style="width:12%; background-color:black; color:white;">Add to cart</button></a></center>
                <br>
            </td>
        </tr>
    </table>
</body>
</html>