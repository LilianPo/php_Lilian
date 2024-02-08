<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP harjutused</title>
</head>
<body>
    <h1>Harjutus 04</h1>
    <?php
    $p = 1;
    switch ($p) {
        case ($p > 10):
            echo "SUPER!";
            break;
            case ($p >= 5 && $p <=9):
            echo "Tehtud!";
            break;
            case($p <5):
                echo "Kasin!";
                break;
        
        default:
            echo "Punkte pole lisatud";
            break;
    }

    ?>
    <form action="" method="GET">
        Lisa sünniaasta <input type="number" name="synd" min="1900" max="2100" required>
        <input type="submit" value="Leia juubel"><br>
    </form>
    <?php
    if (!empty($_GET['synd'])) {
        $aasta = $_GET['synd']; //sünniaasta
        $seeAasta = date('Y');// Käesolev aasta
        $vanus = $seeAasta - $aasta; //vanus
        //var_dump($vanus); // testmine
        if ($vanus % 5 == 0) { // jääk, et leida juubel
            echo"Sul on juubel";
        } else {
        echo "Ei ole juubel";
        }
    }
    ?>

    <?php
    echo "<br>";
    $nr1 = 5;
    $nr2 = 5;
    // < > >= <= == !=
    //OR - või
    //AND  - && mõlemad peavad olema
    if ($nr2 != 0 && $nr1 !=0) {
        $tehe = $nr1 /$nr2;
        echo $tehe;
    } else {
        echo "Nulliga ei saa jagada!";
    }
    ?>
    <h1>Harjutus 03</h1>
    <!--
        action -> fail kuhu saadetakse
        method -> kuidas saadetakse, GET avalik, POST on peidetud
-->
    <form action="" method="GET">
        Toode 1: <input type="number" name="toode1"><br>
        Toode 2: <input type="number" name="toode2"><br>
        Toode 3: <input type="number" name="toode3"><br>
        <br>

        <input type="submit" value="Arvuta">
    </form>
    <?php
    if (!empty($_GET['toode1']) && 
        !empty($_GET['toode2']) && 
        !empty($_GET['toode3'])) {
    

    //GET saatsin GET-iga võtan vastu ka
    $t1 = $_GET['toode1'];
    $t2 = $_GET['toode2'];
    $t3 = $_GET['toode3'];
    echo "<br>";

    echo "Toode1: ".$t1."<br>"; //sobib ka echo "$t1<br>"
    echo "Toode2: ".$t2."<br>";
    echo "Toode3: ".$t3."<br>";
    echo "Kokku " .$t1+$t2+$t3;
}
    ?>
<h1>Harjutus 2</h1>

<?php   
    $arv1 = 5; //int
    $arv2 = 2;//float
    $tehe = $arv1/$arv2; 
    $jaak = $arv1 % $arv2; //jääk

    echo "Vastus: $tehe<br>";
    printf("Vastus: %d / %0.2f = %0.2f<br>", $arv1, $arv2, $tehe);
    echo $jaak;

?>
    <h1>Harjutus</h1>
    <?php

    /*
    Harjutus 1
    08.02.2024
    */
    
    $enimi = "Lilian";
    $pnimi = "Metshein";
    $v = 43;
    $pikkus = 1.67;
    $hyydnimi = "Lillu";
    $lugu = 'Dr. Alban - "It\'s My Life"'; //kladkriips laseb ülakomal teksti tulla
    
    echo "<p>Tere $enimi \"$hyydnimi\" $pnimi!<br>";
    echo "Vanus:$v <bv> Pikkus: $pikkus</p>";
    echo '<p>Lemmik lugu on:' .$lugu. '</p>';//punkt on kokkuliitmiseks
    
    ?>
</body>
</html>