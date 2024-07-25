<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function ucgen($satir_sayisi) {
    // Satır sayısı kadar dış döngü
    $satir = 1;
    
    while ($satir <= $satir_sayisi) {
        // Her satırda, boşlukları yazdır
        $bosluk = $satir_sayisi - $satir;
        while ($bosluk > 0) {
            echo " ";
            $bosluk--;
        }

        // Her satırda, yıldızları yazdır
        $yildiz = 1;
        while ($yildiz <= $satir * 2 - 1) {
            echo "*";
            $yildiz++;
        }
        
        // Satırı tamamla ve yeni bir satıra geç
        echo "<br>";
        $satir++;
    }
}

// Fonksiyonu çağırarak 15 satırlı bir üçgen çizin
ucgen(15);
?>

</body>
</html>