<?php
include "konek.php";
$sql = "SELECT * FROM user";
$hasil = $konek->query($sql);
$row = [];
if ($hasil->num_rows > 0){
    $row = $hasil->fetch_all(MYSQLI_ASSOC);
}

// Membuat file CSV
$filename = 'data_user.csv';
$file = fopen($filename, 'w');

// Menulis header kolom
$first_row = true;
foreach ($row as $data) {
    if ($first_row) {
        fputcsv($file, array_keys($data));
        $first_row = false;
    }
}

// Menulis data ke dalam file
foreach ($row as $data) {
    fputcsv($file, $data);
}

// Menutup file
fclose($file);

// Mengirim file untuk diunduh
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename=' . $filename);
header('Pragma: no-cache');
readfile($filename);

// Menghapus file setelah diunduh
unlink($filename);
?>
