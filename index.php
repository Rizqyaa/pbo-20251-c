<?php

require_once ('./luaslingkaran.php');

use App\Math\luasLingkaran;

$lingkaran = new luasLingkaran(5);
// $lingkaran->jari = 5; //mengisi property
$lingkaran->tampil('roda'); //memanggil method

luasLingkaran::testing(); //memanggil method static
