<?php
    function genPsw($len, $uniq, $let, $num, $sym) {
        $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $specials = '!?@$%&#*></£=^';
        $genString = '';
    
        if($let != null) { $genString .= $letters; };
        if($num != null) { $genString .= $numbers; };
        if($sym != null) { $genString .= $specials; };

        $psw = '';

        if($uniq == 'true') {
            do 
        }
        else {
            for($i = 0; $i < $len; $i++) {
                $index = rand(0, strlen($genString) - 1);
                $psw .= $genString[$index];
            };
        };
        
        return $psw;
    };
?>

str_contains($psw, $genString[$index])