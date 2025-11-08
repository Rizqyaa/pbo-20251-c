
<?php 

namespace App\Math;

class luasLingkaran {
    
    public const phi = 3.14;
    protected int $jari;

    public function __construct($isijari = 1) {
        $this->jari = $isijari;
    }

    public function tampil($nama) {
    $rumus = luasLingkaran:: phi * ($this->jari * $this->jari);
    echo "Luas {$nama} hasilnya adalah: {$rumus}";
        
    }
    public static function testing() {
        echo "<br>Ini adalah method static";
    }

    public function __destruct() {
        echo "<br>ah cape ah";
    }
}

