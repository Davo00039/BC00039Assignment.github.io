<html>
    <link rel="stylesheet" href="CSS/Product.css">
    <table width="110%"  style="border-collapse:collapse" >
        <?php
            require_once ("admin/DatabaseConnect.php");
            $sql = "SELECT * FROM product";
            $result = $conn -> query($sql);
            $i = 0;
            while($row = mysqli_fetch_assoc($result)){
                if($i % 3 == 0)
                    echo "<tr>";
                        echo "<td width='35%'><a href='index.php?page=ProductDetail&id={$row['product_id']}'>
                                <center>
                                    <p>  </p><br>
                                    <p>  </p><br>
                                    <img src=\"admin/{$row['product_image']}\"  height='160px'><br/>
                                    <b>{$row['product_name']}</b><br/>
                                    "?> <?php echo number_format($row['product_price'],0) ?> <?php echo "$ <br>
                                    <p>   </p><br>
                                </center></a>
                                <center><a  href='index.php?page=Cart&action=add&id={$row['product_id']}'><button >Add to cart</button></a></center> <br>
                            </td>";
                if($i % 3 == 2)
                    echo "</tr>";
                $i++;
            }
            if($i % 3 != 0)
                    echo "</tr>";
        ?>

    </table>
</html>