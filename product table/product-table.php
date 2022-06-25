<?php
include_once("admin-header.php");
$link = mysqli_connect("localhost", "root", "", "shop_db");
$pro_code = $pro_name = $pro_qty = $pro_price = $pro_image = $pro_detail = "";
$url = "";
$btn_caption = "افزودن کالا";
if (isset($_GET['action']) && !empty($_GET['action']) && $_GET['action'] == 'EDIT') {
    $id = $_GET['id'];
    $query = "select * from products where pro_code=$id";
    $result = mysqli_query($link, $query);
    if ($row = mysqli_fetch_array($result)) {
        $pro_code = $row['pro_code'];
        $pro_name = $row['pro_name'];
        $pro_qty = $row['pro_qty'];
        $pro_price = $row['pro_price'];
        $pro_image = $row['pro_image'];
        $pro_detail = $row['pro_detail'];
        $btn_caption = "ویرایش";
        $url = "?id=$pro_code&action=EDIT";
    }
}
?>
<?php
$link = mysqli_connect("localhost", "root", "", "shop_db");
$query = "SET NAMES utf8";
mysqli_query($link, $query);
$query = "select * from products";
$result = mysqli_query($link, $query);
?>
<div class="bg">
    <div class="login-main">
        <div class="table-back">
            <h3>جدول محصولات</h3>
            <table class="products">
                <tr>
                    <th>کد کالا</th>
                    <th>نام کالا</th>
                    <th>موجودی کالا</th>
                    <th>قیمت کالا</th>
                    <th>تصویر کالا</th>
                    <th>ابزار مدیریتی</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['pro_code']; ?></td>
                        <td><?php echo $row['pro_name']; ?></td>
                        <td><?php echo $row['pro_qty']; ?></td>
                        <td><?php echo $row['pro_price']; ?> &nbsp;ریال</td>
                        <td><img src="images/products/<?php echo $row['pro_image']; ?>" width="150px" height="50px"></td>
                        <td>
                            <b><a class="remove" href="action_admin_products.php?id=<?php echo $row['pro_code']; ?>&action=DELETE" >حذف</a></b>
                            &nbsp;|&nbsp;
                            <b><a class="edit" href="admin_products.php?id=<?php echo $row['pro_code']; ?>&action=EDIT">ویرایش</a></b>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>

<?php
$link = mysqli_connect("localhost", "root", "", "shop_db");
$query = "select * from products";
$result = mysqli_query($link, $query);
include_once("footer.php");
?>