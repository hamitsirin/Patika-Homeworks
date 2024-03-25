<?php

class Sekil {
    protected $kenar1;
    protected $kenar2;

    public function __construct($kenar1, $kenar2) {
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;
    }

    public function alanHesapla() {
        return $this->kenar1 * $this->kenar2;
    }

    public function cevreHesapla() {
        return 2 * ($this->kenar1 + $this->kenar2);
    }
}

class Dikdortgen extends Sekil {
    // Dikdörtgen özelinde hiçbir yeni özellik veya metod tanımlamamıza gerek yok.
}

class Ucgen extends Sekil {
    public function __construct($kenar1, $kenar2) {
        parent::__construct($kenar1, $kenar2);
    }

    public function alanHesapla() {
        // Üçgenin alanını farklı bir şekilde hesaplayabiliriz.
        return ($this->kenar1 * $this->kenar2) / 2;
    }
}

class Kare extends Sekil {
    public function __construct($kenar) {
        parent::__construct($kenar, $kenar);
    }

    public function alanHesapla() {
        // Kare için alan hesaplama yöntemi farklı olabilir, ancak genellikle bu şekilde hesaplanır.
        return $this->kenar1 * $this->kenar2;
    }

    public function cevreHesapla() {
        // Kare için çevre hesaplama yöntemi farklı olabilir, ancak genellikle bu şekilde hesaplanır.
        return 4 * $this->kenar1;
    }
}

// Örnek kullanım:
$dikdortgen = new Dikdortgen(4, 6);
echo "Dikdörtgen Alanı: " . $dikdortgen->alanHesapla() . ", Çevresi: " . $dikdortgen->cevreHesapla() . "\n";

$ucgen = new Ucgen(5, 8);
echo "Üçgen Alanı: " . $ucgen->alanHesapla() . ", Çevresi: " . $ucgen->cevreHesapla() . "\n";

$kare = new Kare(5);
echo "Kare Alanı: " . $kare->alanHesapla() . ", Çevresi: " . $kare->cevreHesapla() . "\n";

?>
