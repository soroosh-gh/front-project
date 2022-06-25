<?php
include_once("header.php");
$pro_code = 0;
if (isset($_GET['id']))
    $pro_code = $_GET['id'];

$link = mysqli_connect("localhost", "root", "", "shop_db");
$query = "SET NAMES utf8";
mysqli_query($link, $query);

$query = "select * from products where pro_code=$pro_code";
$result = mysqli_query($link, $query);
if ($row = mysqli_fetch_array($result)) {
?>
 
    <div class="bg">
        <div class="main-detail">
            <div class="detail-card">
                <img src="images/products/<?php echo $row['pro_image']; ?>">
                <div class="text">
                    <div class="title"><?php echo $row['pro_name'] ?></div>
                    <div class="info">
                        قیمت:<?php echo $row['pro_price']; ?>&nbsp; ریال
                        <br>
                        تعداد موجودی:<span><?php echo $row['pro_qty'] ?></span>
                        <br>
                         <span><?php echo $row['pro_detail']; ?></span><br><br>
                        <a class="shop-detail" href="order.php?id=<?php echo $row['pro_code'] ?>">خرید</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
}

?>



<?php
include_once("footer.php");
?>
