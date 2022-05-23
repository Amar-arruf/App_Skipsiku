<?php 
require "../config/config.php";

$id = $_GET["id"]; 
$table = $_GET["table"];
$attr = $_GET["Attr"];

if(hapus($id,$attr,$table) > 0 ) {
  echo "
    <script src='../assets/js/plugins/sweetalert.min.js'></script>
    <script>
        alert('data berhasil dihapus!');
        document.location.href = '../pages/dataCriteriaPenduduk.php';
    </script>
   ";
} else {
  echo "
    <script src='../assets/js/plugins/sweetalert.min.js'></script>
    <script>
        alert('data gagal dihapus!');
        document.location.href = '../pages/dataCriteriaPenduduk.php';
    </script>
   ";
}

?>