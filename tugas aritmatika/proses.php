<?php 

    $no1 = $_POST["txtbil1"];
    $no2 = $_POST["txtbil2"];

    echo "Bilangan Pertama = $no1 <br>";
    echo "Bilangan Kedua = $no2 <br>";

    if ( isset( $_POST["tambah"] ) ) {
        $tambah = $no1 + $no2;
        echo "$no1 + $no2 = $tambah <br>";
    } elseif ( isset( $_POST["kurang"] ) ){
        $kurang = $no1 - $no2;
        echo "$no1 - $no2 = $kurang <br>";
    } elseif ( isset( $_POST["kali"] ) ){
        $kali = $no1 * $no2;
        echo "$no1 x $no2 = $kali <br>";
    } elseif ( isset( $_POST["bagi"] ) ){
        $bagi = $no1 / $no2;
        echo "$no1 : $no2 = $bagi <br>";
    }

    
?>