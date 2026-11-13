<?php

include "koneksi.php";

// Mengecek tombol Submit
if (isset($_POST['Submit'])) {

    // Mengambil data dari form
    $id_mahasiswa = trim($_POST['id_mahasiswa'] ?? '');
    $nama         = trim($_POST['nama'] ?? '');
    $jurusan      = trim($_POST['jurusan'] ?? '');
    $alamat       = trim($_POST['alamat'] ?? '');
    $telepon      = trim($_POST['telepon'] ?? '');

    // Validasi data kosong
    if (
        empty($id_mahasiswa) ||
        empty($nama) ||
        empty($jurusan) ||
        empty($alamat) ||
        empty($telepon)
    ) {
        echo "<script>
                alert('Data Harap Dilengkapi!');
                document.location='form_input_data.php';
              </script>";
        exit;
    }

    // ===== Cek NIM di database =====
    $cek = mysqli_prepare(
        $Open,
        "SELECT id_mahasiswa FROM mahasiswa WHERE id_mahasiswa = ?"
    );

    if (!$cek) {
        die("Query cek gagal: " . mysqli_error($Open));
    }

    mysqli_stmt_bind_param($cek, "s", $id_mahasiswa);
    mysqli_stmt_execute($cek);
    mysqli_stmt_store_result($cek);

    if (mysqli_stmt_num_rows($cek) > 0) {
        mysqli_stmt_close($cek);
        mysqli_close($Open);

        echo "<script>
                alert('NIM sudah dipakai! Silahkan ganti NIM yang lain.');
                document.location='form_input_data.php';
              </script>";
        exit;
    }

    mysqli_stmt_close($cek);

    // ===== Insert data =====
    $input = mysqli_prepare(
        $Open,
        "INSERT INTO mahasiswa (id_mahasiswa, nama, jurusan, alamat, telepon)
         VALUES (?, ?, ?, ?, ?)"
    );

    if (!$input) {
        die("Query insert gagal: " . mysqli_error($Open));
    }

    mysqli_stmt_bind_param(
        $input,
        "sssss",
        $id_mahasiswa,
        $nama,
        $jurusan,
        $alamat,
        $telepon
    );

    $query_input = mysqli_stmt_execute($input);

    if ($query_input) {
        echo "<script>
                alert('Input Data Mahasiswa Berhasil');
                document.location='form_input_data.php';
              </script>";
    } else {
        echo "Input Data Mahasiswa Gagal! Error: " . mysqli_stmt_error($input);
    }

    mysqli_stmt_close($input);
    mysqli_close($Open);

} else {
    echo "Akses tidak valid.";
}

?>