<?php
$id = $_GET['id']??null;
if(is_null($id))
{
    die ('لطفا ای دی را وارد کنید');
}
include 'setting/setting.php';
include 'lib/db.php';

$dbc = new DB ($dbhost , $dbuser ,$dbpass, $dbname, $dbcharset);
$dbc -> query('SET names utf8');
$result = $dbc->query("SELECT * FROM books WHERE id =$id");
$row = $result -> fetchArray();

?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="asset/style.css">
    <script src="https://kit.fontawesome.com/fb07f5d177.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/wex0igxxe5i3095e5nvv0tak0bk9yv5knuoa7de5zx0k7nlh/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#description',
            plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>
    <title>Edit book</title>
</head>
<body>
    <form action="editbook.php" method="post">
   
        <div class="main">
            <h1>ویرایش کتاب</h1>
        <label for="name">نام کتاب</label>
        <br>
            <input type="text" id="name" name="name" value = "<?php if(isset($row['name']) ) echo $row['name'];?>">
        <br>
           <label for="description">توضیحات</label>
        <br>
          <textarea id="description" name="description" value = "<?php if(isset($row['description']) ) echo $row['description'];?>"></textarea>
        <br>
            <label for="price">قیمت</label>
        <br>
            <input  id="price" name="price" value = "<?php if(isset($row['price']) ) echo $row['price'];?>">
        <br>
            <label for="stats">وضعیت</label>
        <br>
        <select name="stats" id="stats">
            <option value="reserve">رزور شده</option>
            <option value="notreserve">رزرو نشده</option>
          </select>
        <br><br>
        <input class="btn primary" name="submit" type="submit" value="تایید">

        <br>
            <button  class = "btn" type="reset">لغو</button>
        
        </div>
    </form>
</body>
</html>