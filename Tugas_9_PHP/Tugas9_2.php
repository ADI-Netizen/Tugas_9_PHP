<?php

function prima($jumlah)
{
    for ($a = 1; $a <= $jumlah; $a++) {
        $x = 0;
        for ($b = 1; $b <= $a; $b++) {
            if ($a % $b == 0) {
                $x++;
            }
        }
        if ($x == 2) {
            echo $a . ", ";
        }
    }
}

echo prima(200);
