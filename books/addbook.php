<?php
    include 'setting/setting.php';
    include 'lib/db.php';

if( isset( $_POST['submit'] ) ){
    $dbc = new DB ($dbhost , $dbuser ,$dbpass, $dbname, $dbcharset);
$sql = "INSERT INTO books( name , description , price , status) VALUES (?,?,?,?)";
//all informations like username, password and ... has been set in setting.php
$result = $dbc -> query ($sql,$name,$description ,$price, $stats);
$dbc -> close();
echo 'با موفقیت درج شد';
}
else {
  //  include 'view/addbook.html';

}
?>