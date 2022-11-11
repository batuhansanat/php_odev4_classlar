<?php
class Sekil{
    public $a,$b;

    public function __construct($a,$b=null)//b parametresine değer vermezsek default boş kalacak. bazı şekillerin alanlarını hesaplarken tek bir parametre girmek gerebiliyor o yüzden default boş bırakıyoruz
    {
        $this->a = $a;
        $this->b = $b;
    }

}


class Dikdortgen extends Sekil{
    public function cevreHesapla(){
        return 2 * ($this->a + $this->b);
    }

    public function alanHesapla(){
        return $this->a * $this->b;
    }
}

class Ucgen extends Sekil{
    public function cevreHesapla(){
        return 3*$this->a;
    }

    public function alanHesapla(){
        return sqrt(3)/4 * pow($this->a,2);
    }
}

class Kare extends Sekil{
    public function cevreHesapla(){
        return $this->a * 4;
    }

    public function alanHesapla(){
        return $this->a * $this->a;
    }
}

$Dikdortgen = new Dikdortgen(3,5);
$Ucgen = new Ucgen(5);
$Kare = new Kare(7);

echo "Uzun kenarı: <b>".$Dikdortgen->a."</b> Kısa kenarı: <b>".$Dikdortgen->b."</b> olan Dikdörtgenin ÇEVRESİ: <b>".$Dikdortgen->cevreHesapla()."</b> ALANI: <b>".$Dikdortgen->alanHesapla()."</b><br><br>";
echo "Bir kenarının uzunluğu: <b>".$Ucgen->a."</b> olan Eşkenar üçgenin ÇEVRESİ: <b>".$Ucgen->cevreHesapla()."</b> ALANI: <b>".$Ucgen->alanHesapla()."</b> <br><br>";
echo "Kenar uzunluğu: <b>".$Dikdortgen->a."</b> olan Karenin ÇEVRESİ: <b>".$Kare->cevreHesapla()."</b> ALANI: <b>".$Kare->alanHesapla()."</b>";

?>


