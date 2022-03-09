<?php
$proses = $_GET ['proses'];
$nama_siswa = $_GET ['nama'];
$matkul = $_GET ['matkul'];
$nilai_UTS = $_GET ['uts'];
$nilai_UAS = $_GET ['uas'];
$nilai_tugas = $_GET ['tugas'];

echo 'proses : ' .$proses;
echo '<br/>Nama : ' .$nama_siswa;
echo '<br/>Mata Kuliah : ' .$matkul;
echo '<br/>Nilai UTS : ' .$nilai_UTS;
echo '<br/>Nilai UAS ' .$nilai_UAS;
echo '<br/>Nilai Tugas : ' .$nilai_tugas;
?>
