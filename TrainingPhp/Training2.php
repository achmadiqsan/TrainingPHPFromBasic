<?php 

echo "Masukkan Data Pribadi Anda" . PHP_EOL;
$nama = (string)readline('Nama Lengkap : ');
$kerja = (string)readline('Pekerjaan : ');
$umur = (int)readline('Umur : ');
$alamat = (string)readline('Alamat Lengkap : ');

echo PHP_EOL;
echo "****Keterangan Data Pribadi Anda****" . PHP_EOL;
echo "Nama Lengkap Anda Adalah : $nama" . PHP_EOL;
echo "Pekerjaan Anda Adalah : $kerja" . PHP_EOL;
echo "Umur Anda Adalah : $umur Tahun" . PHP_EOL;
echo "Alamat Anda Adalah : $alamat" . PHP_EOL;

 ?>