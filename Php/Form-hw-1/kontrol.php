<?php
function ucBolunmeKontrolu($sayi) {
    if (empty($sayi)) {
        echo "Boş değer gönderdiniz. Lütfen bir sayı girin.";
        return;
    }

    if (!is_numeric($sayi)) {
        echo "Girilen değer sayısal değil. Lütfen bir sayı girin.";
        return;
    }

    $sayi = intval($sayi);

    if ($sayi % 3 == 0) {
        echo "Girilen sayı 3'e tam bölünür.";
    } else {
        $bolumlenebilirSayi = ceil($sayi / 3) * 3;
        echo "Girilen sayı 3'e bölünemez. Bölünebilecek ilk sayı {$bolumlenebilirSayi}'dir.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sayi = $_POST["sayi"];
    ucBolunmeKontrolu($sayi);
}
?>
