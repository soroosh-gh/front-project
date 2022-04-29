<?php
session_start();
class Authentication{
    static function login( $uid ){        
        $_SESSION['uid'] = $uid;
    }
    static function check(){
        return isset( $_SESSION['uid'] );
    }
    static function uid(){
        return $_SESSION['uid'];
    }
    static function logout(){

        unset( $_SESSION['uid'] );
    }
}
class Authorization{

}

?>