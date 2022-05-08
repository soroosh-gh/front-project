<?php
    include 'setting/setting.php';
    include 'lib/db.php';

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stats = $_POST['stats'];
    $dbc = new DB ($dbhost , $dbuser ,$dbpass, $dbname, $dbcharset); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>      
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="1.png" class="card-img-top" alt="alt.png">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?php $book['name'] ?></h5>
              <p class="card-text"><?php $book['description'] ?></p>
              <a href="#" class="btn btn-primary">جزئیات</a>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
