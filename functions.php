<?php 

$length = $_GET['length'];

function createPassword($length) {
    if($length <= 0) {
        return '';
    }
    $chars ='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!?@#[]';
    return substr(str_shuffle($chars), 0, $length);
}



?>