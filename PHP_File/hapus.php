<?php

$conn = mysqli_connect("localhost", "root", "", "dbudayana");
$id = $_GET["id"];

$result = mysqli_query($conn, "DELETE FROM tbdosen WHERE idDosen=$id");
if(mysqli_affected_rows($conn) > 0){
    echo"
    <script>
        alert('Data Berhasil Dihapus!');
        document.location.href = '../informasiDosen.php';
    </script>
    ";
} else{
    echo"
    <script>
        alert('Data Gagal Dihapus!');
        document.location.href = '../informasiDosen.php';
    </script>
    ";
}
?>