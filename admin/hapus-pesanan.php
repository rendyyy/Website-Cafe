<?php
include "../conn.php";
$nopo = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM po_terima WHERE nopo='$nopo'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'pesanan.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'pesanan.php'</script>";	
}
?>