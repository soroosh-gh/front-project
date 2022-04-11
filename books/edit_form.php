<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="asset/style.css">
    <script src="https://kit.fontawesome.com/fb07f5d177.js" crossorigin="anonymous"></script>
    <title>Edit yout info</title>
</head>
<body>
    <form action="editbook.php" method="post">
   
        <div class="main">
            <h1>افزودن کتاب</h1>
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
            <button class = "btn primary" type="submit">تایید</button>
        <br>
            <button  class = "btn" type="reset">لغو</button>
        
        </div>
    </form>
</body>
</html>