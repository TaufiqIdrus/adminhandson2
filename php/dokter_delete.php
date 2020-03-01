<?php
include 'koneksi.php';
$id_doctor = $_POST['id_doctor'];


$sql = "DELETE FROM `doctor` where `id_doctor`='$id_doctor'";
$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
    header("location:../dokter.php?pesan=sukses");
} else {
   echo $koneksi->error;
}
?>