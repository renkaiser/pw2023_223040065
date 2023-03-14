<?php 
    $npm = "65";
    $kali = "5";
    $bagi = "2";
    $tambah = "75";
    $kurang = "20";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>b</title>
</head>
<body>
    <?php
        $dikali = $npm*$kali;
        $dibagi = $dikali/$bagi;
        $ditambah = $dibagi+$tambah;
        $dikurang = $ditambah-$kurang;
    ?>

    <?php echo "Aku adalah angka <b>$npm</b> </br>"; ?>
    <?php echo "Jika aku dikali 5, maka aku sekarang menjadi <b>$dikali</b> </br>"; ?>
    <?php echo "Jika aku dibagi 2, maka sekarang menjadi <b>$dibagi</b> </br>"; ?>
    <?php echo "Jika aku ditambah 75, maka aku sekarang menjadi <b>$ditambah</b> </br>"; ?>
    <?php echo "Jika aku dikurang 20, maka aku sekarang menjadi <b>$dikurang</b> </br>"; ?>
    
</body>
</html>