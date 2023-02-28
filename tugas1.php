<?php

$nilai ="E";

switch ($nilai) {
    case "A";
    echo "Sepatu  bola Harga Rp.450.000" , PHP_EOL;
    break;
    case "B";
    case "C";
    echo "Sepatu Sekolah Harga Rp.250.000" , PHP_EOL;
    break;
    case "D";
    echo "Sepatu Kerja Harga Rp.350.000" , PHP_EOL;
    break;

    default:
    echo "Sepatu bekas Harga Rp.50.000" , PHP_EOL;
    break; 
}