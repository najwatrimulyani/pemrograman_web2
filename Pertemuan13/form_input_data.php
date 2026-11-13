<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data Mahasiswa | PHP MySQL</title>

    <style type="text/css">
        body {
            font-family: Verdana, Arial, Helvetica, sans-serif;
        }
        table {
            font-size: 13px;
        }
        input, select {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 12px;
            height: 25px;
            padding: 3px;
        }
        .container {
            border: 0;
            padding: 10px;
            width: 760px;
            margin: 30px auto;
        }
        .judul {
            color: orange;
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="container">

    <form action="action_input_data.php" method="POST" name="form-input-data">

        <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">

            <tr height="46">
                <td width="10%"></td>
                <td width="25%"></td>
                <td width="65%">
                    <span class="judul">Form Input Data Mahasiswa</span>
                </td>
            </tr>

            <tr height="46">
                <td></td>
                <td>ID Mahasiswa / NIM</td>
                <td>
                    <input type="text" name="id_mahasiswa" size="35" maxlength="6" required>
                </td>
            </tr>

            <tr height="46">
                <td></td>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" size="50" maxlength="30" required>
                </td>
            </tr>

            <tr height="46">
                <td></td>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan" required>
                        <option value="">- Pilih Jurusan -</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="Komputer Akuntansi">Komputer Akuntansi</option>
                    </select>
                </td>
            </tr>

            <tr height="46">
                <td></td>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" size="50" maxlength="30" required>
                </td>
            </tr>

            <tr height="46">
                <td></td>
                <td>No. Telp</td>
                <td>
                    <input type="text" name="telepon" size="20" maxlength="12" required>
                </td>
            </tr>

            <tr height="46">
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="Submit" value="Submit">
                    <input type="reset" name="reset" value="Cancel">
                </td>
            </tr>

        </table>

    </form>

</div>

</body>
</html>