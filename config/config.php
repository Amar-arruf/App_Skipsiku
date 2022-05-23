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
     // query insert
   $query = $data;
   mysqli_query($conn, $query);
 
   return mysqli_affected_rows($conn);
 }
 
 function hapus($id, $data, $table) {
  global $conn;
  mysqli_query($conn,"DELETE FROM `$table` WHERE `$data` = '$id'");

  return mysqli_affected_rows($conn);

}

function ubah($data) {
  global $conn; 

    // query insert
  $query = $data;
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

 
?>