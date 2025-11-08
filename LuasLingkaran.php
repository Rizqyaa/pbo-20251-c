<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;

    public function tampil($nama = "roda") {
        $rumus = new LuasLingkaran()::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} adalah: ", $rumus;
    }

    public static function testing(){
        echo"ini dari static";
    }
}


$lingkaran = new LuasLingkaran();
$lingkaran->jari = 5;
$lingkaran->tampil("ban");

LuasLingkaran::testing();
echo ".."

?>