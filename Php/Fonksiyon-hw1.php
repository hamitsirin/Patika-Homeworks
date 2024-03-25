<?php

function ucgen($satirSayisi) {
    $satir = 0;
    while ($satir <= $satirSayisi) {
        for ($i = 0; $i <= $satir; $i++) {
            echo "O ";
        }
        echo "\n";
        $satir++;
    }
}


ucgen(15);

?>
