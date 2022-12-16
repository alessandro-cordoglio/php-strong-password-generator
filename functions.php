<?php 
    function rand_psw($length){
    $chars='ABCDEFGHIJKLMNOPQRSTUWXYZabcdefghijklmnopqrstuvwxyz1234567890\!"£$%&/()=?^';
    $password = substr(str_shuffle($chars), 0, $length);
    return $password;
    }
    $pswlength= (int)$_GET['pswlg'];
    $password= rand_psw($pswlength);
    if($_GET['pswlg']<3 && isset($_GET['generate'])) {
        $result = "<div class='alert_message'> La psw generata deve essere minimo di 3 caratteri! </div>";
    }
    if($_GET['pswlg']>=3 && isset($_GET['generate'])){
        $result = "La tua password è: {$password}";
    } 
?>