<!DOCTYPE html>
<html>
<head>
    <title>Contoh Penggunaan Fungsi Repeat</title>
</head>
<body>

    <h2>Contoh Penggunaan Fungsi Repeat</h2>

    <?php

    function repeat($text, $num = 10)
    {
        echo "<ol>\n";

        for ($i = 0; $i < $num; $i++) {
            echo "<li>$text</li>\n";
        }

        echo "</ol>";
    }

    // Memanggil repeat dengan dua argumen
    echo "<h3>Contoh 1: Menggunakan 15 Pengulangan</h3>";
    repeat("I'm the best", 15);

    // Memanggil repeat dengan satu argumen
    echo "<h3>Contoh 2: Menggunakan Nilai Default (10 Pengulangan)</h3>";
    repeat("You're the man");

    ?>

</body>
</html>