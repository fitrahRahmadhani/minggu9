<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>keranjang Pembelian</title>
</head>
<body>
    <h2>Jumlah yang dibeli</h2>
        <?php
        $jmlGula = $_COOKIE["jumlahgula"];
        $jmlMinyak = $_COOKIE["jumlahminyak"];
        echo "Jumlah gula yang dibeli $jmlGula <br>";
        echo "Jumlah minyak yang dibeli $jmlMinyak";
        ?>
</body>
</html>