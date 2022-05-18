<?php 
require "../config/config.php";

$id = $_GET["id"]; 

if(hapus($id) > 0 ) {
  echo "
    <script src='../assets/js/plugins/sweetalert.min.js'></script>
    <script>
        alert('data berhasil dihapus!');
        document.location.href = '../pages/dataPenduduk.php';
    </script>
   ";
} else {
  echo "
    <script src='../assets/js/plugins/sweetalert.min.js'></script>
    <script>
        alert('data gagal dihapus!');
        document.location.href = '../pages/dataPenduduk.php';
    </script>
   ";
}

?>