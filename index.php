<?php

$harga = 12500;
$jumlah = 4;
$uang = 50000;

echo "Harga : "$harga."<br>";
echo "Jumlah : "$jumlah."<br>";
echo "Uang : Rp.".$uang."<br>";

function hitung($harga, $jumlah) {
    return $harga * $jumlah;
}

$total = hitung($harga, $jumlah);
echo "Total : Rp." . $total . "<br>";

if ($total == $uang) {
    echo "Uangnya pas ya mas";
} 
else if ($total < $uang) {
    $kembalian = $uang - $total;
    echo "Kembalian Rp." . $kembalian ;
} 
else {
    $kurang = $total - $uang;
    echo "Kurang Uang : Rp.".$kurang;
}

echo "<br>"."TERIMAKASIH SUDAH BERBELANJA";
?>
