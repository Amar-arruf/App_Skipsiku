<?php 

// tangkap data  dari Form Tambah data Criteria Penduduk

$pendudukid = htmlspecialchars($_POST["pendudukid"]);
$Alternatifid = htmlspecialchars($_POST["alternatifid"]);
$Penghasilan = htmlspecialchars($_POST["penghasilan"]);
$luasrumah = htmlspecialchars($_POST["luasrumah"]);
$stsrumah = htmlspecialchars($_POST["stsrumah"]);
$sumberair = htmlspecialchars($_POST["sumberair"]);
$ibuhamil = htmlspecialchars($_POST["ibuhamil"]);
$lansia = htmlspecialchars($_POST["lansia"]);
$jml_tanggungan_anak = htmlspecialchars($_POST["jmltanggungananak"]);
$jenis_dinding = htmlspecialchars($_POST["jenisdinding"]);
$jenis_lantai = htmlspecialchars_decode($_POST["jenislantai"]);
$jenis_atap = htmlspecialchars($_POST["jenisatap"]);
$kelas_keputusan = htmlspecialchars($_POST["kelaskeputusan"]);

// tangkap data dari Form Tambah data Penduduk
$alternatifID = htmlspecialchars($_POST["alternatifID"]);
$userID = htmlspecialchars($_POST["userID"]);
$Nama = htmlspecialchars($_POST["nama"]);
$ttl = htmlspecialchars($_POST["ttl"]);
$Jk = htmlspecialchars($_POST["JK"]);
$alamat = htmlspecialchars($_POST["alamat"]);

// tangkap data dari Form Tambah data Criteria Atribut 
$criteriaid = htmlspecialchars($_POST["criteriaid"]);
$userid = htmlspecialchars($_POST["userid"]);
$nama = htmlspecialchars($_POST["nama"]);
$type = htmlspecialchars($_POST["type"]);

// tangkap data dari Form Tambah Data Criteria Value
$criteriaoptionid = htmlspecialchars($_POST["criteriaoptionid"]);
$CriteriaID = htmlspecialchars($_POST["CriteriaID"]);
$kriteria = htmlspecialchars($_POST["kriteria"]);
$klasifikasi = htmlspecialchars($_POST["klasifikasi"]);
$value = htmlspecialchars($_POST["value"]);

?>