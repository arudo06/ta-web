<?php
include "koneksi.php";
$id_pengguna = $_GET['id'];
$query = "DELETE * FROM tb_user WHERE id_user = '$id'";
$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
    ?>
    <script language="javascript">document.location.href="../../ta/admin/home.php";</script>
<?php
} else {
    echo 'gagal hapus';
}
?>