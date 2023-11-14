<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">
    <label>Nama: </label>
    <input type="text" name="nama">
    <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'nama' key exists in $_POST
    if (isset($_POST['nama'])) {
        echo 'Selamat Datang ' . $_POST['nama'];
    } else {
        echo 'Nama tidak ditemukan dalam permintaan POST.';
    }
}

$gaji = 100000000;
$pajak = 0.1;
$thp = $gaji - ($gaji * $pajak);
echo "<br>Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
$nama_hari = date("l");
if ($nama_hari == "Sunday") {
    echo "<br>Minggu";
} elseif ($nama_hari == "Monday") {
    echo "<br>Senin";
} else {
    echo "<br>Selasa";
}

$nama_hari = date("l");
switch ($nama_hari) {
    case "Sunday":
        echo "<br>Minggu";
        break;
    case "Monday":
        echo "<br>Senin";
        break;
    case "Tuesday":
        echo "<br>Selasa";
        break;
    default:
        echo "<br>Sabtu";
}

echo "<br>Perulangan 1 sampai 10 <br />";
for ($i = 1; $i <= 10; $i++) {
    echo "Perulangan ke: " . $i . '<br />';
}

echo "<br>Perulangan Menurun dari 10 ke 1 <br />";
for ($i = 10; $i >= 1; $i--) {
    echo "Perulangan ke: " . $i . '<br />';
}

echo "<br>Perulangan 1 sampai 10 <br />";
$i = 1;
while ($i <= 10) {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
}

echo "<br>Perulangan 1 sampai 10 <br />";
$i = 1;
do {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
} while ($i <= 10);
?>
</body>
</html>
