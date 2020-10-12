<?php
function fibo($jumlah)
{

    $then = 0;
    $now = 1;

    $hasil = "$then $now";

    for ($i = 0; $i < $jumlah - 2; $i++) {
        $output = $now + $then;
        $hasil = $hasil . " $output";
        $then = $now;
        $now = $output;
    }
    return $hasil;
}

echo fibo(22);
