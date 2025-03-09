<?php
    $x = 0;
    while($x < 30){
        $x++;// $x + 1
        if($x == 20 || $x == 10) continue;
        echo '<br/>Angka '.$x;
        if($x == 22)break;
    }



?>