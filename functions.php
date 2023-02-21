<?php
    $lowChars = 'abcdefghijklmnopqrstuvwxyz';
    $upChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specials = '!?@$%&#*';

    $genString = $lowChars.$upChars.$numbers.$specials;

    function genPsw($len, $chars) {
        $psw = '';
        for($i = 0; $i < $len; $i++) {
            $index = rand(0, strlen($chars) - 1);
            $psw .= $chars[$index];
        };
        return $psw;
    };
?>