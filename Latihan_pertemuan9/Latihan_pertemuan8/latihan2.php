<!DOCTYPE html>
<html>
<head>
    <title>Contoh Penggunaan UDF</title>
</head>
<body>

    <h2>Contoh Penggunaan UDF</h2>

    <!-- Menentukan Form Input -->
    <form method="POST" action="">
        Masukkan Bilangan Pertama:<br>
        <input type="number" name="A" step="any" required>
        <br><br>

        Masukkan Bilangan Kedua:<br>
        <input type="number" name="B" step="any" required>
        <br><br>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php

    // Fungsi penjumlahan
    function jumlah($A, $B)
    {
        return $A + $B;
    }

    // Fungsi pengurangan
    function kurang($A, $B)
    {
        return $A - $B;
    }

    // Fungsi perkalian
    function kali($A, $B)
    {
        return $A * $B;
    }

    // Fungsi pembagian
    function bagi($A, $B)
    {
        return $A / $B;
    }

    // Memproses data setelah tombol Hitung ditekan
    if (isset($_POST["hitung"])) {

        $A = (float) $_POST["A"];
        $B = (float) $_POST["B"];

        echo "<br>";
        echo "Bilangan Pertama : " . $A;
        echo "<br>";

        echo "Bilangan Kedua : " . $B;
        echo "<br><br>";

        // Hasil penjumlahan
        $jumlahbil = jumlah($A, $B);

        echo "Hasil Penjumlahan 2 buah bilangan<br>";
        printf(
            "Penjumlahan antara: %g + %g = %g",
            $A, $B, $jumlahbil
        );

        echo "<br><br>";

        // Hasil pengurangan
        $kurangbil = kurang($A, $B);

        echo "Hasil Pengurangan 2 buah bilangan<br>";
        printf(
            "Pengurangan antara: %g - %g = %g",
            $A, $B, $kurangbil
        );

        echo "<br><br>";

        // Hasil perkalian
        $kalibil = kali($A, $B);

        echo "Hasil Perkalian 2 buah bilangan<br>";
        printf(
            "Perkalian antara: %g * %g = %g",
            $A, $B, $kalibil
        );

        echo "<br><br>";

        // Hasil pembagian
        echo "Hasil Pembagian 2 buah bilangan<br>";

        if ($B != 0) {
            $bagibil = bagi($A, $B);

            printf(
                "Pembagian antara: %g / %g = %g",
                $A, $B, $bagibil
            );
        } else {
            echo "Pembagian tidak dapat dilakukan karena bilangan kedua adalah 0.";
        }

        echo "<br><br>";
    }

    ?>

</body>
</html>
