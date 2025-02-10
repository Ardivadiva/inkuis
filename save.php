<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

$filePath = 'hasil_kuesioner.xlsx';

// Ambil data dari form
$data = [
    ['1', $_POST['j1'] ?? 'Tidak Dijawab'],
    ['2', $_POST['j2'] ?? 'Tidak Dijawab'],
    ['3', $_POST['q1'] ?? 'Tidak Dijawab'],
    ['4', $_POST['q2'] ?? 'Tidak Dijawab'],
    ['5', $_POST['q3'] ?? 'Tidak Dijawab'],
    ['6', $_POST['q4'] ?? 'Tidak Dijawab'],
    ['7', $_POST['q5'] ?? 'Tidak Dijawab'],
    ['8', $_POST['q6'] ?? 'Tidak Dijawab'],
    ['9', $_POST['q7'] ?? 'Tidak Dijawab'],
    ['10', $_POST['q8'] ?? 'Tidak Dijawab'],
    ['11', $_POST['q9'] ?? 'Tidak Dijawab'],
    ['12', $_POST['q10'] ?? 'Tidak Dijawab'],
    ['13', $_POST['q11'] ?? 'Tidak Dijawab'],
    ['14', $_POST['q12'] ?? 'Tidak Dijawab'],
    ['15', $_POST['q13'] ?? 'Tidak Dijawab'],
    ['16', $_POST['q14'] ?? 'Tidak Dijawab'],
    ['17', $_POST['q15'] ?? 'Tidak Dijawab'],
    ['18', $_POST['q16'] ?? 'Tidak Dijawab'],
    ['19', $_POST['q17'] ?? 'Tidak Dijawab'],
    ['20', $_POST['q18'] ?? 'Tidak Dijawab'],
    ['21', $_POST['q19'] ?? 'Tidak Dijawab'],
    ['22', $_POST['q20'] ?? 'Tidak Dijawab'],
    ['23', $_POST['q21'] ?? 'Tidak Dijawab'],
    ['24', $_POST['q22'] ?? 'Tidak Dijawab'],
    ['25', $_POST['q23'] ?? 'Tidak Dijawab'],
    ['26', $_POST['q24'] ?? 'Tidak Dijawab'],
    ['27', $_POST['q25'] ?? 'Tidak Dijawab'],
    ['28', $_POST['q26'] ?? 'Tidak Dijawab'],
    ['29', $_POST['q27'] ?? 'Tidak Dijawab'],
    ['30', $_POST['q28'] ?? 'Tidak Dijawab']
];

if (file_exists($filePath)) {
    // Load file Excel yang sudah ada
    $spreadsheet = IOFactory::load($filePath);
    $sheet = $spreadsheet->getActiveSheet();

    // Menambahkan data ke baris terakhir
    $lastRow = $sheet->getHighestRow() + 1;
    foreach ($data as $row) {
        $sheet->fromArray($row, NULL, "A$lastRow");
        $lastRow++;
    }
} else {
    // Buat file Excel baru jika belum ada
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Tambahkan header
    $sheet->fromArray(['No', 'Jawaban'], NULL, 'A1');

    // Tambahkan data
    $sheet->fromArray($data, NULL, 'A2');
}

// Simpan file Excel
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save($filePath);

// Redirect kembali ke halaman form
header('Location: index.php');
exit();
?>
