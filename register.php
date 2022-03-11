<?php
$name = $_POST['name'];
$username = $_POST['username'];
$pass = $_POST['password'];
$idcode = $_POST['idcode'];

$dbc = new mysqli ('localhost' , 'root' ,'', 'members');
$sql = "INSERT INTO membersinfo( name , username , password , idcode) VALUES ('$name' , '$username' , '$pass' , 'idcode')";
$result = $dbc -> query ($sql);
$dbc -> close();
echo 'done';
?>