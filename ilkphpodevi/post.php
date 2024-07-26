<?php
error_reporting(E_ALL);
$sayi = $_POST["sayi"];
if ($sayi == ""){
    echo '<p>Sayı kutusu boş olamaz.</p>';
} else {
    function kalansizSayi($sayi) {
        $kalan = $sayi % 3;

        if ($kalan == 0) {
            return $sayi;
        }

        $altKalanliSayi = $sayi - $kalan;
        $ustKalanliSayi = $sayi + (3 - $kalan);

        if (abs($sayi - $altKalanliSayi) <= abs($ustKalanliSayi - $sayi)) {
            return $altKalanliSayi;
        } else {
            return $ustKalanliSayi;
        }
    }

    $kalansizsayi = kalansizSayi($sayi);

    if ($sayi % 3 == 0){
        echo "Girdiğiniz sayı 3'e bölünüyor.";
    } else {
        echo "En yakın kalansız sayı: " . $kalansizsayi . "<br>";
    }
}
?>