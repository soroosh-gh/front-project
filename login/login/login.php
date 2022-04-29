<?php
    include 'settings.php';
    include 'lib/db.php';
    include 'security.php';


if( isset( $_POST['submit'] ) ){
   
    $dbc = new DB ( $dbHost, $dbUser, $dbPass, $dbName, $dbCharset);

    $sql = "SELECT * FROM user
            WHERE username = ? AND password = ?";

    $result = $dbc -> query( $sql, $_POST['username'], $_POST['password'] );
    
    if ($dbc -> numRows() > 0){ 
        echo 'ورود با موفقیت';
        $user = $dbc -> fetchArray();
        $uid = $user['id'];
        Authentication :: login( $uid );  
    
    }
    else{
        echo 'نام کاربری/کلمه عبور اشتباه است';
        include 'login.php';
    }
    $dbc -> close();
}
else{

    include 'login.php';
}
?>