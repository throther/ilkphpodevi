<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    function odev($isimler){
        $isim = array("atakan", "doğukan", "mithat", "buse","cemaleddin");
        $randomIsimler = array_rand($isim, 3);
        $secilenIsimler = array();
        foreach ($randomIsimler as $index) {
            $secilenIsimler[] = $isim[$index];
        }
        
        return $secilenIsimler;
    }
    $numara = array();
    for ($i =0; $i < 5; $i++){
        $numara[] = mt_rand(0,32);
    }
    $b = array_map('odev', array_filter($numara, function($num){
        return $num % 2 == 0;
    }));
    print_r($b);
    ?>
    </pre>
</body>
</html>