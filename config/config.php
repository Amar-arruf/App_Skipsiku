<?php 
 //koneksi ke database
 $conn = mysqli_connect("localhost","root","","spk_pkh");

 function query($query) {
   global $conn;
   $result = mysqli_query($conn, $query);
   $rows = [];
   while ( $row = mysqli_fetch_assoc($result) ) {
     $rows[] = $row;
   }
   return $rows;
 }
 function tambah($data) {
   global $conn; 
   // ambil data dari tiap elemen dalam form
    $AlternatifID = htmlspecialchars($data["alternatifID"]);
    $Nama =  htmlspecialchars($data["nama"]);
    $TTL = htmlspecialchars($data["ttl"]);
    $Jk = htmlspecialchars($data["JK"]);
    $Alamat = htmlspecialchars($data["alamat"]);
 
     // query insert
   $query = "INSERT INTO `data penduduk`
              VALUES 
              ('$AlternatifID','A1','$Nama','$TTL','$Jk','$Alamat', current_timestamp(), NULL)
            ";
   mysqli_query($conn, $query);
 
   return mysqli_affected_rows($conn);
 }
 
 function hapus($id) {
  global $conn;
  mysqli_query($conn,"DELETE FROM `data penduduk` WHERE Alternatif_id = '$id'");

  return mysqli_affected_rows($conn);

}

function ubah($data) {
  global $conn; 
  // ambil data dari tiap elemen dalam form
    $AlternatifID = htmlspecialchars($data["alternatifID"]);
    $user_Id = htmlspecialchars($data["userID"]);
    $Nama =  htmlspecialchars($data["nama"]);
    $TTL = htmlspecialchars($data["ttl"]);
    $Jk = htmlspecialchars($data["JK"]);
    $Alamat = htmlspecialchars($data["alamat"]);

    // query insert
  $query = "UPDATE `data penduduk` SET 
              name = '$Nama',
              Tanggal_Lahir= '$TTL',
              Jenis_Kelamin = '$Jk',
              Alamat = '$Alamat',
              diupdate = current_timestamp()
            WHERE Alternatif_id = '$AlternatifID'";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

 
?>