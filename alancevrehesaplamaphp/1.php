<?php
class Sekil{
    public $taban;
    public $yukseklik;
    public $ucuncukenar;
}
class Dikdortgen extends Sekil{
    public function dikdortgenalan($taban,$yukseklik){
        return $taban*$yukseklik;
    }
    public function dikdortgencevre($taban,$yukseklik){
        return ($taban+$yukseklik)*2;
    }
}
class Ucgen extends Sekil{
    public function ucgenalan($taban,$yukseklik){
        return $taban*$yukseklik/2;
    }
    public function ucgencevre($taban,$yukseklik, $ucuncukenar){
        return $taban+$yukseklik+$ucuncukenar;
    }
}
class Kare extends Sekil{
    public function karealan($taban){
        return $taban**2;
    }
    public function karecevre($taban){
        return $taban*4;
    }
}

$sekil = new Sekil();
$dikdortgen = new Dikdortgen();
$ucgen = new Ucgen();
$kare = new Kare();

echo $dikdortgen->dikdortgenalan(5,10).'<br>';
echo $dikdortgen->dikdortgencevre(5,10).'<br>';
echo $ucgen->ucgenalan(5,10).'<br>';
echo $ucgen->ucgencevre(5,10,14).'<br>';
echo $kare->karealan(5).'<br>';
echo $kare->karecevre(5).'<br>';

