<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Belanja</title>
</head>
<body>
    <h1>Toko Naps</h1>

<?php
    function diskonBelanja($totalbelanja) {
        if ($totalbelanja > 100) {
            $total = $totalbelanja - ($totalbelanja*1/10);
            echo "Total belanja anda : $" . $totalbelanja . " dan anda mendapat diskon 10 % jadi <br>
            anda harus membayar sebesar : $" . $totalbelanja . " - $" . ($totalbelanja*1/10) . " = $" . $total;
        } elseif ($totalbelanja <= 100) {
            echo "Total belanja anda : " . $totalbelanja;
        } else {
            echo "Masukkan total uang belanja dengan benar";
        }
    }

    diskonBelanja(220);
?>
</body>
</html>