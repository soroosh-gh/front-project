<?php


if( isset( $_POST['submit'] ) ){ 
    $id = $_GET['id'];
    $dbc = new mysqli('localhost','root','','members');
    $dbc -> set_charset('utf8_mb4');
    $sql = "UPDATE 	membersinfo SET
            name = '{$_POST['name']}',
            username = '{$_POST['username']}',
            password = '{$_POST['password']}'
            WHERE iccode = {$_GET['idcode']}";
    $result = $dbc -> query( $sql );
    $dbc -> close();

    echo 'با موفقیت درج شد';
}
else{

    include 'edit.php';
}
?>
