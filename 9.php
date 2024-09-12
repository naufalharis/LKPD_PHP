<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Koin</title>
</head>
<body>
    <h1>Hitung Koin</h1>
    
    <!-- Form untuk input uang -->
    <form method="post" action="">
        <label for="uang">Masukkan jumlah uang:</label>
        <input type="number" id="uang" name="uang" required>
        <input type="submit" value="Hitung">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai uang dari form
        $uang = intval($_POST["uang"]);
        
        function koin($uang) {
            $arr = [
                "Rp. 100.000" => 0,
                "Rp. 50.000"  => 0,
                "Rp. 20.000"  => 0,
                "Rp. 10.000"  => 0,
                "Rp. 5.000"   => 0,
                "Rp. 1.000"   => 0,
            ];

            // Menghitung koin pecahan 100.000
            while ($uang >= 100000) {
                $uang -= 100000;
                $arr["Rp. 100.000"]++;
            }

            // Menghitung koin pecahan 50.000
            while ($uang >= 50000) {
                $uang -= 50000;
                $arr["Rp. 50.000"]++;
            }

            while ($uang >= 20000) {
                $uang -= 20000;
                $arr["Rp. 20.000"]++;
            }

            while ($uang >= 10000) {
                $uang -= 10000;
                $arr["Rp. 10.000"]++;
            }
            
            while ($uang >= 5000) {
                $uang -= 5000;
                $arr["Rp. 5.000"]++;
            }

            while ($uang >= 1000) {
                $uang -= 1000;
                $arr["Rp. 1.000"]++;
            }

            return $arr;
        }

        // Panggil fungsi koin
        $hasil = koin($uang);

        // Tampilkan hasil
        echo "<h2>Hasil Koin:</h2>";
        echo "<ul>";
        foreach ($hasil as $koin => $jumlah) {
            if ($jumlah > 0) {
                echo "<li>$koin: $jumlah buah</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</body>
</html>