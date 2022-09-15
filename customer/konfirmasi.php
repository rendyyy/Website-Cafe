<?php 
session_start();
if (empty($_SESSION['username'])){
	header('location:../index.php');	
} else {
	include "../conn.php";
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php";?>
<body>
    
	<?php include "header.php"; ?>
	
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-shopping-cart ico-white"></i>Konfirmasi Pesanan</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!-- start: Container -->
		<div class="container">
 
			<!-- start: Table -->
            <div class="title"><h3>Keranjang Belanja</h3></div>
<table class="table table-hover table-condensed">
<tr>
					<th><center>No</center></th>
					<th><center>Nomor Pesanan</center></th>
                    <th><center>Kode Customer</center></th>
					<th><center>Pembayaran Via</center></th>
					<th><center>Tanggal</center></th>
				  	<th><center>Total Harga</center></th>
				  	<th><center>Status</center></th>
				</tr>
			    <?php
				//MENAMPILKAN DETAIL KERANJANG BELANJA//
               
		   
         
                    $sql = mysqli_query($koneksi, "SELECT * FROM konfirmasi ORDER BY id_kon DESC LIMIT 1");
                    $no = 0;
                    while($data = mysqli_fetch_array($sql)){
                    $no++; 
            ?>
            
                <tr>
                <td><center><?php echo $no; ?></center></td>
                <td><center><?php echo $data['id_kon']; ?></center></td>
                <td><center><?php echo $data['kd_cus']; ?></center></td>
                <td><center><?php echo ($data['bayar_via']); ?></center></td>
                <td><center><?php echo ($data['tanggal']); ?></center></td>
				<td><center>Rp. <?php echo number_format($data['jumlah']); ?></center></td>
                <td><center><?php echo ($data['status']); ?></center></td>
                
                </tr>
                
					
                         <?php
                         }
						 ?>

					<?php 
				if(isset($_POST['update'])){
				$sql = mysqli_query($koneksi, "SELECT * FROM konfirmasi ORDER BY id_kon DESC LIMIT 1");
				$data = mysqli_fetch_array($sql);
				$id = $data['id_kon'];
				
				$update = mysqli_query($koneksi, "UPDATE po_terima SET id_kon='$id' WHERE id_kon='0'") or die(mysqli_error($koneksi));	
				if($update){
					echo "<script>alert('Checkout Sukses, Silahkan Tunggu Pesanan Anda'); window.location = 'index1.php'</script>";
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
				}
			}
					
					?>

						</table>
						<form method="post" action="konfirmasi.php">
						<p><div align="right">
						<input class="btn" type="submit" name = "update" value="Check Out &raquo;"/>
						</div></p> 
						</form>


</table>
			
				
			<!-- end: Table -->

		</div>
		<!-- end: Container -->
				
	</div>
	
	<!-- end: Wrapper  -->			

	<?php include "footer-menu.php"; ?>
	<?php include "footer.php"; ?>
<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery-1.8.2.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/flexslider.js"></script>
<script src="../js/carousel.js"></script>
<script src="../js/jquery.cslider.js"></script>
<script src="../js/slider.js"></script>
<script defer="defer" src="../js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>