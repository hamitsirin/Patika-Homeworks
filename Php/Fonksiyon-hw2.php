<?php
function rastgeleDegerlerOlustur($dizi, $adet) {
    // Boş olmayan elemanları filtrele
    $filtreliDizi = array_filter($dizi);
    
    // Rastgele $adet adet öğeyi seç
    $rastgeleDegerler = array_rand($filtreliDizi, $adet);
    
    // Seçilen öğeleri yeni diziye ekleyerek döndür
    return array_map(function($index) use ($filtreliDizi) {
        return $filtreliDizi[$index];
    }, (array)$rastgeleDegerler);
}
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

print_r(rastgeleDegerlerOlustur($planets, 2));
print_r(rastgeleDegerlerOlustur($planets, 3));
print_r(rastgeleDegerlerOlustur($planets, 2));
print_r(rastgeleDegerlerOlustur($planets, 4));
print_r(rastgeleDegerlerOlustur($planets, 5));
?>

/* Output
Array
(
    [0] => Venus
    [1] => Neptune
)
Array
(
    [0] => Mercury
    [1] => Mars
    [2] => Neptune
)
Array
(
    [0] => Mercury
    [1] => Uranus
)
Array
(
    [0] => Mercury
    [1] => Venus
    [2] => Earth
    [3] => Neptune
)
Array
(
    [0] => Venus
    [1] => Earth
    [2] => Jupiter
    [3] => Saturn
    [4] => Uranus
)

*/
