<?php
session_start();
if (empty($_SESSION['username'])){
	header('location:../index.php');	
} else {
	include "../conn.php";

        $a = "Belum";
        $b = $_GET['total'];
        $c = date("Y-m-d H:i:s");
        $d = "Payment Online";
        
        $query1 = mysqli_query($koneksi, "INSERT INTO konfirmasi (kd_cus, bayar_via, tanggal, jumlah, rekening, bukti_transfer, status) VALUES ('$_SESSION[user_id]', '$d', '$c', '$b', '', '', '$a')") or die(mysqli_error($koneksi));

        $input = mysqli_query($koneksi, "INSERT INTO po_terima( kd_cus, kode, tanggal, qty, total) SELECT kd_cus, kode, tanggal, qty, jumlah FROM cart WHERE kd_cus='$_SESSION[user_id]'") or die(mysqli_error($koneksi));
                     
                      
        if ($query1 and $input) {
                                     
                    $delete = mysqli_query($koneksi, "DELETE FROM cart WHERE kd_cus='$_SESSION[user_id]'"); 
                    echo "<script>alert('Checkout Sukses, silahkan lihat detail pemesanan'); window.location = 'konfirmasi.php'</script>";

                    
                
            } else {
                echo "<script>alert('Checkout Gagal !'); window.location = 'index.php'</script>";

            }
    
}
?>