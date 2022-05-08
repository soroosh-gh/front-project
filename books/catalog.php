<?php
    include 'setting/setting.php';
    include 'lib/db.php';

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stats = $_POST['stats'];
    $dbc = new DB ($dbhost , $dbuser ,$dbpass, $dbname, $dbcharset);  
    $sql = "SELECT * FROM books ORDER BY id DESC LIMIT 15";
    $result = $dbc -> query($sql);
    $books -> $DBC -> fetchAll();
    $dbc -> Close();
    include 'view/show_book.php'; 
?>