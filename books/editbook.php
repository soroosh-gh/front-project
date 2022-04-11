<?php
include 'settings.php';
include 'lib/db.php';

if( isset( $_POST['submit'] ) )
{ 
    $id = $_GET['id'];

    $dbc = new DB ($dbhost , $dbuser ,$dbpass, $dbname, $dbcharset);
    if($_POST['password'] == '')
    {
        $sql = "UPDATE books SET
            name = ?,
            description = ?,
            price = ?,
            status = ?,
            WHERE id = ?";
            $result = $dbc -> query( $sql, $_POST['name'], $_POST['description'], $_POST['price'], $_POST['stats'] ,$_GET['id']] );
    }
    else
    {
        $sql = "UPDATE books SET
            name = ?,
            description = ?,
            price = ?,
            status = ?,
            WHERE id = ?";
            $result = $dbc -> query( $sql, $_POST['name'], $_POST['description'], $_POST['price'], $_POST['stats'] ,$_GET['id']] );
    }
    $dbc -> close();
    echo 'با موفقیت درج شد';
}else 
{
    $dbc = new DB ($dbhost , $dbuser ,$dbpass, $dbname, $dbcharset);
    $sql = "SELECT * FROM books
    WHERE id = ?";
    $result = $dbc -> query( $sql, $_GET['id'] );
    $row = $result -> fetchArray();   
    $dbc -> close();
    include 'view/edit_user.php';

}

?>