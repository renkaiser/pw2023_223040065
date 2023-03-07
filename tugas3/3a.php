<?php echo "<h4> Menghitung Luas Lingkaran </h4>";
$r = 10;
$r2 = 20;
function hitungLuasLingkaran($r)
{
    // rumus lingkaran 22/7 atau 3.14, rumus luas lingkaran phi x r x r
    $luas = 3.14 * $r *$r;
    return $luas . "cm<sup>2</sup>";
}

echo "Jari-jari = $r cm. </br>";

echo "Luas Lingkaran = " . hitungLuasLingkaran($r) . "<hr>";

echo "<h4>Mengitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r)
{
    // rumus keliling 2 x phi x r
    $keliling = 2 * 3.14 * $r;
    return $keliling . " cm";
}
echo "Jari-jari = $r2 </br>";
echo "Keliling Lingkaran = " . hitungKelilingLingkaran($r2) . "<hr>"; ?>
