<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama" required><br>

        <label>Tanggal Lahir: </label>
        <input type="date" name="tanggal_lahir" required><br>

        <label>Pekerjaan: </label>
        <select name="pekerjaan" required>
            <option value="Programmer">Programmer</option>
            <option value="Desainer">Desainer</option>
            <option value="Manager">Manager</option>
            <option value="Wiraswasta">Wiraswasta</option>
            <option value="Engineer">Engineer</option>
            <option value="Acoounting">Accounting</option>
            <option value="Guru">Guru</option>
        </select><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari form
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        // Hitung umur berdasarkan tanggal lahir
        $tanggal_lahir_obj = new DateTime($tanggal_lahir);
        $sekarang = new DateTime();
        $umur = $sekarang->diff($tanggal_lahir_obj)->y;

        // Tentukan gaji berdasarkan pekerjaan
        switch ($pekerjaan) {
            case 'Programmer':
                $gaji = 5000000;
                break;
            case 'Desainer':
                $gaji = 4500000;
                break;
            case 'Manager':
                $gaji = 7000000;
                break;
             case 'Wiraswasta':
                $gaji = 5600000;
                break;
            case 'Engineer':
                $gaji = 7500000;
                break;
            case 'Accounting':
                $gaji = 5800000;
                break;
            case 'Guru':
                $gaji = 1500000;
                break;
            default:
                $gaji = 0; // Pekerjaan tidak valid
        }

        // Tampilkan output
        echo "<h3>Output:</h3>";
        echo "Nama: $nama<br>";
        echo "Umur: $umur tahun<br>";
        echo "Pekerjaan: $pekerjaan<br>";
        echo "Gaji: Rp. $gaji<br>";
    }
    ?>
</body>
</html>
