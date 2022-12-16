<?php 
    function rand_psw($length){
    $chars='ABCDEFGHIJKLMNOPQRSTUWXYZabcdefghijklmnopqrstuvwxyz1234567890\!"£$%&/()=?^';
    $password = substr(str_shuffle($chars), 0, $length);
    return $password;
    }
    $pswlength= (int)$_GET['pswlg'];
    $password= rand_psw($pswlength);
?>